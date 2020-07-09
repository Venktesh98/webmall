<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category as ModelsCategory;

class Category extends ModelsCategory    # overriding the voyager Category Model saying that use this App\Category model instead of voayager category model
{
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');    # refrences parent_id
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'product_categories');  #takes the product_categories table
    } 

    public function allProducts()
    {
        $allProducts = collect([]);

        $mainCategoryProducts = $this->products;

        $allProducts = $allProducts->concat($mainCategoryProducts); 

        if($this->children->isNotEmpty())
        {
            foreach($this->children as $child)
            {
                $allProducts = $allProducts->concat($child->products);
            }
        }
        return $allProducts;
    }
}
 