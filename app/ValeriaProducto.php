<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValeriaProducto extends Model
{
    protected $fillable = [
        'subcategoria',
        'titulo',
        'precio_original',
        'precio_descuento',
        'descuento',
        'descuento_activo',
        'descripcion',
        'existencias',
    ];
}
