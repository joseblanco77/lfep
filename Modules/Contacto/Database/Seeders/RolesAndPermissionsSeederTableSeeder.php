<?php

namespace Modules\Contacto\Database\Seeders;

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
        Permission::create(['name' => 'crear_contact_forms']);
        Permission::create(['name' => 'editar_contact_forms']);
        Permission::create(['name' => 'eliminar_contact_forms']);
        Permission::create(['name' => 'ver_contact_forms_messages']);

        // create roles and assign existing permissions
        $adminRole = Role::create(['name' => 'admin_contact_forms']);
        $adminRole->givePermissionTo(['crear_contact_forms', 'editar_contact_forms', 'eliminar_contact_forms', 'ver_contact_forms_messages']);

        $editRole = Role::create(['name' => 'editor_contact_forms']);
        $editRole->givePermissionTo(['crear_contact_forms', 'editar_contact_forms', 'ver_contact_forms_messages']);

        $viewRole = Role::create(['name' => 'checker_contact_forms']);
        $viewRole->givePermissionTo(['ver_contact_forms_messages']);

    }
}
