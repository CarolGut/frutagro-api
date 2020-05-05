<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_email = new App\UserEmail([
            'email' => 'admin@frutagro.com',
            'status_id' => 'a',
            'principal' => '1'
        ]);

        $user = App\User::create([
            'username' => 'admin',
            'role_id' => 'owner',
            'status_id' => 'a',
            'name' => 'Frutagro',
            'password' => bcrypt('frutagro'),
        ]);

        $user->user_emails()->save($user_email);
    }
}
