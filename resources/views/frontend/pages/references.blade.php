<x-layouts.frontend_layout>

    <x-sections.page-container>

        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <!-- Hintergrundmuster bleibt gleich -->
            </div>
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                    <div class="lg:pr-4">
                        <div class="lg:max-w-lg">
                            <p class="text-base font-semibold leading-7 text-primary">Ein Kundenprojekt</p>
                            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                                Smart-Home-Lösung für eine Arztpraxis
                            </h1>
                            <p class="mt-6 text-xl leading-8 text-gray-700">
                                Projektbeschreibung<br>
                                Für eine mittelgroße Arztpraxis mit mehreren Behandlungszimmern wurde ein intelligentes Smart-Home-System entwickelt und umgesetzt. Ziel war es, Energie zu sparen, die Raumklimatisierung zu automatisieren und die Sicherheit der Räumlichkeiten zu erhöhen – und das alles möglichst wartungsarm. Der Kunde war mit der Umsetzung und Betreuung während und nach dem Projekt sehr zufrieden.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                    <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="{{ URL::to('/images/examples/smart_home_praxis.jpg') }}" alt="Smart-Home-System in einer Arztpraxis">
                </div>

                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                    <div class="lg:pr-4">
                        <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">

                            <p class="mt-6 text-xl leading-8 text-gray-700">
                                Unsere Kernaufgaben<br>
                            </p>

                            <ul role="list" class="mt-8 space-y-8 text-gray-600">
                                <li class="flex gap-x-3">
                                    <!-- Icon -->
                                    <svg class="mt-1 h-5 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="..." clip-rule="evenodd" />
                                    </svg>
                                    <span>
                                        <strong class="font-semibold text-gray-900">Bedarfserhebung und Planung</strong>
                                        Vor Ort wurden die Anforderungen der Praxis analysiert: Automatisierung von Beleuchtung, Heizung, sowie Zugangs- und Alarmsystemen.
                                      </span>
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="mt-1 h-5 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="..." clip-rule="evenodd" />
                                    </svg>
                                    <span>
                                        <strong class="font-semibold text-gray-900">Installation der Komponenten</strong>
                                        Installation von Bewegungsmeldern, smarten Heizkörperthermostaten, Präsenzsensoren und IP-basierten Türsystemen.
                                      </span>
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="mt-1 h-5 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="..." />
                                    </svg>
                                    <span>
                                        <strong class="font-semibold text-gray-900">Systemintegration & Steuerung</strong>
                                        Vernetzung aller Komponenten über ein zentrales Steuerungssystem mit App-Zugriff und Benutzerverwaltung.
                                      </span>
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="mt-1 h-5 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="..." />
                                    </svg>
                                    <span>
                                        <strong class="font-semibold text-gray-900">Übergabe & Schulung</strong>
                                        Einweisung des Praxisteams in die Bedienung des Systems. Erstellung einer übersichtlichen Dokumentation.
                                      </span>
                                </li>
                            </ul>

                            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">
                                Projektergebnisse
                            </h2>
                            <p class="mt-6">
                                Das System arbeitet seit der Inbetriebnahme störungsfrei. Der Kunde berichtete von spürbaren Einsparungen bei den Energiekosten, höherem Komfort für Patienten und Personal sowie einem verbesserten Sicherheitsgefühl. Eine spätere Erweiterung um smarte Rollläden ist bereits in Planung.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </x-sections.page-container>

</x-layouts.frontend_layout>
