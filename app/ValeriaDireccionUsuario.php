<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValeriaDireccionUsuario extends Model
{
    protected $fillable = [
        'usuario',
        'name',
        'lastname',
        'email',
        'telefono',
        'calle',
        'numero_exterior',
        'numero_interior',
        'entre_calles',
        'colonia',
        'codigo_postal',
        'municipio',
        'estado',
        'pais',
        'direccion',
        'predeterminado',
    ];
}
