<x-layouts.password-reset title="Passwort Zurücksetzen" subTitle="Gib deine E-Mail Adresse und dein neues Passwort ein.">
    <x-forms.form submit="submit" :grid="false">

        <x-forms.email class="mt-4"/>

        <x-forms.password title="Passwort" variable="password" class="mt-4"/>
        <x-forms.password title="Passwort Wiederholen" variable="passwordConfirm" class="mt-4"/>

        <x-forms.button title="Passwort Zurücksetzen" category="primary" type="submit" class="mt-4"/>

        <x-alerts.message sessionVariable="status"/>

        <x-alerts.errors/>

    </x-forms.form>

</x-layouts.password-reset>
