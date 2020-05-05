<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['name' => 'all', 'status_id' => 'a'],
            ['name' => 'user_management_access', 'status_id' => 'a'],
            ['name' => 'permission_create', 'status_id' => 'a'],
            ['name' => 'permission_edit', 'status_id' => 'a'],
            ['name' => 'permission_show', 'status_id' => 'a'],
            ['name' => 'permission_delete', 'status_id' => 'a'],
            ['name' => 'permission_access', 'status_id' => 'a'],
            ['name' => 'role_create', 'status_id' => 'a'],
            ['name' => 'role_edit', 'status_id' => 'a'],
            ['name' => 'role_show', 'status_id' => 'a'],
            ['name' => 'role_delete', 'status_id' => 'a'],
            ['name' => 'role_access', 'status_id' => 'a'],
            ['name' => 'user_create', 'status_id' => 'a'],
            ['name' => 'user_edit', 'status_id' => 'a'],
            ['name' => 'user_show', 'status_id' => 'a'],
            ['name' => 'user_delete', 'status_id' => 'a'],
            ['name' => 'user_access', 'status_id' => 'a'],
            ['name' => 'status_create', 'status_id' => 'a'],
            ['name' => 'status_edit', 'status_id' => 'a'],
            ['name' => 'status_show', 'status_id' => 'a'],
            ['name' => 'status_delete', 'status_id' => 'a'],
            ['name' => 'status_access', 'status_id' => 'a'],
            ['name' => 'customer_create', 'status_id' => 'a'],
            ['name' => 'customer_edit', 'status_id' => 'a'],
            ['name' => 'customer_show', 'status_id' => 'a'],
            ['name' => 'customer_delete', 'status_id' => 'a'],
            ['name' => 'customer_access', 'status_id' => 'a'],
            ['name' => 'product_create', 'status_id' => 'a'],
            ['name' => 'product_edit', 'status_id' => 'a'],
            ['name' => 'product_show', 'status_id' => 'a'],
            ['name' => 'product_delete', 'status_id' => 'a'],
            ['name' => 'product_access', 'status_id' => 'a'],
        ];

        foreach ($permissions as $row) {
            App\Permission::create($row);
        }
    }
}
