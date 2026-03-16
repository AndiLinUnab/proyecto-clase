<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\CategoryController; // IMPORTANTE
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::prefix('product')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index')->name('product.index');
    Route::get('/create', 'create')->name('product.create');
    Route::post('/store', 'store')->name('product.store');
    Route::get('/{producto}', 'show')->name('product.show');
    Route::delete('/{producto}', 'destroy')->name('product.destroy');
});

/* RUTA ADMIN */

Route::prefix('admin')->group(function(){

    Route::get('/', function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD DE CATEGORIAS
    Route::resource('categories', CategoryController::class);

});

Route::prefix('cart')->controller(CartController::class)->group(function(){

    Route::get('/', 'index')->name('cart.index');
    Route::post('/add/{product}', 'add')->name('cart.add');
    Route::delete('/remove/{cart}', 'remove')->name('cart.remove');

});

