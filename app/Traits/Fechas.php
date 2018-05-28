<?php

namespace App\Traits;

use Jenssegers\Date\Date;

trait Fechas 
{
    public function getCreatedAtAttribute($fecha)
    {
        return new Date($fecha);
    }
}