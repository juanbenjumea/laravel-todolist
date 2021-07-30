<div>

    <h1>Nueva tarea</h1>

    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif

    @if (session()->has('error'))
        <div>{{ session('error') }}</div>
    @endif

    <div>
        <label>Nombre</label>
        <input type="text" wire:model.defer="nombre">
        <button type="button" wire:click.prevent="agregar">Agregar tarea</button>
        @error('nombre') <div>{{ $message }}</div> @enderror
    </div>

    

</div>
