<x-layouts.frontend_layout>

    @livewire('global.widgets.header-slider')

    <x-sections.page-container>

        <!-- Hero section -->
        <div class="relative isolate overflow-hidden bg-gradient-to-b from-primary-100/20">
            <div
                class="absolute inset-y-0 right-1/2 -z-10 -mr-96 w-[200%] origin-top-right skew-x-[-30deg] bg-white shadow-xl shadow-primary ring-1 ring-indigo-50 sm:-mr-80 lg:-mr-96"
                aria-hidden="true"></div>
            <div class="mx-auto max-w-7xl px-6 py-24 lg:px-8">
                <div
                    class="relative mx-auto max-w-2xl lg:mx-0 lg:grid lg:max-w-none lg:grid-cols-2 lg:gap-x-16 lg:gap-y-6 xl:grid-cols-1 xl:grid-rows-1 xl:gap-x-8">

                    <h1 class="max-w-2xl text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl lg:col-span-2 xl:col-auto">
                        Mann Elektrotechnik GmbH - Ihr Anspruch für Elektrotechnik</h1>
                    <div class="mt-6 max-w-xl lg:mt-0 xl:col-end-1 xl:row-start-1">
                        <p class="text-lg leading-8 text-gray-600">
                            Als Innungs- und Meisterbetrieb ist es uns wichtig innovative Lösungen, in einer rasant voranschreitenden Zeit, zu entwickeln. Um mit dem Tempo der fortschreitenden Technologie mithalten zu können, besuchen wir jährlich mehrere Fortbildungen um technisch, den immer neueren und komplexeren Anforderungen, gewachsen zu sein.

                            Im Laufe der Zeit sind wir zertifizierter Fachpartner einiger renommierter Hersteller wie SMA, Tesvolt, Solar Edge, Viessmann und einiger weiterer geworden. Dadurch konnten wir unser Produkt- und Dienstleistungsportfolio noch weiter steigern.
                        </p>

                        <x-forms.button title="Mehr erfahren" category="link" link="/ueber-uns" class="mt-4"/>

                    </div>
                    <img
                        src="{{ URL::to('/images/logo/logo.png') }}"
                        alt=""
                        class="mt-10 aspect-[6/5] w-full max-w-lg rounded-2xl object-contain sm:mt-16 lg:mt-0 lg:max-w-none xl:row-span-2 xl:row-end-2 xl:mt-36">

                </div>
            </div>
            <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-white sm:h-32"></div>
        </div>


        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">

                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Unsere Leistungen im Überblick
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Informieren Sie sich gerne über die Bereiche. Bei Fragen können Sie sich gerne
                    bei uns melden.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">

                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover object-center" src="{{ URL::to('/images/pv/1.2.jpg') }}" alt="Bild">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">PV-Anlagen</h3>
                            <p class="mt-4 text-base text-gray-600">
                                Die Sonne ist eine unerschöpfliche Energiequelle, die wir nutzen können, um unseren eigenen Strom zu erzeugen. Mit einer Photovoltaikanlage (PV-Anlage) auf Ihrem Dach können Sie Sonnenenergie in Strom umwandeln und so Ihren Geldbeutel und die Umwelt schonen.
                            </p>
                            <div class="mt-6">
                                <a href="{{ url('/pv-anlagen') }}" target="_blank" class="text-sm font-semibold leading-6 text-primary hover:opacity-70">
                                    Mehr erfahren <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover object-center" src="{{ URL::to('/images/pv/3.3.png') }}" alt="Bild">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">Speicher & Netzersatz</h3>
                            <p class="mt-4 text-base text-gray-600">
                                Steigende Strompreise, Netzausfälle und die Energiewende – all diese Herausforderungen stellen Unternehmen vor große Aufgaben. Batteriespeicher und Gewerbespeicher bieten eine innovative Lösung, um diesen Herausforderungen zu begegnen und gleichzeitig die Energiekosten zu senken.
                            </p>
                            <div class="mt-6">
                                <a href="{{ url('/batteriespeicher') }}" target="_blank" class="text-sm font-semibold leading-6 text-primary hover:opacity-70">
                                    Mehr erfahren <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover object-center" src="{{ URL::to('/images/pv/6.1.jpg') }}" alt="Bild">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">Schaltschrankbau</h3>
                            <p class="mt-4 text-base text-gray-600">
                                Schaltschränke sind das Herzstück jeder elektrischen Anlage. Sie beherbergen die Steuerungs- und Schalttechnik und sorgen dafür, dass alle elektrischen Komponenten reibungslos funktionieren.
                            </p>
                            <div class="mt-6">
                                <a href="{{ url('/schaltschrankbau') }}" target="_blank" class="text-sm font-semibold leading-6 text-primary hover:opacity-70">
                                    Mehr erfahren <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover object-center" src="{{ URL::to('/images/pv/8.1.jpg') }}" alt="Bild">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">Netzanalysen / Kennlinienmessung</h3>
                            <p class="mt-4 text-base text-gray-600">
                                Die Kennlinienmessung ist ein wichtiges Verfahren zur Analyse der Leistung von Photovoltaik-Anlagen (PV-Anlagen). Mit Hilfe dieser Messung können Fehlerquellen identifiziert und die Anlage optimiert werden, um den höchstmöglichen Ertrag zu erzielen.
                            </p>
                            <div class="mt-6">
                                <a href="{{ url('/kennlinien-messung-netzanalysen') }}" target="_blank" class="text-sm font-semibold leading-6 text-primary hover:opacity-70">
                                    Mehr erfahren <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover object-center" src="{{ URL::to('/images/pv/2.2.jpg') }}" alt="Bild">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">Mieterstrommodelle</h3>
                            <p class="mt-4 text-base text-gray-600">
                                Mieterstrommodelle ermöglichen es Mietern, direkt von der Energiewende zu profitieren und ihren eigenen Beitrag zum Klimaschutz zu leisten. In diesem Modell wird der Strom von einer Photovoltaikanlage auf dem Dach des Mehrfamilienhauses erzeugt und direkt an die Mieter im Haus verkauft.
                            </p>
                            <div class="mt-6">
                                <a href="{{ url('/mieterstrommodelle') }}" target="_blank" class="text-sm font-semibold leading-6 text-primary hover:opacity-70">
                                    Mehr erfahren <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover object-center" src="{{ URL::to('/images/pv/4.1.jpg') }}" alt="Bild">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">Vor-Ort Service & Prüfung PV-Anlagen</h3>
                            <p class="mt-4 text-base text-gray-600">
                                Photovoltaikanlagen (PV-Anlagen) und Industrianlagen sind komplexe Systeme, die einer regelmäßigen Prüfung und Wartung bedürfen. Nur so kann sichergestellt werden, dass die Anlagen effizient und sicher arbeiten und den höchstmöglichen Ertrag liefern.
                            </p>
                            <div class="mt-6">
                                <a href="{{ url('/vor-ort-service-pv-anlagen') }}" target="_blank" class="text-sm font-semibold leading-6 text-primary hover:opacity-70">
                                    Mehr erfahren <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover object-center" src="{{ URL::to('/images/pv/5.1.jpg') }}" alt="Bild">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">Vor-Ort Service & Prüfung Industrieanlagen</h3>
                            <p class="mt-4 text-base text-gray-600">
                                Photovoltaikanlagen (PV-Anlagen) und Industrianlagen sind komplexe Systeme, die einer regelmäßigen Prüfung und Wartung bedürfen. Nur so kann sichergestellt werden, dass die Anlagen effizient und sicher arbeiten und den höchstmöglichen Ertrag liefern.
                            </p>
                            <div class="mt-6">
                                <a href="{{ url('/vor-ort-service-industrieanlagen') }}" target="_blank" class="text-sm font-semibold leading-6 text-primary hover:opacity-70">
                                    Mehr erfahren <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover object-center" src="{{ URL::to('/images/pv/9.1.jpg') }}" alt="Bild">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-900">Leihgeräte & Mobile Stromversorgung</h3>
                            <p class="mt-4 text-base text-gray-600">
                                Sie benötigen kurzfristig eine mobile Stromversorgung für ein Event, eine Baustelle oder einen anderen Einsatzort? Mit unseren Leihgeräten sind Sie flexibel und zuverlässig gerüstet, um Ihren hohen Energiebedarf zu decken.
                            </p>
                            <div class="mt-6">
                                <a href="{{ url('/leih-geraete-stromversorgung') }}" target="_blank" class="text-sm font-semibold leading-6 text-primary hover:opacity-70">
                                    Mehr erfahren <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </dl>
            </div>
        </div>


        <div class="py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Unsere Partner</h2>
                <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <a href="https://new.abb.com/de" target="_blank" rel="noopener noreferrer">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ URL::to('/images/partners/abb.png') }}" alt="ABB" width="158" height="48">
                    </a>
                    <a href="https://hager.com/de" target="_blank" rel="noopener noreferrer">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ URL::to('/images/partners/hager.png') }}" alt="Hager" width="158" height="48">
                    </a>
                    <a href="https://www.meyerburger.com/de/" target="_blank" rel="noopener noreferrer">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ URL::to('/images/partners/meyer_burger.png') }}" alt="Meyer Burger" width="158" height="48">
                    </a>
                    <a href="https://www.q-cells.de/" target="_blank" rel="noopener noreferrer">
                        <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="{{ URL::to('/images/partners/qcells.png') }}" alt="Q-Cells" width="158" height="48">
                    </a>
                    <a href="https://www.se.com/de/de/" target="_blank" rel="noopener noreferrer">
                        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="{{ URL::to('/images/partners/schneider_electric.png') }}" alt="Schneider Electric" width="158" height="48">
                    </a>
                    <a href="https://www.sma.de/" target="_blank" rel="noopener noreferrer">
                        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="{{ URL::to('/images/partners/sma.png') }}" alt="SMA" width="158" height="48">
                    </a>
                    <a href="https://www.solaredge.com/de/" target="_blank" rel="noopener noreferrer">
                        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="{{ URL::to('/images/partners/solaredge.png') }}" alt="Solar Edge" width="158" height="48">
                    </a>
                    <a href="https://ger.sungrowpower.com/" target="_blank" rel="noopener noreferrer">
                        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="{{ URL::to('/images/partners/sungrow.png') }}" alt="Sungrow" width="158" height="48">
                    </a>
                </div>

            </div>
        </div>

    </x-sections.page-container>

</x-layouts.frontend_layout>



