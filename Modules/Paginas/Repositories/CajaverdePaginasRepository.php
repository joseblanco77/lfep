<?php

namespace Modules\Paginas\Repositories;

use Modules\Paginas\Entities\CajaverdePaginas;
use Modules\Paginas\Http\Requests\PaginasRequest;
use Modules\Cajaverde\Repositories\CajaverdeRepository;

class CajaverdePaginasRepository extends CajaverdeRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre', 'slug', 'descripcion', 'contenido', 'activa',
        'meta_description', 'meta_author',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CajaverdePaginas::class;
    }

    public function storePagina(PaginasRequest $request)
    {
        dd('PaginasRequest', $request->all());
    }

}

/*

+------------------+------------------+------+-----+---------+----------------+
| Field            | Type             | Null | Key | Default | Extra          |
+------------------+------------------+------+-----+---------+----------------+
| id               | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| nombre           | varchar(255)     | NO   |     | NULL    |                |
| slug             | varchar(255)     | NO   | UNI | NULL    |                |
| descripcion      | text             | YES  |     | NULL    |                |
| contenido        | longtext         | YES  |     | NULL    |                |
| activa           | tinyint(1)       | NO   |     | 1       |                |
| meta_description | varchar(255)     | YES  |     | NULL    |                |
| meta_author      | varchar(255)     | YES  |     | NULL    |                |
| _lft             | int(10) unsigned | NO   | MUL | 0       |                |
| _rgt             | int(10) unsigned | NO   |     | 0       |                |
| parent_id        | int(10) unsigned | YES  |     | NULL    |                |
| created_at       | timestamp        | YES  |     | NULL    |                |
| updated_at       | timestamp        | YES  |     | NULL    |                |
+------------------+------------------+------+-----+---------+----------------+

*/

