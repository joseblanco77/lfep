<?php

namespace Modules\Contacto\Repositories;

use Modules\Contacto\Entities\CajaverdeContactoEmails;
use Modules\Cajaverde\Repositories\CajaverdeRepository;

class CajaverdeContactoEmailsRepository extends CajaverdeRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email', 'tipo', 'formulario_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CajaverdeContactoEmails::class;
    }

}

/*

+---------------+-----------------------+------+-----+---------+----------------+
| Field         | Type                  | Null | Key | Default | Extra          |
+---------------+-----------------------+------+-----+---------+----------------+
| id            | int(10) unsigned      | NO   | PRI | NULL    | auto_increment |
| email         | varchar(255)          | NO   |     | NULL    |                |
| tipo          | enum('to','cc','bcc') | NO   |     | NULL    |                |
| formulario_id | int(10) unsigned      | NO   | MUL | NULL    |                |
| created_at    | timestamp             | YES  |     | NULL    |                |
| updated_at    | timestamp             | YES  |     | NULL    |                |
+---------------+-----------------------+------+-----+---------+----------------+

*/