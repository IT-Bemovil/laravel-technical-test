<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentMethodController;

Route::get('metodo_pagos', [PaymentMethodController::class, 'index']); 

Route::get('metodo_pagos/{id}', [PaymentMethodController::class, 'show']); 

Route::get('/test', function () {
    return response()->json(['message' => 'PROBANDO PROBANDO']);
});
