<?php


use App\Http\Controllers\Backend\Products\BrandsController;
use App\Http\Controllers\Backend\Products\CategoriesController;
use App\Http\Controllers\Backend\Products\ProductsController;
use App\Http\Controllers\Backend\Products\TaxesController;
use App\Http\Controllers\Backend\Products\UnitsController;
use App\Http\Controllers\Backend\Products\VariationsController;
use App\Http\Controllers\Backend\Products\VariationValuesController;

Route::group([
    'namespace' => 'Products',
], function() {
    Route::group([ 'prefix' => 'product',  'as' => 'product.'], function() {
        Route::get('/get_create_page_by_ajax', [\App\Http\Controllers\Backend\Products\ProductsController::class,'getCreateModalByAjax'])->name('get_create_page_by_ajax');


        # products
        Route::get('/index', [ProductsController::class, 'index'])->name('index');
        Route::get('/add-product', [ProductsController::class, 'create'])->name('create');
        Route::post('/product', [ProductsController::class, 'store'])->name('store');
        Route::get('/update-product/{id}', [ProductsController::class, 'edit'])->name('edit');
        Route::get('/show/{slug}', [ProductsController::class, 'show'])->name('show');
        Route::post('/update-product', [ProductsController::class, 'update'])->name('update');
        Route::post('/update-featured-product', [ProductsController::class, 'updateFeatured'])->name('updateFeatureStatus');
        Route::post('/update-published-product', [ProductsController::class, 'updatePublishedStatus'])->name('updatePublishedStatus');
        Route::get('/delete-product/{id}', [ProductsController::class, 'delete'])->name('delete');

        # categories
        Route::get('/category', [CategoriesController::class, 'index'])->name('categories.index');
        Route::get('/add-category', [CategoriesController::class, 'create'])->name('categories.create');
        Route::post('/category', [CategoriesController::class, 'store'])->name('categories.store');
        Route::get('/update-category/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
        Route::post('/update-category', [CategoriesController::class, 'update'])->name('categories.update');
        Route::post('/update-feature-category', [CategoriesController::class, 'updateFeatured'])->name('categories.updateFeatureStatus');
        Route::post('/update-top-category', [CategoriesController::class, 'updateTop'])->name('categories.updateTopStatus');
        Route::get('/products/delete-category/{id}', [CategoriesController::class, 'delete'])->name('categories.delete');

        # variations
        Route::get('/variations', [VariationsController::class, 'index'])->name('variations.index');
        Route::post('/variation', [VariationsController::class, 'store'])->name('variations.store');
        Route::get('/variations/edit/{id}', [VariationsController::class, 'edit'])->name('variations.edit');
        Route::post('/variations/update', [VariationsController::class, 'update'])->name('variations.update');
        Route::post('/variations/update-status', [VariationsController::class, 'updateStatus'])->name('variations.updateStatus');
        Route::get('/variations/delete/{id}', [VariationsController::class, 'delete'])->name('variations.delete');

        # variation values
        Route::get('/variations/{id}', [VariationValuesController::class, 'index'])->name('variationValues.index');
        Route::post('/variation-values', [VariationValuesController::class, 'store'])->name('variationValues.store');
        Route::get('/variations-values/edit/{id}', [VariationValuesController::class, 'edit'])->name('variationValues.edit');
        Route::post('/variations-values/update', [VariationValuesController::class, 'update'])->name('variationValues.update');
        Route::post('/variations-values/update-status', [VariationValuesController::class, 'updateStatus'])->name('variationValues.updateStatus');
        Route::get('/variations-values/delete/{id}', [VariationValuesController::class, 'delete'])->name('variationValues.delete');

        # brands
        Route::get('/brands', [BrandsController::class, 'index'])->name('brands.index');
        Route::post('/brand', [BrandsController::class, 'store'])->name('brands.store');
        Route::get('/brands/edit/{id}', [BrandsController::class, 'edit'])->name('brands.edit');
        Route::post('/brands/update-brand', [BrandsController::class, 'update'])->name('brands.update');
        Route::post('/brands/update-status', [BrandsController::class, 'updateStatus'])->name('brands.updateStatus');
        Route::get('/brands/delete/{id}', [BrandsController::class, 'delete'])->name('brands.delete');

        # units
        Route::get('/units', [UnitsController::class, 'index'])->name('units.index');
        Route::post('/unit', [UnitsController::class, 'store'])->name('units.store');
        Route::get('/units/edit/{id}', [UnitsController::class, 'edit'])->name('units.edit');
        Route::post('/units/update-unit', [UnitsController::class, 'update'])->name('units.update');
        Route::post('/units/update-status', [UnitsController::class, 'updateStatus'])->name('units.updateStatus');
        Route::get('/units/delete/{id}', [UnitsController::class, 'delete'])->name('units.delete');

        # taxes
        Route::get('/taxes', [TaxesController::class, 'index'])->name('taxes.index');
        Route::post('/tax', [TaxesController::class, 'store'])->name('taxes.store');
        Route::get('/taxes/edit/{id}', [TaxesController::class, 'edit'])->name('taxes.edit');
        Route::post('/taxes/update', [TaxesController::class, 'update'])->name('taxes.update');
        Route::post('/taxes/update-status', [TaxesController::class, 'updateStatus'])->name('taxes.updateStatus');
        Route::get('/taxes/delete/{id}', [TaxesController::class, 'delete'])->name('taxes.delete');
    });

});

