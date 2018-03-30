<?php

namespace Modules\Paginas\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // create permissions
        Permission::create(['name' => 'crear_paginas']);
        Permission::create(['name' => 'editar_paginas']);
        Permission::create(['name' => 'eliminar_paginas']);

        // create roles and assign existing permissions
        $adminRole = Role::create(['name' => 'admin_paginas']);
        $adminRole->givePermissionTo(['crear_paginas', 'editar_paginas', 'eliminar_paginas']);

        $editRole = Role::create(['name' => 'editor_paginas']);
        $editRole->givePermissionTo(['crear_paginas', 'editar_paginas']);

    }
}
