<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('cid');
        $categoryName = null;
        // dd($categoryId);
        if($categoryId)
        {
            $category = Category::find($categoryId);
            $categoryName = $category->name;
            // $products = $category->products;

            $products = $category->allProducts();
        }  
        else
        {
            $products = Product::take(10)->get();
            // $products = Product::all();
        }
        return view('products.index',compact('products','categoryName'));
    }

    public function search(Request $request)
    {
        // dd($request->all());
        // $pagination_limit = 10;   
        $query = $request->input('query');
        // $query = request('query');

        $products = Product::where('name','LIKE',"%$query%")->paginate(10);
        // $products = Product::paginate(1);
        // dd($products);

        return view('products.catalog',compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show')->with('product',$product);
    }
}
