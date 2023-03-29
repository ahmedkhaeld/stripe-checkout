<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/cart',[ProductController::class,'index']);
Route::post('/cart/checkout',[ProductController::class,'checkout'])->name('checkout');
Route::get('/cart/success', [ProductController::class, 'success'])->name('checkout.success');
Route::get('/cart/cancel', [ProductController::class, 'cancel'])->name('checkout.cancel');
Route::post('/cart/webhook', [ProductController::class, 'webhook'])->name('checkout.webhook');
