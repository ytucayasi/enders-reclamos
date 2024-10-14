<?php

namespace App\Livewire\Reclamos;

use App\Models\Reclamo;
use Livewire\Component;

class ReclamoCreate extends Component
{
    public $servicio;
    public $nombre;
    public $apellido;
    public $departamento;
    public $provincia;
    public $distrito;
    public $direccion;
    public $piso;
    public $oficina;
    public $tipo_documento;
    public $numero_documento;
    public $telefono;
    public $email;
    public $datos_apoderado;
    public $tipo;
    public $moneda = 'soles';
    public $monto_reclamado;
    public $descripcion_producto_servicio;
    public $tipo_reclamo;
    public $descripcion_reclamo;
    public $solicitud;

    protected $rules = [
        'servicio' => 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'departamento' => 'required',
        'provincia' => 'required',
        'distrito' => 'required',
        'direccion' => 'required',
        'tipo_documento' => 'required',
        'numero_documento' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
        'tipo' => 'required|in:producto,servicio',
        'moneda' => 'required|in:soles,dolares',
        'monto_reclamado' => 'required|numeric',
        'descripcion_producto_servicio' => 'required',
        'tipo_reclamo' => 'required|in:reclamo,queja',
        'descripcion_reclamo' => 'required',
        'solicitud' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        Reclamo::create($this->all());

        session()->flash('message', 'Reclamo creado exitosamente.');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.reclamos.reclamo-create');
    }
}
