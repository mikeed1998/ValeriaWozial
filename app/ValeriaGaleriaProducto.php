<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValeriaGaleriaProducto extends Model
{
    protected $fillable = [
        'producto',
        'galeria',
    ];
}
