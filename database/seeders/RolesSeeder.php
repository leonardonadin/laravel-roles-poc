<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'super-admin',
            'display_name' => 'Super Administrador',
            'description' => 'Super Administrador',
        ]);

        Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador',
        ]);

        Role::create([
            'name' => 'client',
            'display_name' => 'Cliente',
            'description' => 'Cliente',
        ]);

        Role::create([
            'name' => 'manager',
            'display_name' => 'Gerente',
            'description' => 'Gerente',
        ]);

        Role::create([
            'name' => 'seller',
            'display_name' => 'Vendedor',
            'description' => 'Vendedor',
        ]);
    }
}
