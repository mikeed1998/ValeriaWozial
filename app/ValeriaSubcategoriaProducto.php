<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValeriaSubcategoriaProducto extends Model
{
    protected $fillable = [
        'categoria',
        'subcategoria',
        'icono',
    ]
}
