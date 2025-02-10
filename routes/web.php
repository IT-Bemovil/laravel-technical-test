<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PaymentMethodController;
use App\Http\Controllers\Api\PaymentMethodOptionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payment-method', [PaymentMethodController::class, 'index']);

Route::get('/payment-method-option', [PaymentMethodOptionController::class, 'index']);

Route::get('/payment-methods/{id}', [PaymentMethodController::class, 'show']);
