<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValeriaCupon extends Model
{
    protected $fillable = [
        'producto',
        'descuento',
        'cupon',
        'envio_gratis',
        'cupon_general',
        'cupon_producto',
        'cupon_categoria',
        'cupon_subcategoria',
        'cupon_lanzamiento',
    ];
}
