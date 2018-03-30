<?php

namespace Modules\Contacto\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ContactoCamposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('cajaverde_contacto_campos')->insert(['tipo' => 'text']);
        DB::table('cajaverde_contacto_campos')->insert(['tipo' => 'textarea']);
        DB::table('cajaverde_contacto_campos')->insert(['tipo' => 'email']);
        DB::table('cajaverde_contacto_campos')->insert(['tipo' => 'select']);
    }
}
