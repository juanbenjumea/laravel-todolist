<?php

namespace App\Http\Livewire;

use App\Models\Tasks;

use Livewire\Component;

class Formulario extends Component
{
    public $nombre;

    protected $listeners = ['tareaRestaurada' => 'guardarTarea', 'limpiarMensajes' => 'limpiarMensajes'];

    public function rules()
    {
        return [
            'nombre' => ['required',
                        'max:250']
        ];
    }

    public function render()
    {
        return view('livewire.formulario');
    }

    public function agregar()
    {
        $this->validate();

        $tarea = $this->guardarTarea($this->nombre);
    }

    public function guardarTarea($nombre)
    {
        $tarea = new Tasks;
        $tarea->nombre = $nombre;
        $tarea->save();
        
        if($tarea) {
            session()->flash('message', 'Tarea guardada correctamente.');
            $this->emit('tareaAgregada');
            $this->limpiarFormulario();
        }
        else {
            session()->flash('error', 'La tarea no pudo ser guardada');
        }
    }
    
    public function limpiarFormulario()
    {
        $this->nombre = '';
    }

    public function limpiarMensajes()
    {
        session()->forget('message');
        session()->forget('error');
    }
}
