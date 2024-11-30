<?php

use App\Http\Controllers\PaymentMethod\ShowAllPaginatedController;
use App\Http\Controllers\PaymentMethod\ShowController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('v1/payment-method/{id}', ShowController::class);
Route::get('v1/payment-methods', ShowAllPaginatedController::class);


