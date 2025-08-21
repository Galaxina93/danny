<div class="@if(isset($class)) {{ $class }} @endif">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-Mail</label>
    <input
        wire:model.lacy="email"
        @if(isset($autofocus)) autofocus @endif
        @if(isset($required)) required @endif
        type="email"
        name="email"
        class="border border-1 border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5"
        placeholder="name@company.com"
    >
</div>
