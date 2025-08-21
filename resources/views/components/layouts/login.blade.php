<div>
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

            @if($guard == 'customer')
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Kunden Login
                </h1>
            @endif

            @if($guard == 'admin')
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Admin Login
                </h1>
            @endif

            @if(isset($subTitle))
                   <span class="text-sm"> {{ $subTitle }} </span>
            @endif

            {{ $slot }}

            @if (session()->has('error'))
                <p class="text-sm text-red-500">{{ session('error') }}</p>
            @endif

            <x-alerts.errors/>

            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                Sie haben keinen Account? <a href="/register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Registrieren</a>
            </p>

        </div>
    </div>
</div>
