@if($showArchive)
    <div>{{ $this->config['crud_title'] ?? $modelName }} - Archiv</div>

    @if($this->hasPermission('archive'))
        <x-heroicon-o-archive-box-x-mark wire:click="toggleVisibility('archive', false)" class="hero-icons" />
    @endif

@elseif($showEdit)
    <div>{{ $this->config['crud_title'] ?? $modelName }} - Bearbeiten</div>
@elseif($showCreate)
    <div>{{ $this->config['crud_title'] ?? $modelName }} - Erstellen</div>
@else
    <div>{{ $this->config['crud_title'] ?? $modelName }}</div>

    @if($this->hasPermission('archive'))
        <x-heroicon-o-archive-box-arrow-down wire:click="toggleVisibility('archive', true)" class="hero-icons" />
    @endif

@endif
