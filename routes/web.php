<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', HomeController::class);

Route::get('/product', [ ProductController::class, 'index' ]);
Route::get('/product/create', [ ProductController::class, 'create' ]);
Route::get('/product/{producto}', [ ProductController::class, 'show']);