<?php

namespace Modules\Contacto\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ContactoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ContactoFormulariosTableSeeder::class);
        $this->call(ContactoCamposTableSeeder::class);
        $this->call(ContactoFormularioCampoTableSeeder::class);
        $this->call(ContactoEmailsTableSeeder::class);
        $this->call(RolesAndPermissionsSeederTableSeeder::class);
    }
}
