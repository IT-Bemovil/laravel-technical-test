<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentMethod = PaymentMethod::select('id', 'name', 'description')->paginate(2);

        return response()->json($paymentMethod);
    }

    public function show($id)
    {
        $paymentMethod = PaymentMethod::with('options')->find($id);
    
        if (!$paymentMethod) {
            return response()->json(['message' => 'Método de pago no encontrado'], 404);
        }
    
        return response()->json($paymentMethod);
    }
}
