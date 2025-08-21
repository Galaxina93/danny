<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

use PragmaRX\Google2FA\Google2FA;
use PragmaRX\Google2FA\Exceptions\InvalidCharactersException;
use PragmaRX\Google2FA\Exceptions\SecretKeyTooShortException;
use PragmaRX\Google2FA\Exceptions\IncompatibleWithGoogleAuthenticatorException;

trait handleTwoFactorTrait
{

    // Inputfield from blade
    public $code;

    /**
     * @throws IncompatibleWithGoogleAuthenticatorException
     * @throws SecretKeyTooShortException
     * @throws InvalidCharactersException
     */
    public function mount(): void
    {
        $google2fa = new Google2FA();
        $this->secretKey = $google2fa->generateSecretKey();
    }

    // Frontend
    public function twoFactorVerify()
    {
        $this->validate([
            'code' => 'required',
        ]);

        if (!$this->user || $this->user->id !== session('2fa_user_id')) {
            return;
        }

        // Zuerst prüfen, ob der eingegebene Code mit dem Google Authenticator übereinstimmt.
        $valid = $this->twoFactorCheckCode($this->user->profile->two_factor_secret, $this->code);

        // Wenn der Code nicht gültig ist, prüfen, ob der eingegebene Code einer der Recovery-Codes ist.
        if (!$valid) {
            $recoveryCodes = json_decode(decrypt($this->user->profile->two_factor_recovery_codes), true);

            // Durchsuchen Sie die Recovery-Codes, um zu sehen, ob der eingegebene Code einer von ihnen ist.
            $valid = in_array($this->code, $recoveryCodes);

            // Wenn der Code gefunden wurde, entfernen Sie ihn aus der Liste der Recovery-Codes und speichern Sie die aktualisierte Liste.
            if ($valid) {
                $recoveryCodes = array_diff($recoveryCodes, [$this->code]);
                $this->user->profile->two_factor_recovery_codes = encrypt(json_encode(array_values($recoveryCodes)));
                $this->user->profile->save();
            }
        }

        if ($valid) {
            Auth::guard(session('guard'))->login($this->user);

            $guard = session('guard');

            session()->forget('2fa_user_id');
            session()->forget('guard');

            return redirect(route($guard . '.dashboard'));
        } else {
            session()->flash('error', 'Der eingegebene Code ist ungültig. Bitte versuchen Sie es erneut.');
        }

        return '';
    }
    public function twoFactorCheckCode($secretKey, $code): bool|int
    {
        $google2fa = new Google2FA();
        return $google2fa->verifyKey($secretKey, $code);
    }

}







