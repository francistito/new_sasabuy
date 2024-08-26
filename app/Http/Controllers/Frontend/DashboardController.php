<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Location;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Tax;
use App\Models\Unit;
use App\Models\Variation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('frontend.dashboard')
            ->with('user', $user);
    }

    public function welcome()
    {
        $products = Product::all();
        $categories = Category::where('parent_id', 0)->get();
        return view('welcome')
            ->with('categories', $categories)
            ->with('products', $products);
    }

    public function profile()
    {
        $user = auth()->user();

        return view('frontend.dashboard')
            ->with('user', $user);
    }

    public function product()
    {
        $products = Product::where('user_id', auth()->user()->id)->get();
        $categories = Category::where('parent_id', 0)->get();
        $brands = Brand::latest()->get();
        return view('frontend.products.manage.product_list')
            ->with('categories', $categories)
            ->with('brands', $brands)
            ->with('products', $products);
    }


    public function addProduct()
    {
        $categories = Category::where('parent_id', 0)
            ->orderBy('sorting_order_level', 'desc')
            ->with('childrenCategories')
            ->get();
        $brands = Brand::isActive()->get();
        $units = Unit::isActive()->get();
        $variations = Variation::isActive()->whereNotIn('id', [1, 2])->get();
        $taxes = Tax::isActive()->get();
        $tags = Tag::all();
        return view('frontend.products.manage.add_new', compact('categories', 'brands', 'units', 'variations', 'taxes', 'tags'));
    }


    public function editProduct($slug){

        $product = Product::where('slug', $slug)->firstOrFail();
        $categories = Category::where('parent_id', 0)
            ->orderBy('sorting_order_level', 'desc')
            ->with('childrenCategories')
            ->get();
        $brands = Brand::isActive()->get();
        $units = Unit::isActive()->get();
        $variations = Variation::isActive()->whereNotIn('id', [1, 2])->get();
        $taxes = Tax::isActive()->get();
        $tags = Tag::all();

        return view('frontend.products.manage.edit', compact('product','categories', 'brands', 'units', 'variations', 'taxes', 'tags'));

    }
}
