<div class="@if(isset($class)) {{ $class }} @endif" x-data="{ show: false }">

    <label for="{{ $variable }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        @if(isset($title))  {{ $title }} @endif
    </label>

    <div class="relative">
        <input
            x-bind:type="show ? 'text' : 'password'"
            wire:model.lazy="{{ $variable }}"
            name="{{ $variable }}"
            placeholder="••••••••"
            @if(isset($id)) id="{{ $variable }}" @endif
            @if(isset($required)) required @endif
            class="border border-1 border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">

        <button x-on:click="show = !show" type="button"
                class="absolute inset-y-0 right-0 top-0 p-2 text-sm font-medium leading-6 text-gray-900 focus:outline-none">
            <x-heroicon-m-eye x-show="show" class="hero-icons"/>
            <x-heroicon-m-eye-slash x-show="!show" class="hero-icons"/>
        </button>
    </div>

    @error( $variable )
        <p class="text-red-500">{{ $message }}</p>
    @enderror

</div>


