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
            'display_name' => 'Criar Usuários',
            'description' => 'Criar Usuários',
        ]);
        $role_admin->givePermissionTo($create_users);
        $role_admin->givePermissionTo($create_users);

        $editUsers = Permission::create([
            'name' => 'edit users',
            'display_name' => 'Editar Usuários',
            'description' => 'Editar Usuários',
        ]);
        $role_admin->givePermissionTo($editUsers);
        $role_manager->givePermissionTo($editUsers);

        $delete_users = Permission::create([
            'name' => 'delete users',
            'display_name' => 'Deletar Usuários',
            'description' => 'Deletar Usuários',
        ]);
        $role_admin->givePermissionTo($delete_users);
        $role_manager->givePermissionTo($delete_users);

        $create_roles = Permission::create([
            'name' => 'create roles',
            'display_name' => 'Criar Funções',
            'description' => 'Criar Funções',
        ]);
        $role_admin->givePermissionTo($create_roles);

        $edit_roles =Permission::create([
            'name' => 'edit roles',
            'display_name' => 'Editar Funções',
            'description' => 'Editar Funções',
        ]);
        $role_admin->givePermissionTo($edit_roles);

        $delete_roles = Permission::create([
            'name' => 'delete roles',
            'display_name' => 'Deletar Funções',
            'description' => 'Deletar Funções',
        ]);
        $role_admin->givePermissionTo($delete_roles);

        $create_permissions = Permission::create([
            'name' => 'create permissions',
            'display_name' => 'Criar Permissões',
            'description' => 'Criar Permissões',
        ]);
        $role_admin->givePermissionTo($create_permissions);

        $edit_permissions = Permission::create([
            'name' => 'edit permissions',
            'display_name' => 'Editar Permissões',
            'description' => 'Editar Permissões',
        ]);
        $role_admin->givePermissionTo($edit_permissions);

        $delete_permissions = Permission::create([
            'name' => 'delete permissions',
            'display_name' => 'Deletar Permissões',
            'description' => 'Deletar Permissões',
        ]);
        $role_admin->givePermissionTo($delete_permissions);

        $create_products = Permission::create([
            'name' => 'create products',
            'display_name' => 'Criar Produtos',
            'description' => 'Criar Produtos',
        ]);
        $role_admin->givePermissionTo($create_products);
        $role_manager->givePermissionTo($create_products);
        $role_seller->givePermissionTo($create_products);

        $edit_products = Permission::create([
            'name' => 'edit products',
            'display_name' => 'Editar Produtos',
            'description' => 'Editar Produtos',
        ]);
        $role_admin->givePermissionTo($edit_products);
        $role_manager->givePermissionTo($edit_products);
        $role_seller->givePermissionTo($edit_products);

        $delete_products = Permission::create([
            'name' => 'delete products',
            'display_name' => 'Deletar Produtos',
            'description' => 'Deletar Produtos',
        ]);
        $role_admin->givePermissionTo($delete_products);
        $role_manager->givePermissionTo($delete_products);
        $role_seller->givePermissionTo($delete_products);

        $create_categories = Permission::create([
            'name' => 'create categories',
            'display_name' => 'Criar Categorias',
            'description' => 'Criar Categorias',
        ]);
        $role_admin->givePermissionTo($create_categories);
        $role_manager->givePermissionTo($create_categories);

        $edit_categories = Permission::create([
            'name' => 'edit categories',
            'display_name' => 'Editar Categorias',
            'description' => 'Editar Categorias',
        ]);
        $role_admin->givePermissionTo($edit_categories);
        $role_manager->givePermissionTo($edit_categories);

        $delete_categories = Permission::create([
            'name' => 'delete categories',
            'display_name' => 'Deletar Categorias',
            'description' => 'Deletar Categorias',
        ]);
        $role_admin->givePermissionTo($delete_categories);
        $role_manager->givePermissionTo($delete_categories);

        $create_orders = Permission::create([
            'name' => 'create orders',
            'display_name' => 'Criar Pedidos',
            'description' => 'Criar Pedidos',
        ]);
        $role_admin->givePermissionTo($create_orders);
        $role_manager->givePermissionTo($create_orders);
        $role_seller->givePermissionTo($create_orders);
        $role_client->givePermissionTo($create_orders);

        $edit_orders = Permission::create([
            'name' => 'edit orders',
            'display_name' => 'Editar Pedidos',
            'description' => 'Editar Pedidos',
        ]);
        $role_admin->givePermissionTo($edit_orders);
        $role_manager->givePermissionTo($edit_orders);
        $role_seller->givePermissionTo($edit_orders);
        $role_client->givePermissionTo($edit_orders);

        $delete_orders = Permission::create([
            'name' => 'delete orders',
            'display_name' => 'Deletar Pedidos',
            'description' => 'Deletar Pedidos',
        ]);
        $role_admin->givePermissionTo($delete_orders);
        $role_manager->givePermissionTo($delete_orders);
        $role_seller->givePermissionTo($delete_orders);

        $create_coupons = Permission::create([
            'name' => 'create coupons',
            'display_name' => 'Criar Cupons',
            'description' => 'Criar Cupons',
        ]);
        $role_admin->givePermissionTo($create_coupons);
        $role_manager->givePermissionTo($create_coupons);

        $edit_coupons = Permission::create([
            'name' => 'edit coupons',
            'display_name' => 'Editar Cupons',
            'description' => 'Editar Cupons',
        ]);
        $role_admin->givePermissionTo($edit_coupons);
        $role_manager->givePermissionTo($edit_coupons);

        $delete_coupons = Permission::create([
            'name' => 'delete coupons',
            'display_name' => 'Deletar Cupons',
            'description' => 'Deletar Cupons',
        ]);
        $role_admin->givePermissionTo($delete_coupons);
        $role_manager->givePermissionTo($delete_coupons);
    }
}
