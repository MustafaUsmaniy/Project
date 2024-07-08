<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('create-product', [PageController::class, 'create_product'])->name('create_product');
Route::get('create-folder', [PageController::class, 'create_folder'])->name('create_folder');