<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('123456'),
        ]);
        $admin->assignRole('admin');

        $manager = \App\Models\User::create([
            'name' => 'Manager',
            'email' => 'manager@test.com',
            'password' => bcrypt('123456'),
        ]);
        $manager->assignRole('manager');

        $seller = \App\Models\User::create([
            'name' => 'Seller',
            'email' => 'seller@test.com',
            'password' => bcrypt('123456'),
        ]);
        $seller->assignRole('seller');

        $client = \App\Models\User::create([
            'name' => 'Client',
            'email' => 'client@test.com',
            'password' => bcrypt('123456'),
        ]);
        $client->assignRole('client');
    }
}
