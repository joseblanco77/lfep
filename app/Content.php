<?php

namespace App;

use App\Traits\Fechas;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use Fechas;

    protected $table = 'content';
}
