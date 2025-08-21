<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Alpine v2 -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        @livewireStyles

    </head>

    <body class="min-h-screen bg-gray-50 dark:bg-gray-900">


        <div id="sitebar" x-data="{ open: false }" class="relative z-50 lg:hidden" role="dialog" aria-modal="true">

            <div x-show="open"
                 x-transition:enter="transition-opacity ease-linear duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-linear duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"

                 class="fixed inset-0 bg-gray-900/80"></div>

            <div x-show="open" class="fixed inset-0 flex">

                <div x-show="open"
                     x-transition:enter="transition ease-in-out duration-300 transform"
                     x-transition:enter-start="-translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transition ease-in-out duration-300 transform"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="-translate-x-full"
                     class="relative mr-16 flex w-full max-w-xs flex-1">

                    {{-- Close Sitebar Button --}}
                    <div x-show="open"
                         x-transition:enter="ease-in-out duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="ease-in-out duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button @click="open = false" type="button" class="-m-2.5 p-2.5">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>


                    <!-- Sidebar component -->
                    <div class="relative flex grow flex-col gap-y-5 overflow-y-auto bg-black px-6 pb-4">
                        <div class="flex h-16 shrink-0 items-center">
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="Your Company">
                        </div>

                        {{-- Navigation --}}
                        @livewire($guard . '.navigation.' . $guard . '-navigation')

                    </div>

                </div>
            </div>

        </div>

        <!-- Static sidebar for desktop -->
        <div class="relative hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-black px-6 pb-4">
                <div class="flex h-16 shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="Your Company">
                </div>

                {{-- Navigation --}}
                @livewire($guard . '.navigation.' . $guard . '-navigation')

            </div>
        </div>

        <div class="lg:pl-72">

            <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">

                <button id="open-sitebar-button" type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

                {{-- Mobile Sitebar opening --}}
                <script>

                    const myDiv = document.getElementById('sitebar');
                    const openButton = document.getElementById('open-sitebar-button');

                    openButton.addEventListener('click', () => {
                        myDiv.__x.$data.open = true;
                    });

                </script>

                <!-- Separator -->
                <div class="h-6 w-px bg-gray-900/10 lg:hidden" aria-hidden="true"></div>

                <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">

                    {{-- Search Input --}}
                    <form class="relative flex flex-1" action="#" method="GET">
                        <label for="search-field" class="sr-only">Search</label>
                        <svg class="pointer-events-none absolute inset-y-0 left-1 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                        </svg>
                        <input class="block h-full w-full py-0 pl-8 pr-0 text-gray-900 placeholder:text-gray-400 sm:text-sm" placeholder="Search..." type="search" name="search">
                    </form>

                    {{-- View Website SVG and profile dropdown --}}
                    <div class="flex items-center gap-x-4 lg:gap-x-6">
                        <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">View Website</span>
                            <a href="/" target="_blank">
                                <x-heroicon-o-globe-asia-australia x-show="show" class="hero-icons"/>
                            </a>
                        </button>

                        {{-- View Notification SVG --}}
                        <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">View notifications</span>
                            <x-heroicon-o-bell x-show="show" class="hero-icons"/>
                        </button>

                        <!-- Separator -->
                        <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-900/10" aria-hidden="true"></div>

                        @livewire('global.profile.profile-dropdown')

                    </div>
                </div>
            </div>

            <main>

                <x-sections.page-container>
                    <x-sections.page-section>

                        @yield('content')

                    </x-sections.page-section>
                </x-sections.page-container>

            </main>

        </div>

        @livewireScripts

    </body>

</html>
