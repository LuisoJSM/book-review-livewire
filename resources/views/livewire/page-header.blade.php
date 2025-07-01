<div>
    <header class="flex justify-between">
        <div>
            <h2>Hi, {{ $name }}</h2>
            <p>{{ $subtitle }}</p>
        </div>


        <form wire:submit="$refresh">
            <span class="mr-2">Yout name:</span>
            <input type="text" wire:model.live.debounce.500ms="name">
            <button wire:click.prevent="$refresh">Update</button>
        </form>
    </header>
</div>
