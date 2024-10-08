<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $products = Product::where('is_published',1)->orderBy('created_at','desc')->take(6)->get();
        $categories = Category::where('parent_id', 0)->get();
        return view('home')
            ->with('categories', $categories)
            ->with('products', $products);
    }

    public function welcome()
    {
        $products = Product::where('is_published',1)->orderBy('created_at','desc')->take(6)->get();
        $categories = Category::where('parent_id', 0)->get();
        return view('welcome')
            ->with('categories', $categories)
            ->with('products', $products);
    }
}
