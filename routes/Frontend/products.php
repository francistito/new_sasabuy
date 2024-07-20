<?php


use App\Http\Controllers\Frontend\ProductsController;

Route::group([
    'namespace' => '',
], function() {
    Route::group([ 'prefix' => 'product',  'as' => 'product.'], function() {
        # products
        Route::get('/details/{slug}', [ProductsController::class, 'details'])->name('details');
        Route::get('/category/{category_id}', [ProductsController::class, 'getByCategory'])->name('category');
        Route::get('/search', [ProductsController::class, 'search'])->name('search');
        Route::get('/products', [ProductsController::class, 'products'])->name('products');



    });

});

