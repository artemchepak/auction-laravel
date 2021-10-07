<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'add lot']);
        Permission::create(['name' => 'edit lot']);
        Permission::create(['name' => 'delete lot']);
        Permission::create(['name' => 'add bid']);
        Permission::create(['name' => 'delete bid']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('add lot');
        $role1->givePermissionTo('edit lot');
        $role1->givePermissionTo('delete lot');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('add bid');
        $role2->givePermissionTo('delete bid');
    }
}
