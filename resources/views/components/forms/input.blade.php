<div class="@if(isset($class)){{ $class }}@endif">

    <label for="{{ $variable }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        @if(isset($title))  {{ $title }} @endif
    </label>

    <div class="relative">
        <input
            wire:model.lazy="{{ $variable }}"
            type="{{ $type }}"
            name="{{ $variable }}"
            @if(isset($placeholder)) placeholder="{{ $placeholder }}" @endif
            @if(isset($id)) id="{{ $variable }}" @endif
            @if(isset($required)) required @endif
            class="border border-1 border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5">
    </div>

    @error( $variable )
    <p class="text-red-500">{{ $message }}</p>
    @enderror

</div>
