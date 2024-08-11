<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;


class ProductsController extends Controller
{

    # delete product
    public function products()
    {

        $products = Product::where('is_published',1)->latest()->get();
        return view('frontend.products.all_products')
            ->with('products', $products);
    }

    # delete product
    public function details($slug)
    {
        // Retrieve the product based on the slug
        $product = Product::where('slug', $slug)->first();

        if (!$product) {
            // Handle the case where the product is not found
            return redirect()->back()->with('error', 'Product not found');
        }

        // Get the user who created the product
        $product_user = User::find($product->user_id);

        // Retrieve the category associated with the product
        $category = ProductCategory::where('product_id', $product->id)->first();

        // Initialize related products collection
        $related_products = collect();

        if ($category) {
            // Retrieve the IDs of all products that share the same category
            $related_product_ids = ProductCategory::where('category_id', $category->category_id)
                ->pluck('product_id')
                ->toArray();

            // Retrieve the related products, excluding the current product
            $related_products = Product::whereIn('id', $related_product_ids)
                ->where('is_published', 1)
                ->where('id', '!=', $product->id)
                ->get();
        }

        // Return the view with the product details, user, and related products
        return view('frontend.products.product_details')
            ->with('related_products', $related_products)
            ->with('product_user', $product_user)
            ->with('product', $product);
    }

    public function searchCategory(Request $request)
    {
        $categoryId = $request->input('category');
        $keyword = $request->input('keyword');

        $query = Product::query();

        if ($categoryId) {
            $product_ids=ProductCategory::where('category_id',$categoryId)->pluck('product_id');
            $query->whereIn('id', $product_ids);
        }

//        if ($keyword) {
//            $query->where('name', 'LIKE', "%{$keyword}%")
//                ->orWhere('description', 'LIKE', "%{$keyword}%");
//        }

        $products = $query->get();

        return view('frontend.products.all_products')
            ->with('products', $products);

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
//
//        return view('frontend.products.product_by_category')
//            ->with('parent_categories', $parent_categories)
//            ->with('products', $products);


        return view('frontend.products.all_products')
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
