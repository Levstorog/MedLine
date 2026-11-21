<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::redirect('/', '/login')->name('home');
 
Route::middleware('auth')->group(function () {
    Route::get('dashboard', fn (Request $request) => redirect()->route(
        $request->user()->isAdmin() ? 'admin.orders' : 'orders.index'
    ))->name('dashboard');
 
    Route::middleware('user')->group(function () {
        Route::livewire('orders', 'pages::orders.index')->name('orders.index');
        Route::livewire('orders/create', 'pages::orders.create')->name('orders.create');
    });
 
    Route::middleware('admin')->group(function () {
        Route::livewire('admin/orders', 'pages::admin.orders')->name('admin.orders');
    });
});
 
require __DIR__.'/settings.php';
