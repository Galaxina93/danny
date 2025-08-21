<form wire:submit.prevent.stop="{{ $submit }}">

    @csrf

    <div @if($grid) class="grid grid-cols-6 gap-6" @endif>

        {{ $slot }}

    </div>

</form>
