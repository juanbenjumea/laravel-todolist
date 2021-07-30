<?php

namespace App\Http\Livewire;

use App\Models\Tasks;

use Livewire\Component;

class Lista extends Component
{
    public $tareas = [];
    public $tareaBorrada = '';

    protected $listeners = ['tareaAgregada' => 'cargarTareas'];

    public function mount()
    {
        $this->cargarTareas();
    }

    public function cargarTareas()
    {
        $this->tareas = Tasks::orderBy('created_at', 'asc')->get();
    }

    public function borrar($id)
    {   
        $this->emit('limpiarMensajes');

        $tarea = Tasks::find($id);
        if($tarea) {

            $this->tareaBorrada = $tarea->nombre;
            $tarea->delete();
            $this->cargarTareas();
            
            session()->flash('undo', 'Tarea eliminada correctamente.');
        }
    }

    public function deshacerBorrado()
    {
        $this->emit('tareaRestaurada', $this->tareaBorrada);
        session()->forget('undo');
    }

    public function render()
    {
        return view('livewire.lista');
    }
}
