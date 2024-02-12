<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValeriaDireccionUsuario extends Model
{
    protected $fillable = [
        'usuario',
        'name_principal',
        'name_recibe',
        'calle',
        'numero_exterior',
        'numero_interior',
        'entre_calles',
        'colonia',
        'codigo_postal',
        'municipio',
        'estado',
        'pais',
        'correo_loc',
        'telefono_loc',
        'direccion',
        'predeterminado',
    ];
}
