<?php


use App\Http\Controllers\Backend\Roles\RolesController;

Route::group([
    'namespace' => 'Backend\Roles',
], function() {
    Route::group([ 'prefix' => 'role',  'as' => 'admin.roles.'], function() {
        Route::get('/', [RolesController::class, 'index'])->name('index');
        Route::get('/add-role', [RolesController::class, 'create'])->name('create');
        Route::post('/add-role', [RolesController::class, 'store'])->name('store');
        Route::get('/update-role/{id}', [RolesController::class, 'edit'])->name('edit');
        Route::post('/update-role', [RolesController::class, 'update'])->name('update');
        Route::get('/delete-role/{id}', [RolesController::class, 'delete'])->name('delete');
    });



});

