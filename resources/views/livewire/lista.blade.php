<div>
    
    @if (session()->has('undo'))
        <div class="text-green-600 font-semibold text-md p-3 text-center">
            {{ session('undo') }}
            <button type="button" wire:click.prevent="deshacerBorrado">Deshacer</button>
        </div>
    @endif


    <div class="font-semibold text-xl mb-2 bg-black bg-opacity-75 text-white p-4">Lista de tareas</div>
    @forelse($tareas as $tarea)
        <div class="flex justify-between items-center p-3 @if($loop->iteration % 2 == 0) bg-gray-100 @endif">
            <div>
                {{ $tarea->nombre }}
            </div>
            <div>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-1"
                    type="button" wire:click.prevent="borrar({{ $tarea->id }})">Borrar</button>
            </div>
        </div>
    @empty
        <p>No tienes tareas. Crea una nueva en el formulario.</p>
    @endforelse
</div>
