<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValeriaLanzamientoProducto extends Model
{
    protected $fillable = [
        'producto',
        'lanzamiento',
    ];
}
