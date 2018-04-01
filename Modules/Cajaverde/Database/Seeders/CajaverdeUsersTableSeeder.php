<?php

namespace Modules\Cajaverde\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Cajaverde\Entities\CajaverdeUser;

class CajaverdeUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        CajaverdeUser::create(
            [
                'nombre' => 'Victor',
                'apellido' => 'Suchite',
                'email' => 'suchitevictor@yahoo.es',
                'password' => 'Guate@1965',
                'descripcion' => 'Propietario del sitio',
                'activo' => 1,
            ]
        );

        CajaverdeUser::create(
            [
                'nombre' => 'José',
                'apellido' => 'Blanco',
                'email' => 'joseblanco77@gmail.com',
                'password' => 'jBlanco$$12',
                'descripcion' => 'Desarrolador del sitio.',
                'activo' => 1,
            ]
        );

    }
}
