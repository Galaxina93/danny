<x-layouts.login guard="{{ $guard }}">

    @if($activeView == 'login')
        <x-forms.form submit="login" :grid="false">

            <x-forms.email :autofocus="true"/>
            <x-forms.password title="Passwort" variable="password" class="mt-4"/>
            <x-forms.remember class="mt-4"/>
            <x-forms.button title="Einloggen" category="primary" type="submit" class="mt-4"/>

        </x-forms.form>
    @endif
    @if($activeView == 'twoFactor')
        <x-forms.form submit="twoFactorVerify" :grid="false">

            <div class="col-span-full">
                <h2 class="text-xl font-semibold">2-Faktor-Authentifizierung</h2>
                <p class="text-sm">
                    Du hast keinen Zugriff auf den Google Authenticator? Nutze einen deiner Sicherheitscodes.
                </p>
            </div>

            <x-forms.input title="Geben Sie den Google Authenticator Code ein:" variable="code" type="text" class="col-span-full mt-4" required/>

            <x-forms.button title="Bestätigen" category="primary" type="submit" class="mt-4"/>

            <x-alerts.message sessionVariable="status"/>
            <x-alerts.errors/>
        </x-forms.form>
    @endif
    @if($activeView == 'passwordReset')

            <x-heroicon-m-arrow-uturn-left wire:click="setLoginView()" class="hero-icons"/>

            <x-forms.form submit="sendLink" :grid="false">

            <x-forms.form-heading
                class="col-span-full"
                title="Passwort vergessen"
                subTitle="Gib deine E-Mail Adresse ein und erhalte einen Link zum zurücksetzen deines Passworts."
            />

            <x-forms.email class="mt-4"/>

            <x-forms.button title="Link senden" category="primary" type="submit" class="mt-4"/>

            <x-alerts.message sessionVariable="status"/>

            <x-alerts.errors/>

        </x-forms.form>
    @endif
    @if($activeView == 'resetPasswordView')
        <x-forms.form submit="submit" :grid="false">

            <x-forms.form-heading
                class="col-span-full"
                title="Passwort Zurücksetzen"
                subTitle="Gib deine E-Mail Adresse und dein neues Passwort ein."
            />

            <x-forms.email class="mt-4"/>

            <x-forms.password title="Passwort" variable="password" class="mt-4"/>
            <x-forms.password title="Passwort Wiederholen" variable="passwordConfirm" class="mt-4"/>

            <x-forms.button title="Passwort Zurücksetzen" category="primary" type="submit" class="mt-4"/>

            <x-alerts.message sessionVariable="status"/>

            <x-alerts.errors/>

        </x-forms.form>
    @endif

</x-layouts.login>
