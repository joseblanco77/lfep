<?php

namespace Modules\Contacto\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ContactoEmailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('cajaverde_contacto_emails')->insert([
            'email'         => 'erikson@grupoperinola.com',
            'tipo'          => 'to',
            'formulario_id' => 1
        ]);
        DB::table('cajaverde_contacto_emails')->insert([
            'email'         => 'jose.blanco@grupoperinola.com',
            'tipo'          => 'cc',
            'formulario_id' => 1
        ]);
        DB::table('cajaverde_contacto_emails')->insert([
            'email'         => 'joseblanco77@gmail.com',
            'tipo'          => 'bcc',
            'formulario_id' => 1
        ]);
        DB::table('cajaverde_contacto_emails')->insert([
            'email'         => 'attakinsky@gmail.com',
            'tipo'          => 'bcc',
            'formulario_id' => 1
        ]);
    }
}
