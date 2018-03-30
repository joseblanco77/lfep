<?php

namespace Modules\Contacto\Entities;

use Illuminate\Database\Eloquent\Model;

class CajaverdeContactoFormularioCampo extends Model
{
    protected $table = 'cajaverde_contacto_formulario_campo';

    protected $fillable = [
        'formulario_id', 'campo_id', 'nombre', 'valor', 'descripcion', 'required'
    ];

    public function formulario(){
        return $this->belongsTo(
            \Modules\Contacto\Entities\CajaverdeContactoFormularios::class,
            'formulario_id'
        );
    }    


    public function campo(){
        return $this->belongsTo(
            \Modules\Contacto\Entities\CajaverdeContactoCampos::class,
            'campo_id'
        );
    }    
    
}