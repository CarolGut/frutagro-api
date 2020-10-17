<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_permissions = [];
        $permissions = App\Permission::all()->toArray();

        $owner_permissions = [
            'role' => 'owner',
            'permissions' => [1]
        ];

        $filtered = Arr::where($permissions, function ($value, $key) {
            return !Str::contains($value['name'], ['all', 'user', 'staff_management', 'roles', 'permissions']);
        });

        $admin_permissions = [
            'role' => 'admin',
            'permissions' => Arr::pluck($filtered, 'id')
        ];

        $person_customer_permissions = [
            'role' => 'person',
            'permissions' => [2]
        ];

        $business_customer_permissions = [
            'role' => 'business',
            'permissions' => [2]
        ];


        array_push($role_permissions, $owner_permissions, $admin_permissions, $person_customer_permissions, $business_customer_permissions);

        foreach ($role_permissions as $row) {
            $role = App\Role::find($row['role']);
            $role->permissions()->attach($row['permissions']);
        }
    }
}
