<?php

namespace App\Policies;

use App\Product;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;
    // before method is used for accesing first before below methods
    public function before($user)
    {
        if($user->hasRole('admin')){
            return true;
        }
    }

    // voyager method for displaying the Products of seller
    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }

    public function read(User $user,Product $product)
    {
        if(empty($product->shop)){
            return false;
        }
        // gets the shop owner here i.e gets id here of shop
        return $user->id == $product->shop->user_id;     # if condition satisfied returns true else false.
    }

    /**

     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function edit(User $user, Product $product)
    {
        if(empty($product->shop)){
            return false;
        }
        return $user->id == $product->shop->user_id;     # if condition satisfied returns true else false.
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function add(User $user, Product $product)
    {
        if(empty($product->shop)){      # if there is no shop
            return false;
        }

        return $user->hasRole('seller'); 
    }

    public function delete(User $user,Product $product)
    {
        if(empty($product->shop)){
            return false;
        }
        // authenticated user can only delete
        return $user->id == $product->shop->user_id;     # if condition satisfied returns true else false.
    }

}
