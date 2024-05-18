<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;


class ProductsController extends Controller
{

    # delete product
    public function delete($id)
    {
        #
    }

    # delete product
    public function details($slug)
    {

        $product = Product::where('slug', $slug)->first();

        return view('frontend.products.product_details')
            ->with('product', $product);
        #
    }
}
