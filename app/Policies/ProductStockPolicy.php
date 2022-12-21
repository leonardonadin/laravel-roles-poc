<?php

namespace App\Policies;

use App\Models\ProductStock;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductStockPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ProductStock $productStock)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        $user->hasPermissionTo('create product-stocks');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ProductStock $productStock)
    {
        return ($user->hasPermissionTo('update all product-stocks')) ||
            (
                $user->hasPermissionTo('update own product-stocks') &&
                $user->id === $productStock->user_id
            );
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ProductStock $productStock)
    {
        return ($user->hasPermissionTo('delete all product-stocks')) ||
            (
                $user->hasPermissionTo('delete own product-stocks') &&
                $user->id === $productStock->user_id
            );
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ProductStock $productStock)
    {
        return ($user->hasPermissionTo('restore all product-stocks')) ||
            (
                $user->hasPermissionTo('restore own product-stocks') &&
                $user->id === $productStock->user_id
            );
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ProductStock $productStock)
    {
        return ($user->hasPermissionTo('force-delete all product-stocks')) ||
            (
                $user->hasPermissionTo('force-delete own product-stocks') &&
                $user->id === $productStock->user_id
            );
    }
}
