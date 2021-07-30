<div>
    
    @if (session()->has('undo'))
        <div>
            {{ session('undo') }}
            <button type="button" wire:click.prevent="deshacerBorrado">Deshacer</button>
        </div>
    @endif


    @forelse($tareas as $tarea)
        <div>
            <div>
                {{ $tarea->nombre }}
            </div>
            <div>
                <button type="button" wire:click.prevent="borrar({{ $tarea->id }})">Borrar</button>
            </div>
        </div>
    @empty
        <p>No tienes tareas. Crea una nueva en el formulario.</p>
    @endforelse
</div>
