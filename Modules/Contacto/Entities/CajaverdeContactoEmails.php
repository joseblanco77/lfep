<?php

namespace Modules\Contacto\Entities;

use Illuminate\Database\Eloquent\Model;

class CajaverdeContactoEmails extends Model
{
    protected $fillable = [
        'email', 'tipo', 'formulario_id'
    ];

    public function formulario()
    {
        return $this->belongsTo(
            \Modules\Contacto\Entities\CajaverdeContactoFormularios::class,
            'formulario_id'
        );
    }
}
