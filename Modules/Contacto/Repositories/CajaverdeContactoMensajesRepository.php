<?php

namespace Modules\Contacto\Repositories;

use Modules\Cajaverde\Repositories\CajaverdeRepository;
use Modules\Contacto\Entities\CajaverdeContactoMensajes;

class CajaverdeContactoMensajesRepository extends CajaverdeRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'payload', 'ip'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CajaverdeContactoMensajes::class;
    }

}

/*

+------------+------------------+------+-----+---------+----------------+
| Field      | Type             | Null | Key | Default | Extra          |
+------------+------------------+------+-----+---------+----------------+
| id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| payload    | longtext         | NO   |     | NULL    |                |
| user_agent | varchar(255)     | NO   |     | NULL    |                |
| ip         | varchar(255)     | NO   |     | NULL    |                |
| created_at | timestamp        | YES  |     | NULL    |                |
| updated_at | timestamp        | YES  |     | NULL    |                |
+------------+------------------+------+-----+---------+----------------+

*/