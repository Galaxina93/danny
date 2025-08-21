<div @if(isset($class)) class="{{ $class }}" @endif>
    @if($category == 'primary')
        <button
            @if(isset($wireClick)) wire:click="{{ $wireClick }}" @endif
        @if(isset($type)) type="{{ $type }}" @else type="button" @endif class="btn-primary">{{ $title }}</button>
    @endif

    @if($category == 'secondary')
        <button
            @if(isset($wireClick)) wire:click="{{ $wireClick }}" @endif
        @if(isset($type)) type="{{ $type }}" @else type="button" @endif class="btn-secondary">{{ $title }}</button>
    @endif

    @if($category == 'danger')
        <button
            @if(isset($wireClick)) wire:click="{{ $wireClick }}" @endif
        @if(isset($type)) type="{{ $type }}" @else type="button" @endif class="btn-danger">{{ $title }}</button>
    @endif

    @if($category == 'link')
        <a @if(isset($link)) href="{{ $link }}" @endif>
            <button
                @if(isset($wireClick)) wire:click="{{ $wireClick }}" @endif
            class="btn-primary">{{ $title }}</button>
        </a>
    @endif
</div>



