<x-sections.profile-section-area title="Account löschen" description="Lösche dein Konto dauerhaft.">

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                Sobald dein Konto gelöscht wurde, werden alle Ressourcen und Daten dauerhaft gelöscht. Bevor du dein Konto löschst, lade bitte alle Daten oder Informationen herunter, die du beibehalten möchtest.
            </p>
        </div>

        <x-forms.form submit="deleteAccount" :grid="true">
            <x-forms.button title="Account löschen" category="danger" type="submit" class="col-span-4 mt-4"/>
            <x-alerts.message sessionVariable="deleteAccount" class="col-span-full"/>
        </x-forms.form>

</x-sections.profile-section-area>
