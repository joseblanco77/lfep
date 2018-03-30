<?php

namespace Modules\Contacto\Repositories;

use Modules\Cajaverde\Repositories\CajaverdeRepository;
use Modules\Contacto\Entities\CajaverdeContactoFormularios;
use Modules\Contacto\Http\Requests\ContactoFormularioRequest;

class CajaverdeContactoFormulariosRepository extends CajaverdeRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo', 'descripcion', 'slug', 'asunto', 'ayuda',
        'activo', 'accesible',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CajaverdeContactoFormularios::class;
    }

    public function getContactoMessages($slug) 
    {
        $messages = [];
        $formulario =  $this->findWhere(['slug' => $slug])->first();

        foreach ($formulario->campos as $campo) {
            if ($campo->required) {
                $messages["campo_{$campo->id}.required"] = "El campo «{$campo->nombre}» es obligatorio.";    
            }
            if ($campo->campo->tipo === 'email') {
                $messages["campo_{$campo->id}.email"] = "El campo «{$campo->nombre}» debe ser una dirección de correo electrónico válida.";    
            }
        }

        return $messages;  
    }

    public function getContactoRules($slug) 
    {
        $rules = [];
        $formulario =  $this->findWhere(['slug' => $slug])->first();

        foreach ($formulario->campos as $campo) {
            $campoRule  = $campo->required ? 'required' : 'nullable';
            $campoRule .= $campo->campo->tipo === 'email' ? '|email' : '';
            $rules["campo_{$campo->id}"] = $campoRule;
        }

        return $rules;  
    }

    public function getMessage(
        ContactoFormularioRequest $request, 
        CajaverdeContactoFormularios $formulario
    ) 
    {
        $message = [];

        // headers
        $message['encabezado'] = [
            'asunto' => $formulario->asunto,
            'titulo' => $formulario->titulo,
            'descripcion' => $formulario->descripcion
        ];

        // body message
        $message['campos'] = [];
        foreach ($formulario->campos as $campo) {

            $key = "campo_{$campo->id}";
            $valor = ($campo->campo->tipo === 'select') ? 
                explode('|', $campo->valor) : 
                false;
            $message['campos'][$campo->nombre] =  ($valor  && !empty($request->$key)) ? 
                $valor[$request->$key] : 
                (empty($request->$key) ?'-- Sin respuesta --' : $request->$key);
        }    

        // recipients
        $message['mails'] = [
            'to'  => [],
            'cc'  => [],
            'bcc' => [],
        ];
        foreach ($formulario->emails as $email) {
            $message['mails'][$email->tipo][] = $email->email;
        }
        
        // sender headers
        $message['user_agent'] = $request->header('User-Agent');
        $message['ip'] = $request->ip();

        return $message;
    }

}

/*

+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| id          | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| titulo      | varchar(255)     | NO   |     | NULL    |                |
| descripcion | text             | YES  |     | NULL    |                |
| slug        | varchar(255)     | NO   |     | NULL    |                |
| asunto      | varchar(255)     | NO   |     | NULL    |                |
| ayuda       | text             | YES  |     | NULL    |                |
| activo      | tinyint(1)       | NO   |     | 1       |                |
| accesible   | tinyint(1)       | NO   |     | 1       |                |
| created_at  | timestamp        | YES  |     | NULL    |                |
| updated_at  | timestamp        | YES  |     | NULL    |                |
+-------------+------------------+------+-----+---------+----------------+

*/

