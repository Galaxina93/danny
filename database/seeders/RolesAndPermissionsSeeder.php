<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $customerRole = Role::create(['name' => 'customer']);

        // Admin Rechte
        $adminPermissions = [

            // Admin CRUD
            'manage_admins',
            /*'create_admin',
            'edit_admin',
            'delete_admin',
            'force_delete_admin',
            'archive_admin',*/

            // Admin Profile CRUD
            'manage_admin_profiles',
            /*'create_admin_profile',
            'edit_admin_profile',
            'delete_admin_profile',
            'force_delete_admin_profile',*/

            // Customer CRUD
            'manage_customers',
            /*'create_customer',
            'edit_customer',
            'delete_customer',
            'force_delete_customer',
            'archive_customer',*/

            // Roles CRUD
            'manage_roles'
            /*'create_roles',
            'edit_roles',
            'delete_roles',
            'force_delete_roles',
            'archive_roles',*/

        ];
        foreach ($adminPermissions as $permissionName) {
            $permission = Permission::create(['name' => $permissionName]);
            $adminRole->permissions()->attach($permission);
        }

        // Kunden Rechte
        $customerPermissions = [
            'delete_account'
        ];
        foreach ($customerPermissions as $permissionName) {
            $permission = Permission::create(['name' => $permissionName]);
            $customerRole->permissions()->attach($permission);
        }

    }
}
