<?php

namespace Modules\Cajaverde\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CajaverdeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(RolesAndPermissionsSeederTableSeeder::class);
        $this->call(CajaverdeUsersTableSeeder::class);
    }
}
