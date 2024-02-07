<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValeriaTallaProducto extends Model
{
    protected $fillable = [
        'producto',
        'talla',
    ];
}
