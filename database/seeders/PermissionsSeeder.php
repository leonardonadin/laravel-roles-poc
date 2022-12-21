<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::findByName('admin');
        $role_manager = Role::findByName('manager');
        $role_seller = Role::findByName('seller');
        $role_client = Role::findByName('client');

        $create_users = Permission::create([
            'name' => 'create users',
        ]);
        $role_admin->givePermissionTo($create_users);
        $role_manager->givePermissionTo($create_users);

        $editAllUsers = Permission::create([
            'name' => 'edit all users',
        ]);
        $role_admin->givePermissionTo($editAllUsers);

        $editOwnUsers = Permission::create([
            'name' => 'edit own users',
        ]);
        $role_admin->givePermissionTo($editOwnUsers);
        $role_manager->givePermissionTo($editOwnUsers);

        $deleteAllUsers = Permission::create([
            'name' => 'delete all users',
        ]);
        $role_admin->givePermissionTo($deleteAllUsers);

        $deleteOwnUsers = Permission::create([
            'name' => 'delete own users',
        ]);
        $role_admin->givePermissionTo($deleteOwnUsers);
        $role_manager->givePermissionTo($deleteOwnUsers);

        $createTeams = Permission::create([
            'name' => 'create teams',
        ]);
        $role_admin->givePermissionTo($createTeams);

        $editAllTeams = Permission::create([
            'name' => 'edit all teams',
        ]);
        $role_admin->givePermissionTo($editAllTeams);

        $editOwnTeams = Permission::create([
            'name' => 'edit own teams',
        ]);
        $role_admin->givePermissionTo($editOwnTeams);
        $role_manager->givePermissionTo($editOwnTeams);

        $deleteAllTeams = Permission::create([
            'name' => 'delete all teams',
        ]);
        $role_admin->givePermissionTo($deleteAllTeams);

        $createProducts = Permission::create([
            'name' => 'create products',
        ]);
        $role_admin->givePermissionTo($createProducts);
        $role_manager->givePermissionTo($createProducts);

        $editAllProducts = Permission::create([
            'name' => 'edit all products',
        ]);
        $role_admin->givePermissionTo($editAllProducts);

        $editOwnProducts = Permission::create([
            'name' => 'edit own products',
        ]);
        $role_admin->givePermissionTo($editOwnProducts);
        $role_manager->givePermissionTo($editOwnProducts);

        $deleteAllProducts = Permission::create([
            'name' => 'delete all products',
        ]);
        $role_admin->givePermissionTo($deleteAllProducts);

        $deleteOwnProducts = Permission::create([
            'name' => 'delete own products',
        ]);
        $role_admin->givePermissionTo($deleteOwnProducts);
        $role_manager->givePermissionTo($deleteOwnProducts);

        $createProductPrices = Permission::create([
            'name' => 'create product prices',
        ]);
        $role_admin->givePermissionTo($createProductPrices);
        $role_manager->givePermissionTo($createProductPrices);
        $role_seller->givePermissionTo($createProductPrices);

        $editAllProductPrices = Permission::create([
            'name' => 'edit all product prices',
        ]);
        $role_admin->givePermissionTo($editAllProductPrices);

        $editOwnProductPrices = Permission::create([
            'name' => 'edit own product prices',
        ]);
        $role_admin->givePermissionTo($editOwnProductPrices);
        $role_manager->givePermissionTo($editOwnProductPrices);
        $role_seller->givePermissionTo($editOwnProductPrices);

        $deleteAllProductPrices = Permission::create([
            'name' => 'delete all product prices',
        ]);
        $role_admin->givePermissionTo($deleteAllProductPrices);

        $deleteOwnProductPrices = Permission::create([
            'name' => 'delete own product prices',
        ]);
        $role_admin->givePermissionTo($deleteOwnProductPrices);
        $role_manager->givePermissionTo($deleteOwnProductPrices);

        $createProductStocks = Permission::create([
            'name' => 'create product stocks',
        ]);
        $role_admin->givePermissionTo($createProductStocks);
        $role_manager->givePermissionTo($createProductStocks);
        $role_seller->givePermissionTo($createProductStocks);

        $editAllProductStocks = Permission::create([
            'name' => 'edit all product stocks',
        ]);
        $role_admin->givePermissionTo($editAllProductStocks);

        $editOwnProductStocks = Permission::create([
            'name' => 'edit own product stocks',
        ]);
        $role_admin->givePermissionTo($editOwnProductStocks);
        $role_manager->givePermissionTo($editOwnProductStocks);
        $role_seller->givePermissionTo($editOwnProductStocks);

        $deleteAllProductStocks = Permission::create([
            'name' => 'delete all product stocks',
        ]);
        $role_admin->givePermissionTo($deleteAllProductStocks);

        $deleteOwnProductStocks = Permission::create([
            'name' => 'delete own product stocks',
        ]);
        $role_admin->givePermissionTo($deleteOwnProductStocks);
        $role_manager->givePermissionTo($deleteOwnProductStocks);
    }
}
