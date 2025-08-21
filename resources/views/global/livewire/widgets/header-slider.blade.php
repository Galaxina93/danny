<div>
    <div class="relative overflow-hidden py-12 md:py-40">
        <div class="absolute inset-0 z-0 bg-black">
            <div x-data="{
            swiper: null,
            initSwiper() {
                this.swiper = new Swiper('.swiper', window.sliderConfig);
            }
        }" x-init="initSwiper"
                 class="swiper relative" style="width: {{ $config['width'] }}; height: {{ $config['height'] }};">
                <div class="swiper-wrapper">
                    @foreach ($slides as $slide)
                        <div class="swiper-slide">
                            <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}" class="w-full h-full object-cover">
                        </div>
                    @endforeach
                </div>

                @if ($config['pagination_active'])
                    <div class="swiper-pagination"></div>
                @endif

                @if ($config['navigation_active'])
                    <div class="swiper-button-prev z-50"></div>
                    <div class="swiper-button-next z-50"></div>
                @endif

                @if ($config['scrollbar_active'])
                    <div class="swiper-scrollbar"></div>
                @endif

                <div class="hidden md:block md:absolute inset-0 z-10 pointer-events-none">
                    <div class="absolute inset-y-0 left-0 w-4/5 bg-gradient-to-r from-black via-transparent to-transparent"></div>
                    <div class="absolute inset-y-0 right-0 w-4/5 bg-gradient-to-l from-black via-transparent to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-black via-transparent to-transparent"></div>
                </div>
            </div>

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                window.sliderConfig = @json($sliderConfig);
            });
        </script>

        <div class="relative z-20 mx-auto max-w-7xl px-6 lg:px-8 py-20">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <div class="bg-gray-500 bg-opacity-50 p-3">
                    <h2 class="text-3xl font-bold tracking-tight text-white md:text-4xl lg:text-6xl">Mann Elektrotechnik GmbH</h2>
                    <p class="mt-6 text-lg leading-8 text-white">
                        "Mann Elektrotechnik GmbH - Ihr Partner für innovative Lösungen in der Welt der Elektrotechnik."
                    </p>
                </div>
            </div>
        </div>



    </div>
</div>
