<?php

namespace Modules\Contacto\Entities;

use Illuminate\Database\Eloquent\Model;

class CajaverdeContactoMensajes extends Model
{
    protected $fillable = [
        'payload', 'user_agent', 'ip'
    ];
}
