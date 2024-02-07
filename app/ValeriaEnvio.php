<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValeriaEnvio extends Model
{
    protected $fillable = [
        'producto',
        'envio_precio',
        'envio_general',
        'envio_producto',
    ];
}
