<div class="flex items-center justify-between @if(isset($class)) {{ $class }} @endif">
    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input wire:model="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary dark:ring-offset-gray-800">
        </div>
        <div class="ml-3 text-sm">
            <label for="remember" class="text-gray-500 dark:text-gray-300">Login merken</label>
        </div>
    </div>
    <span wire:click="setPasswordResetView" class="cursor-pointer text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Passwort vergessen?</span>
</div>
