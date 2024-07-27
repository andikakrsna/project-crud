<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ruangController;

Route::get('/', function () {
    return view('admin.dashboard');
    })->name('dashboard');
    
Route::resource('inventory',InventoryController::class);

Route::resource('product', ProdukController::class);
Route::resource('ruangan', ruangController::class);
