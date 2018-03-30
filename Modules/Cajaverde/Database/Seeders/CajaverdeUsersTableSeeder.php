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
                'nombre' => 'Soporte',
                'apellido' => 'Perinola',
                'email' => 'soporte@grupoperinola.com',
                'password' => 'lAbs_124215@3',
                'descripcion' => 'Usuario administrativo de Grupo Perinola',
                'activo' => 1,
            ]
        );

        CajaverdeUser::create(
            [
                'nombre' => 'José',
                'apellido' => 'Blanco',
                'email' => 'jose.blanco@grupoperinola.com',
                'password' => 'lAbs_124215@3',
                'descripcion' => 'Chatío encargado de inyectar bugs y luego corregirlos.',
                'activo' => 1,
            ]
        );

        CajaverdeUser::create(
            [
                'nombre' => 'Javier',
                'apellido' => 'Meza',
                'email' => 'javier.meza@grupoperinola.com',
                'password' => 'lAbs_124215@3',
                'descripcion' => 'Usuario de prueba con permisos variables y muchas restricciones.',
                'activo' => 1,
            ]
        );

    }
}
