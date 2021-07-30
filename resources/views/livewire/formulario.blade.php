<div>

    <div class="font-semibold text-xl mb-2 bg-black bg-opacity-75 text-white p-4">Nueva tarea</div>

    @if (session()->has('message'))
        <div class="text-green-600 font-semibold text-md p-3 text-center">{{ session('message') }}</div>
    @endif

    @if (session()->has('error'))
        <div class="text-red-600 font-semibold text-md p-3 text-center">{{ session('error') }}</div>
    @endif

    <div>
        <label>Nombre</label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                wire:model.defer="nombre">
        @error('nombre') <p class="text-red-500 text-xs italic mb-3 ">{{ $message }}</p> @enderror

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-1"
                type="button" wire:click.prevent="agregar">Agregar tarea</button>
    </div>

    

</div>
