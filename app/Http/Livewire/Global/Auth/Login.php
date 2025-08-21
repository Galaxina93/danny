<?php

namespace App\Http\Livewire\Global\Auth;

use App\Models\Session;
use Livewire\Component;
use App\Traits\handleMailsTrait;
use App\Traits\handleTwoFactorTrait;
use Illuminate\Support\Facades\Auth;
use App\Traits\handlePasswordResetTrait;
use Illuminate\Validation\ValidationException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;

class Login extends Component
{
    use handleMailsTrait;
    use handleTwoFactorTrait;
    use handlePasswordResetTrait;
    use WithRateLimiting;

    public object $user;
    public string $guard;

    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public string $activeView = 'login';

    public function mount($guard): void
    {
        $this->guard = $guard;
    }

    public function render()
    {
        return view('global.livewire.auth.login');
    }

    public function login()
    {
        try {
            $this->rateLimit(6);
        } catch (TooManyRequestsException $exception) {
            throw ValidationException::withMessages([
                'email' => "Langsam! Bitte warten Sie noch {$exception->secondsUntilAvailable} Sekunden, bevor Sie sich erneut anmelden.",
            ]);
        }

        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Zuerst die Anmeldeinformationen überprüfen, ohne die Sitzung zu starten
        if (Auth::guard($this->guard)->validate($credentials)) {

            $userModel = (new \App\Models\User)->getUserModelByGuard($this->guard);
            $this->user = $userModel::where('email', $this->email)->first();

            // Prüfen, ob 2FA für den Benutzer aktiviert ist
            if ($this->user->profile->two_factor_is_active) {

                // Setzen der Sitzungsvariable für den 2FA-Prozess
                session(['2fa_user_id' => $this->user->id]);
                session(['guard' => $this->guard]);

                // Weiterleitung zur 2FA-Seite
                $this->activeView = 'twoFactor';

            } else {

                // Wenn 2FA nicht aktiviert ist, den Benutzer normal anmelden
                if (Auth::guard($this->guard)->attempt($credentials, $this->remember)) {

                    $user = Auth::guard($this->guard)->user();
                    $permissions = [];

                    // Get the permissions for each role the user has
                    foreach ($user->roles as $role) {
                        foreach ($role->permissions as $permission) {
                            $permissions[$permission->name] = $permission->name;
                        }
                    }
                    session(["permissions" => $permissions]);

                    // Sitzungsinformationen in der Datenbank speichern
                    $this->setBrowserSession($user);

                    return redirect(route($this->guard . '.dashboard'));
                }

                session()->flash('error', 'Die eingegebenen Anmeldedaten sind ungültig.');
            }

        } else {
            session()->flash('error', 'Die eingegebenen Anmeldedaten sind ungültig.');
        }

        return '';
    }

    //Browser Session
    public function setBrowserSession($user)
    {
        $sessionId = session()->getId();
        $payload = base64_encode(serialize(session()->all()));
        list($shortenedUserAgent, $deviceType) = $this->getShortenedUserAgent(request()->userAgent());

        $sessionData = [
            'id' => $sessionId,
            'user_id' => $user->id,
            'ip_address' => request()->ip(),
            'user_agent' => $shortenedUserAgent,
            'payload' => $payload,
            'device_type' => $deviceType,
            'last_activity' => time(),
        ];

        // Aktualisieren oder Einfügen der Sitzungsinformationen basierend auf der IP-Adresse und der Benutzer-ID
        Session::updateOrInsert(
            ['user_id' => $user->id, 'ip_address' => request()->ip()],
            $sessionData
        );
    }

    public function getShortenedUserAgent($userAgent): array
    {
        $browser = '';
        $os = '';
        $device = '';

        // Betriebssystem erkennen
        if (preg_match('/(Windows|Mac|Linux)/i', $userAgent, $osMatches)) {
            $os = $osMatches[1];
            $device = 'Desktop';
        } elseif (preg_match('/(Android|iPhone)/i', $userAgent, $osMatches)) {
            $os = $osMatches[1];
            $device = 'Mobile';
        }

        // Browser erkennen
        if (preg_match('/(Chrome|Firefox|Safari|Opera|MSIE|Edg|Trident)/i', $userAgent, $browserMatches)) {
            $browser = $browserMatches[1];
        }

        // Microsoft Edge und Internet Explorer behandeln
        if ($browser == 'MSIE' || $browser == 'Trident') {
            $browser = 'Internet Explorer';
        } elseif ($browser == 'Edg') {
            $browser = 'Edge';
        }

        // Verkürzten User-Agent-String und Geräteart zurückgeben
        return [$os . ' - ' . $browser, $device];
    }



    // Views setzen
    public function setPasswordResetView(): void
    {
        // E-Mail Adresse für den Reset Link eingeben
        $this->activeView = 'passwordReset';
    }
    public function setLoginView(): void
    {
        // E-Mail Adresse für den Reset Link eingeben
        $this->activeView = 'login';
    }
}
