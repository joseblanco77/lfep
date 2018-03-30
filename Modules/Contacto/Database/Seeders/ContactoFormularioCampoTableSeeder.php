<?php

namespace Modules\Contacto\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ContactoFormularioCampoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('cajaverde_contacto_formulario_campo')->insert([
            'formulario_id' => 1,
            'campo_id'      => 1,
            'nombre'        => 'Nombre completo',
            'descripcion'   => 'Para tomar en serio tu mensaje, debemos saber quién eres.',
            'valor'         => null,
            'required'      => 1
        ]);
        DB::table('cajaverde_contacto_formulario_campo')->insert([
            'formulario_id' => 1,
            'campo_id'      => 3,
            'nombre'        => 'Correo electrónico',
            'descripcion'   => 'Dirección para darle seguimiento al tu mensaje.',
            'valor'         => null,
            'required'      => 1
        ]);
        DB::table('cajaverde_contacto_formulario_campo')->insert(    [
            'formulario_id' => 1,
            'campo_id'      => 1,
            'nombre'        => 'Teléfono',
            'descripcion'   => '¿Necesitas que te llamemos? Deja tu número.',
            'valor'         => null,
            'required'      => 0
        ]);
        DB::table('cajaverde_contacto_formulario_campo')->insert([
            'formulario_id' => 1,
            'campo_id'      => 2,
            'nombre'        => 'Mensaje',
            'descripcion'   => 'Tus comentarios son muy importantes para nosotros.',
            'valor'         => null,
            'required'      => 1
        ]);
        DB::table('cajaverde_contacto_formulario_campo')->insert([
            'formulario_id' => 1,
            'campo_id'      => 4,
            'nombre'        => '¿Es necesario que te contactemos de vuelta?',
            'descripcion'   => null,
            'valor'         => 'Sí, por favor|No, gracias|No lo tengo claro',
            'required'      => 0
        ]);
    }
}
