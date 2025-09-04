<x-layouts.frontend_layout>

    <x-sections.page-container>

        <div class="mt-24 overflow-hidden">
            {{--<div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
                    <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Das sind wir!</h2>
                        <p class="mt-6 text-xl leading-8 text-gray-600">
                            Mann Elektrotechnik GmbH - Ihr verlässlicher Partner für innovative Elektrotechnik-Lösungen. Wir bieten maßgeschneiderten Service und Fachkompetenz für Ihre Anforderungen. Qualität, Zuverlässigkeit und Kundenzufriedenheit stehen bei uns an erster Stelle.
                        </p>
                        <p class="mt-6 text-base leading-7 text-gray-600">
                            "In der Welt der Elektrotechnik liegt die Kraft der Innovation und die Schönheit der Präzision in der perfekten Harmonie von Strom und Technologie."
                        </p>
                    </div>
                    <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                        <div class="w-full lg:w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                            <img src="{{ URL::to('/images/examples/390-536x354.jpg') }}" alt="" class="aspect-[7/5] w-full lg:max-w-none rounded-2xl bg-gray-50 object-cover">
                        </div>
                        <div class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-full lg:items-start lg:justify-end lg:gap-x-8">
                            <div class="flex w-full lg:w-auto lg:flex-none">
                                <img src="{{ URL::to('/images/examples/391-536x354.jpg') }}" alt="" class="aspect-[7/5] w-full lg:max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                            <div class="hidden sm:block sm:w-full sm:flex-auto lg:w-auto lg:flex-none">
                                <img src="{{ URL::to('/images/examples/420-536x354.jpg') }}" alt="" class="aspect-[4/3] w-full lg:max-w-none rounded-2xl bg-gray-50 object-cover">
                            </div>
                        </div>
                    </div>
                </div>--}}






            </div>

        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-8">Unsere bisherige Geschichte!</h2>

        <ol class="relative border-s border-gray-200 dark:border-gray-700">
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-base font-normal leading-none text-gray-400 dark:text-gray-500">2014</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Start im Nebenerwerb - Vertrieb E-Material</h3>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-base font-normal leading-none text-gray-400 dark:text-gray-500">2018</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Gründung Mann Elektrotechnik / Erd und Tiefbau</h3>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-base font-normal leading-none text-gray-400 dark:text-gray-500">2021</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Änderung der Gesellschaftsform - Mann Elektrotechnik / Erd und Tiefbau GmbH</h3>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-base font-normal leading-none text-gray-400 dark:text-gray-500">2023</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Kauf und Bebauung des ersten Betriebsgeländes - Ilsede</h3>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-base font-normal leading-none text-gray-400 dark:text-gray-500">2023</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ausgliederung der Bau-Tätigkeit - Mann Immobilien GmbH</h3>
            </li>
            <li class="ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-base font-normal leading-none text-gray-400 dark:text-gray-500">2023</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Namensänderung - Mann Elektrotechnik GmbH</h3>
            </li>
        </ol>

        <div class="pt-8">
            <p class="text-lg ">
                Anfangs als klassischer Installationsbetrieb gestartet mit den Schwerpunkten Hausinstallation
                Einfamilienhaus + Mehrfamilienhaus / TV und Netzwerktechnik haben wir uns mittlerweile komplett
                der Energiewende gewidmet:
            </p>
            <ul class="list-disc ml-5 text-base ">
                <li>PV-Anlagen</li>
                <li>Heim- und Gewerbespeicher</li>
                <li>Wallboxen</li>
                <li>Wärmepumpen</li>
            </ul>
            <p class="text-lg pt-4">
                Mittlerweile sind wir lizensierter Fachpartner von namhaften Herstellern wie SMA, Tesvolt, SolarEdge,
                Viessmann und weiteren Herstellern. Die anzuschließenden Projekte variieren vom Einfamilienhaus
                bis zum Megawatt-Projekt. Desweiteren sind die Sparten Mobile Trafostationen und Schaltschrankbau hinzugekommen.
            </p>
        </div>



    </x-sections.page-container>

</x-layouts.frontend_layout>
