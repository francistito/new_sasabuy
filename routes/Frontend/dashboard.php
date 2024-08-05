<?php




Route::group([
    'namespace' => '',
], function() {
    Route::group([ 'prefix' => 'dashboard',  'as' => 'dashboard.'], function() {
        # products
        Route::get('/profile', [\App\Http\Controllers\Frontend\DashboardController::class, 'profile'])->name('profile');
        Route::get('/product', [\App\Http\Controllers\Frontend\DashboardController::class, 'product'])->name('product');


    });

});

