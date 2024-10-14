<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    use HasFactory;
    protected $fillable = [
        'servicio',
        'nombre',
        'apellido',
        'departamento',
        'provincia',
        'distrito',
        'direccion',
        'piso',
        'oficina',
        'tipo_documento',
        'numero_documento',
        'telefono',
        'email',
        'datos_apoderado',
        'tipo',
        'moneda',
        'monto_reclamado',
        'descripcion_producto_servicio',
        'tipo_reclamo',
        'descripcion_reclamo',
        'solicitud',
        'observaciones'
    ];
}
