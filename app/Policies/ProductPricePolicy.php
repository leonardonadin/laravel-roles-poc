<?php

namespace App\Policies;

use App\Models\ProductPrice;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPricePolicy
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
     * @param  \App\Models\ProductPrice  $productPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ProductPrice $productPrice)
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
        $user->hasPermissionTo('create product-prices');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductPrice  $productPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ProductPrice $productPrice)
    {
        return ($user->hasPermissionTo('update all product-prices')) ||
            (
                $user->hasPermissionTo('update own product-prices') && $user->team_id === $productPrice->team_id
            );
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductPrice  $productPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ProductPrice $productPrice)
    {
        return ($user->hasPermissionTo('delete all product-prices')) ||
            (
                $user->hasPermissionTo('delete own product-prices') && $user->team_id === $productPrice->team_id
            );
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductPrice  $productPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ProductPrice $productPrice)
    {
        return ($user->hasPermissionTo('restore all product-prices')) ||
            (
                $user->hasPermissionTo('restore own product-prices') && $user->team_id === $productPrice->team_id
            );
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProductPrice  $productPrice
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ProductPrice $productPrice)
    {
        return ($user->hasPermissionTo('force-delete all product-prices')) ||
            (
                $user->hasPermissionTo('force-delete own product-prices') && $user->team_id === $productPrice->team_id
            );
    }
}
