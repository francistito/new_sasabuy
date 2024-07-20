<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;


class ProductsController extends Controller
{

    # delete product
    public function products()
    {

        $products = Product::all();
        return view('frontend.products.all_products')
            ->with('products', $products);
    }

    # delete product
    public function details($slug)
    {

        $product = Product::where('slug', $slug)->first();

        return view('frontend.products.product_details')
            ->with('product', $product);
        #
    }

    public function getByCategory($category_id =null)
    {
        $products = Product::all();
        $parent_categories = Category::where('parent_id', 0)->get();

        if ($category_id)
        {
            $product_ids = \DB::table('product_categories')->where('category_id', $category_id)->pluck('product_id');
            $products = Product::whereIn('id', $product_ids)->get();
        }

        return view('frontend.products.product_by_category')
            ->with('parent_categories', $parent_categories)
            ->with('products', $products);
    }

    public function search()
    {
        $products = Product::all();
        $parent_categories = Category::where('parent_id', 0)->get();
//
//            $product_ids = \DB::table('product_categories')->where('category_id', $category_id)->pluck('product_id');
//            $products = Product::whereIn('id', $product_ids)->get();


        return view('frontend.products.product_by_category')
            ->with('parent_categories', $parent_categories)
            ->with('products', $products);
    }
}
