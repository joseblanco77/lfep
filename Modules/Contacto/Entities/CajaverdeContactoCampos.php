<?php

namespace Modules\Contacto\Entities;

use Illuminate\Database\Eloquent\Model;

class CajaverdeContactoCampos extends Model
{
    protected $fillable = ['tipo'];

    public function formularios(){
        return $this->hasMany(
            \Modules\Contacto\Entities\CajaverdeContactoFormularios::class,
            'cajaverde_contacto_formulario_campo',
            'campo_id'
        );
    }    
}