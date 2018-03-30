<?php

namespace Modules\Contacto\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ContactoFormulariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('cajaverde_contacto_formularios')->insert(
            [
                'titulo' => 'Contáctenos',
                'descripcion' => 'Formulario de contacto principal',
                'slug' => 'formulario',
                'asunto' => 'Haz recibido un mensaje de tu sitio',
                'ayuda' => 'Si tienes un comentario o pregunta, escríbenos. De ser necesario, pronto recibirás respuesta de nuestro personal.',
                'activo' => 1,
                'accesible' => 1,
            ]
        );

    }
}
