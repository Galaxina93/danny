<div class="mx-auto bg-white dark:bg-gray-900 pt-6">

    <div class="flex justify-center">
        <a href="/" class="md:hidden w-1/3 md:w-14 lg:w-16"><img src="{{ URL::to('/images/logo/logo.png') }}" alt="main_logo"></a>
    </div>

    @php
        $page = basename(request()->path());
    @endphp

    {{--<nav class="bg-white py-4">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                    <nav x-data="{ open: false }">
                        <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white" @click="open = !open" aria-controls="mobile-menu">
                            <span class="sr-only">Open main menu</span>
                            <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                            </div>
                        </button>
                    </nav>

                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <a href="/" class="hidden lg:block w-32"><img src="{{ URL::to('/images/logo/fact_logo.png') }}" alt="second_logo"></a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">

                        <a href="{{ url('/') }}"
                           class="inline-flex items-center px-1 pt-1 font-medium text-gray-900 hover:text-primary
                               @if($page == '') font-bold text-primary @endif
                               ">
                            Startseite
                        </a>

                        <a href="{{ url('/leistungen') }}"
                           class="inline-flex items-center px-1 pt-1 font-medium text-gray-900 hover:text-primary
                               @if($page == 'leistungen') font-bold text-primary @endif
                               ">
                            Leistungen
                        </a>

                        <a href="{{ url('/ueber-uns') }}"
                           class="inline-flex items-center px-1 pt-1 font-medium text-gray-900 hover:text-primary
                               @if($page == 'ueber-uns') font-bold text-primary @endif
                               ">
                            Unternehmen
                        </a>

                        <a href="{{ url('/referenzen') }}"
                           class="inline-flex items-center px-1 pt-1 font-medium text-gray-900 hover:text-primary
                               @if($page == 'referenzen') font-bold text-primary @endif
                               ">
                            Zertifikate
                        </a>

                        <a href="{{ url('/kontakt') }}"
                           class="inline-flex items-center px-1 pt-1 font-medium text-gray-900 hover:text-primary
                               @if($page == 'kontakt') font-bold text-primary @endif
                               ">
                            Kontakt
                        </a>

                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    --}}{{--<button type="button" class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>--}}{{--

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        @livewire('global.profile.profile-dropdown')
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="hidden" id="mobile-menu">
            <div class="space-y-1 pt-2 pb-4">

                <a href="{{ url('/') }}"
                   class="block  py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:text-primary
                   @if($page == '') font-bold text-primary border-l-4 border-primary bg-blue-50 @endif
                   ">
                    Startseite
                </a>

                <a href="{{ url('/ueber-uns') }}"
                   class="block  py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:text-primary
                   @if($page == 'ueber-uns') font-bold text-primary border-l-4 border-primary bg-blue-50 @endif
                   ">
                    Über Uns
                </a>

                <a href="{{ url('/leistungen') }}"
                   class="block  py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:text-primary
                   @if($page == 'leistungen') font-bold text-primary border-l-4 border-primary bg-blue-50 @endif
                   ">
                    Leistungen
                </a>

                <a href="{{ url('/referenzen') }}"
                   class="block  py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:text-primary
                   @if($page == 'referenzen') font-bold text-primary border-l-4 border-primary bg-blue-50 @endif
                   ">
                    Referenzen
                </a>

                <a href="{{ url('/kontakt') }}"
                   class="block  py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:text-primary
                   @if($page == 'kontakt') font-bold text-primary border-l-4 border-primary bg-blue-50 @endif
                   ">
                    Kontakt
                </a>

            </div>
        </div>
    </nav>--}}



    <nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse hidden md:block">
                <img src="{{ URL::to('/images/logo/logo.png') }}" alt="second_logo" class="w-36">
            </a>

            <div class="md:hidden">
                <nav x-data="{ open: false }">
                    <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white" @click="open = !open" aria-controls="mega-menu-full">
                        <span class="sr-only">Open main menu</span>
                        <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                            <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                            <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                        </div>
                    </button>
                </nav>
            </div>

            <div id="mega-menu-full" class="items-center justify-between font-medium hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ url('/') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 hover:text-primary @if($page == '') font-bold text-primary border-l-4 border-primary bg-blue-50 @endif">
                            <div class="p-2">
                                Startseite
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/ueber-uns') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 hover:text-primary @if($page == 'ueber-uns') font-bold text-primary border-l-4 border-primary bg-blue-50 @endif">
                            <div class="p-2">
                                Über Uns
                            </div>
                        </a>
                    </li>
                    <li>
                        <button id="mega-menu-full-dropdown-button" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded md:w-auto hover:bg-gray-100 hover:text-primary">
                            <div class="p-2">
                                Leistungen
                            </div>
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <a href="{{ url('/referenzen') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 hover:text-primary @if($page == 'referenzen') font-bold text-primary border-l-4 border-primary bg-blue-50 @endif">
                            <div class="p-2">
                                Referenzen
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/kontakt') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 hover:text-primary @if($page == 'kontakt') font-bold text-primary border-l-4 border-primary bg-blue-50 @endif">
                            <div class="p-2">
                                Kontakt
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
        <div id="mega-menu-full-dropdown" class="mt-1 border-gray-200 shadow-sm bg-gray-50 md:bg-white border-y dark:bg-gray-800 dark:border-gray-600 hidden">
            <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-4 md:px-6">
                <ul>
                    <li>
                        <a href="{{ url('/pv-anlagen') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="w-full h-32 flex items-center justify-center mb-3">
                                <img src="{{ URL::to('/images/pv/1.2.jpg') }}" class="w-full h-full object-cover" alt="preview">
                            </div>
                            <div class="text-center">
                                <div class="font-semibold">PV-Anlagen</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/mieterstrommodelle') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="w-full h-32 flex items-center justify-center mb-3">
                                <img src="{{ URL::to('/images/pv/2.2.jpg') }}" class="w-full h-full object-cover" alt="preview">
                            </div>
                            <div class="text-center">
                                <div class="font-semibold">Mieterstrommodelle</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="{{ url('/batteriespeicher') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="w-full h-32 flex items-center justify-center mb-3">
                                <img src="{{ URL::to('/images/pv/3.2.jpg') }}" class="w-full h-full object-cover" alt="preview">
                            </div>
                            <div class="text-center">
                                <div class="font-semibold">Speicher & Netzersatz</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/vor-ort-service-pv-anlagen') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="w-full h-32 flex items-center justify-center mb-3">
                                <img src="{{ URL::to('/images/pv/4.1.jpg') }}" class="w-full h-full object-cover" alt="preview">
                            </div>
                            <div class="text-center">
                                <div class="font-semibold">Vor-Ort Service & Prüfung PV-Anlagen</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="{{ url('/schaltschrankbau') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="w-full h-32 flex items-center justify-center mb-3">
                                <img src="{{ URL::to('/images/pv/6.1.jpg') }}" class="w-full h-full object-cover" alt="preview">
                            </div>
                            <div class="text-center">
                                <div class="font-semibold">Schaltschrankbau</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/vor-ort-service-industrieanlagen') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="w-full h-32 flex items-center justify-center mb-3">
                                <img src="{{ URL::to('/images/pv/5.1.jpg') }}" class="w-full h-full object-cover" alt="preview">
                            </div>
                            <div class="text-center">
                                <div class="font-semibold">Vor-Ort Service & Prüfung Industrieanlagen</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="{{ url('/kennlinien-messung-netzanalysen') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="w-full h-32 flex items-center justify-center mb-3">
                                <img src="{{ URL::to('/images/pv/8.1.jpg') }}" class="w-full h-full object-cover" alt="preview">
                            </div>
                            <div class="text-center">
                                <div class="font-semibold">Netzanalysen & Kennlinienmessung</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/leih-geraete-stromversorgung') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="w-full h-32 flex items-center justify-center mb-3">
                                <img src="{{ URL::to('/images/pv/9.1.jpg') }}" class="w-full h-full object-cover" alt="preview">
                            </div>
                            <div class="text-center">
                                <div class="font-semibold">Leihgeräte & Mobile Stromversorgung</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>


    <script>
        document.getElementById('mega-menu-full-dropdown-button').addEventListener('click', function() {
            var dropdown = document.getElementById('mega-menu-full-dropdown');
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            } else {
                dropdown.style.display = 'block';
            }
        });
    </script>
    <script>

        const mobileMenuButton = document.querySelector('[aria-controls="mega-menu-full"]');
        const mobileMenu = document.querySelector('#mega-menu-full');

        // Set the initial state of the mobile menu to hidden
        mobileMenuButton.setAttribute('aria-expanded', 'false');
        mobileMenu.classList.add('hidden');

        mobileMenuButton.addEventListener('click', () => {
            const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
            mobileMenuButton.setAttribute('aria-expanded', !expanded);
            mobileMenu.classList.toggle('hidden');
        });

    </script>

    {{--JavaScript, um das Overlay und das Menü für "Leistungen" zu steuern--}}
    <script>
        // JavaScript, um das Overlay und das Menü für "Leistungen" zu steuern
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownButton = document.getElementById('mega-menu-full-dropdown-button');
            const overlay = document.createElement('div');
            overlay.className = 'overlay';
            const dropdown = document.getElementById('mega-menu-full-dropdown');

            // Event-Listener für Klick auf das Menü-Button hinzufügen
            dropdownButton.addEventListener('click', () => {
                const isOpen = dropdown.style.display === 'block';

                // Anzeigen oder Ausblenden des Overlays basierend auf dem Menüzustand
                if (isOpen) {
                    document.body.appendChild(overlay); // Overlay zum Body hinzufügen
                    overlay.style.display = 'block'; // Overlay anzeigen
                } else {
                    overlay.style.display = 'none'; // Overlay ausblenden
                    if (overlay.parentNode) {
                        overlay.parentNode.removeChild(overlay); // Overlay entfernen
                    }
                }
            });

            // Event-Listener für Klick auf das Overlay hinzufügen
            overlay.addEventListener('click', () => {
                dropdown.style.display = 'none'; // Menü für "Leistungen" ausblenden
                overlay.style.display = 'none'; // Overlay ausblenden
                if (overlay.parentNode) {
                    overlay.parentNode.removeChild(overlay); // Overlay entfernen
                }
            });

            // Event-Listener für Klick auf Listenpunkte im Dropdown-Menü hinzufügen
            const dropdownLinks = dropdown.querySelectorAll('a');
            dropdownLinks.forEach(link => {
                link.addEventListener('click', () => {
                    dropdown.style.display = 'none'; // Menü für "Leistungen" ausblenden
                    overlay.style.display = 'none'; // Overlay ausblenden
                    if (overlay.parentNode) {
                        overlay.parentNode.removeChild(overlay); // Overlay entfernen
                    }
                });
            });
        });


    </script>

</div>
