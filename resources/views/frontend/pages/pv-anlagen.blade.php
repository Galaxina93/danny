<x-layouts.frontend_layout>

    <x-sections.page-container>

        <div id="pv" class="overflow-hidden bg-white py-12 sm:py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-12 lg:items-start">
                    <!-- Bilder links -->
                    <div class="flex flex-col space-y-6">
                        <img src="{{ URL::to('/images/pv/1.1.jpg') }}" alt="Product screenshot"
                             class="rounded-lg shadow-lg object-cover object-center">
                        <img src="{{ URL::to('/images/pv/1.2.jpg') }}" alt="Product screenshot"
                             class="rounded-lg shadow-lg object-cover object-center">
                    </div>

                    <!-- Textblock rechts -->
                    <div class="lg:pl-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base font-semibold leading-7 text-primary">Energie von der Sonne!</h2>
                            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">PV-Anlagen</p>
                            <p class="mt-6 text-lg leading-8 text-gray-600">
                                Die Sonne ist eine unerschöpfliche Energiequelle, die wir nutzen können, um unseren eigenen Strom zu erzeugen. Mit einer Photovoltaikanlage (PV-Anlage) auf Ihrem Dach können Sie Sonnenenergie in Strom umwandeln und so Ihren Geldbeutel und die Umwelt schonen.
                            </p>

                            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor"
                                             class="absolute left-1 top-1 h-5 w-5 text-primary">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M2.25 6 9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0 3.182-5.511m-3.182 5.51-5.511-3.181" />
                                        </svg>
                                        Senkung der Stromkosten
                                    </dt>
                                    <dd class="inline">Sie können Ihren Eigenverbrauch an Strom deutlich erhöhen und so Ihre Stromkosten senken.</dd>
                                </div>

                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                        </svg>
                                        Unabhängigkeit von Energieversorgern
                                    </dt>
                                    <dd class="inline">Sie werden unabhängiger von den steigenden Strompreisen und machen sich selbst zum Energieerzeuger.</dd>
                                </div>

                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-gray-900">
                                        <svg class="absolute left-1 top-1 h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                        </svg>
                                        Umweltschutz
                                    </dt>
                                    <dd class="inline">Sie leisten einen aktiven Beitrag zum Umweltschutz und reduzieren Ihren CO2-Ausstoß.</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </x-sections.page-container>

</x-layouts.frontend_layout>


