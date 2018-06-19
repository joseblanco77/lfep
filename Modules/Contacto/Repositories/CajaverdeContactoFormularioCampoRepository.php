<?php

namespace Modules\Contacto\Repositories;

use Modules\Cajaverde\Repositories\CajaverdeRepository;
use Modules\Contacto\Entities\CajaverdeContactoFormularioCampo;

class CajaverdeContactoFormularioCampoRepository extends CajaverdeRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'formulario_id', 'campo_id', 'nombre',
        'descripcion', 'valor', 'required'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CajaverdeContactoFormularioCampo::class;
    }

}

/*

+---------------+------------------+------+-----+---------+----------------+
| Field         | Type             | Null | Key | Default | Extra          |
+---------------+------------------+------+-----+---------+----------------+
| id            | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| formulario_id | int(10) unsigned | NO   | MUL | NULL    |                |
| campo_id      | int(10) unsigned | NO   | MUL | NULL    |                |
| nombre        | varchar(255)     | NO   |     | NULL    |                |
| descripcion   | varchar(255)     | YES  |     | NULL    |                |
| valor         | text             | YES  |     | NULL    |                |
| required      | tinyint(1)       | NO   |     | 1       |                |
| created_at    | timestamp        | YES  |     | NULL    |                |
| updated_at    | timestamp        | YES  |     | NULL    |                |
+---------------+------------------+------+-----+---------+----------------+

*/