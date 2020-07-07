<?php

namespace App\Policies;

use App\Shop;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;
    // before method is used for accesing first before below methods
    public function before($user)
    {
        if($user->hasRole('admin')){
            return true;
        }
    }

    // voyager method for displaying the shops of seller
    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }

    public function read(User $user,Shop $shop)
    {
        return $user->id == $shop->user_id;     # if condition satisfied returns true else false.
    }

    /**

     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function edit(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;     # if condition satisfied returns true else false.
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function add(User $user, Shop $shop)
    {
        //
    }

    public function delete(User $user,Shop $shop)
    {
        // authenticated user can only delete
        return $user->id == $shop->user_id;     # if condition satisfied returns true else false.
    }

}
