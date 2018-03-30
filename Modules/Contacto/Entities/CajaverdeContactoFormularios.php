<?php

namespace Modules\Contacto\Entities;

use Illuminate\Database\Eloquent\Model;

class CajaverdeContactoFormularios extends Model
{
    protected $fillable = [
        'titulo', 'descripcion', 'slug', 'asunto', 'ayuda',
        'activo', 'accesible',
    ];

    public function campos()
    {
        return $this->hasMany(
            \Modules\Contacto\Entities\CajaverdeContactoFormularioCampo::class,
            'formulario_id'
        );
    }

    public function emails()
    {
        return $this->hasMany(
            \Modules\Contacto\Entities\CajaverdeContactoEmails::class,
            'formulario_id'
        );
    }
}
