<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'show_user',
            'create_user',
            'read_user',
            'update_user',
            'delete_user',
            'show_product',
            'create_product',
            'read_product',
            'update_product',
            'delete_product'
        ];

        $roles = [
            'user',
            'admin',
            'super-admin'
        ];

        foreach ($permissions as $permission) {
            DB::table('permissions')->insert([
                'name'          => $permission,
                'created_at'    => now(),
            ]);
        }

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name'          => $role,
                'created_at'    => now(),
            ]);
        }

        //role 1: permission 1 - 6
        //role 2: permission 1 - 10
        //role 3: permission 1 - 10

        for ($permission_id = 1; $permission_id <= 6; $permission_id++) {
            DB::table('role_has_permissions')->insert([
                'role_id'       => 1,
                'permission_id' => $permission_id,
                'created_at'    => now(),
            ]);
        }

        for ($permission_id = 1; $permission_id <= 10; $permission_id++) {
            DB::table('role_has_permissions')->insert([
                'role_id'       => 2,
                'permission_id' => $permission_id,
                'created_at'    => now(),
            ]);
        }

        for ($permission_id = 1; $permission_id <= 10; $permission_id++) {
            DB::table('role_has_permissions')->insert([
                'role_id'       => 3,
                'permission_id' => $permission_id,
                'created_at'    => now(),
            ]);
        }
    }
}
