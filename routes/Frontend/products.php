<?php


use App\Http\Controllers\Frontend\ProductsController;

Route::group([
    'namespace' => '',
], function() {
    Route::group([ 'prefix' => 'product',  'as' => 'product.'], function() {
        # products
        Route::get('/details/{slug}', [ProductsController::class, 'details'])->name('details');



    });

});

