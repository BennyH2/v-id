<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // Create the 'get_contact_email' permission
                $getContactEmailPermission = Permission::create(['name' => 'get_contact_email', 'guard_name' => 'web']);
        
                // Add the 'get_contact_email' permission to the 'super_admin' role
                $superAdminRole = Role::findByName('super_admin');
                $superAdminRole->givePermissionTo($getContactEmailPermission);
    }
}
