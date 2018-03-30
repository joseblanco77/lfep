<?php

namespace Modules\Contacto\Repositories;

use Modules\Contacto\Entities\CajaverdeContactoCampos;
use Modules\Cajaverde\Repositories\CajaverdeRepository;

class CajaverdeContactoCamposRepository extends CajaverdeRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CajaverdeContactoCampos::class;
    }

}

/*

+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| tipo       | varchar(255)     | NO   |     | NULL    |                |
| created_at | timestamp        | YES  |     | NULL    |                |
| updated_at | timestamp        | YES  |     | NULL    |                |
+------------+------------------+------+-----+---------+----------------+

*/