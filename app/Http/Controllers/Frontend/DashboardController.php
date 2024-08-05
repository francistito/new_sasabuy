<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.dashboard');
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
        $products = Product::all();
        $categories = Category::where('parent_id', 0)->get();
        return view('frontend.products.manage.product_list')
            ->with('categories', $categories)
            ->with('products', $products);
    }
}
