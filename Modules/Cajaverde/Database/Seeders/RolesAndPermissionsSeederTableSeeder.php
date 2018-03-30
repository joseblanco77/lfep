<?php

namespace Modules\Cajaverde\Database\Seeders;

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

        // USUARIOS

        // create usuarios permissions
        Permission::create(['name' => 'crear_usuarios']);
        Permission::create(['name' => 'editar_usuarios']);
        Permission::create(['name' => 'eliminar_usuarios']);

        // create roles and assign existing permissions
        $adminUsuariosRole = Role::create(['name' => 'admin_usuarios']);
        $adminUsuariosRole->givePermissionTo(['crear_usuarios', 'editar_usuarios', 'eliminar_usuarios']);

        $editorUsuariosRole = Role::create(['name' => 'editor_usuarios']);
        $editorUsuariosRole->givePermissionTo(['crear_usuarios', 'editar_usuarios']);

        // ROLES 

        // create roles permissions
        Permission::create(['name' => 'crear_roles']);
        Permission::create(['name' => 'editar_roles']);
        Permission::create(['name' => 'eliminar_roles']);

        // create roles and assign existing permissions
        $adminRolesRole = Role::create(['name' => 'admin_roles']);
        $adminRolesRole->givePermissionTo(['crear_roles', 'editar_roles', 'eliminar_roles']);

        $editorRolesRole = Role::create(['name' => 'editor_roles']);
        $editorRolesRole->givePermissionTo(['crear_roles', 'editar_roles']);

        // PERMISOS

        // create permisos permissions
        Permission::create(['name' => 'crear_permisos']);
        Permission::create(['name' => 'editar_permisos']);
        Permission::create(['name' => 'eliminar_permisos']);

        // create permisos and assign existing permissions
        $adminPermisosRole = Role::create(['name' => 'admin_permisos']);
        $adminPermisosRole->givePermissionTo(['crear_permisos', 'editar_permisos', 'eliminar_permisos']);

        $editorPermisosRole = Role::create(['name' => 'editor_permisos']);
        $editorPermisosRole->givePermissionTo(['crear_permisos', 'editar_permisos']);

    }
}
