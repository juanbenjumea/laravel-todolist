@extends('plantilla')

@section('contenido')
    <div class="w-full max-w-xl block-cetered">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="p-4 mb-6">
                @livewire('formulario')
            </div>
            
            <div class="p-4">
                @livewire('lista')
            </div>
        </div>
        </div>
@endsection