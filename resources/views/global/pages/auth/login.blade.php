<x-layouts.guest>
    <section class="dark:bg-gray-900">
        <section class="dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="mx-auto h-24 w-auto" src="/images/logo/fact_logo.png" alt="facturio">
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">

                    <div x-data="{ selectedIndex: 0, selectedComponent: 'customer', components: ['Kunde', 'Admin', 'Manager'], updateComponent: function() { this.selectedComponent = this.components[this.selectedIndex]; } }" x-init="updateComponent()"
                         class="">
                        <div class="relative flex items-center h-10">
                            <template x-for="(option, index) in components" :key="index">
                                <label @click="selectedIndex = index; updateComponent()" class="flex-1 z-10 cursor-pointer text-center transition-colors duration-500 ease-in-out" :class="{ 'text-white': selectedIndex === index }">
                                    <input type="radio" class="hidden" :value="option" name="switch" x-bind:checked="selectedIndex === index" />
                                    <span x-text="option"></span>
                                </label>
                            </template>
                            <div :style="'left: ' + (selectedIndex * 33.3333) + '%;'" class="absolute h-full w-1/3 bg-primary rounded-lg z-0 transition-all duration-500 ease-in-out"></div>
                        </div>
                        <div x-show="selectedComponent === 'Kunde'" class="mt-4">
                            @livewire('global.auth.login',['guard' => 'customer'])
                        </div>
                        <div x-show="selectedComponent === 'Admin'" class="mt-4">
                            @livewire('global.auth.login',['guard' => 'admin'])
                        </div>
                        <!-- Add other components here if needed -->
                    </div>

                </div>
            </div>
        </section>
    </section>
</x-layouts.guest>
