<div>

    <div class="relative isolate mt-24">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
            <defs>
                <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="50%" y="-64" patternUnits="userSpaceOnUse">
                    <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-64" class="overflow-visible fill-gray-50">
                <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M299.5 800h201v201h-201Z" stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
        </svg>
        <div class="mx-auto max-w-xl lg:max-w-4xl">

            <h2 class="text-4xl font-bold tracking-tight text-gray-900">
                Senden Sie uns eine Nachricht.
            </h2>

            <p class="mt-2 text-lg leading-8 text-gray-600">
                Wir beraten Sie gerne! Profitieren sie von unserer Erfahrung im Elektrobereich.
            </p>
            <div class="mt-16 flex flex-col gap-16 sm:gap-y-20 lg:flex-row">
                <form wire:submit.prevent="sending" class="lg:flex-auto">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold leading-6 text-gray-900">Vorname</label>
                            <div class="mt-2.5">
                                <input wire:model="first_name" required type="text" name="first_name" id="first_name" autocomplete="given-name" class="input">
                            </div>
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-semibold leading-6 text-gray-900">Nachname</label>
                            <div class="mt-2.5">
                                <input wire:model="last_name" required type="text" name="last_name" id="last_name" autocomplete="family-name" class="input">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">E-Mail</label>
                            <div class="mt-2.5">
                                <input wire:model="email" required id="email" name="email" type="email" class="input">
                            </div>
                        </div>
                        <div>
                            <label for="mobile" class="block text-sm font-semibold leading-6 text-gray-900">Mobile</label>
                            <div class="mt-2.5">
                                <input wire:model="phone" type="text" name="mobile" id="mobile" class="input">
                            </div>
                        </div>
                        <div class="sm:col-span-2">

                            <div class="flex justify-between">
                                <label class="block text-sm font-medium text-gray-900">Nachricht</label>
                                <span class="text-sm text-gray-500">Max.{{$message_length}}/500</span>
                            </div>

                            <div class="mt-2.5">
                                <textarea wire:model="message" required rows="4" maxlength="500" class="py-3 px-4 block w-full shadow-sm text-gray-900 border border-gray-300 rounded-md" aria-describedby="message-max"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2 text-sm font-light custom-control custom-checkbox">
                        <input wire:model="data_protection" required id="checkbox-2" type="checkbox" name="checkbox-2" aria-required="true" class="custom-control-input" value="1">
                        <label for="checkbox-2" class="custom-control-label">
                            Ich habe die <a href="/policy" target="_blank" class="text-secondary-500 hover:text-primary-700 hover:underline font-semibold">Datenschutzbestimmungen</a> gelesen und erkenne diese ausdrücklich an.
                        </label>
                    </div>

                    <div class="sm:col-span-2 sm:flex sm:justify-end">
                        @if($data_protection != 1)
                            <x-forms.button title="Nachricht senden" category="secondary" type="submit"/>
                        @else
                            <x-forms.button title="Nachricht senden" category="primary" type="submit"/>
                        @endif

                    </div>
                    <div class="sm:col-span-2 sm:flex sm:justify-end">
                        {{--Flash Message--}}
                        @if (session()->has('message'))
                            <div class="flex justify-center mt-2">
                                <div>
                                    <p class="text-green-400">{{ session('message') }}</p>
                                </div>
                            </div>
                        @endif
                    </div>

                </form>
                {{--<div class="lg:mt-6 lg:w-80 lg:flex-none">
                    <figure class="mt-10">
                        <blockquote class="text-lg font-semibold leading-8 text-gray-900">
                            <p>
                                “Qualität und Vertrauen in jeder Verbindung – Ihr Elektromeister für zuverlässige Lösungen.”
                            </p>
                        </blockquote>
                        <figcaption class="mt-10 flex gap-x-6">
                            <img src="{{ URL::to('/images/profile.webp') }}"
                                 alt=""
                                 class="h-12 w-12 flex-none rounded-full bg-gray-50">
                            <div>
                                <div class="text-base font-semibold text-gray-900">Danny Mann</div>
                                <div class="text-sm leading-6 text-gray-600">Mann Elektrotechnik GmbH</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>--}}
            </div>
        </div>
    </div>


</div>
