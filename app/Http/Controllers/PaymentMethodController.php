<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index(Request $request): JsonResponse{
        $page = $request->query('page', 1);
        $paymentMethods = PaymentMethod::withCount('options')->paginate(2, ['id', 'name', 'created_at'], 'page', $page);

        return response()->json($paymentMethods);
    }

    public function show($id): JsonResponse{
        $paymentMethod = PaymentMethod::with('options')->findOrFail($id);

        return response()->json([
            'id' => $paymentMethod->id,
            'name' => $paymentMethod->name,
            'created_at' => $paymentMethod->created_at,
            'options' => $paymentMethod->options->map(function($option){
                return [
                    'id' => $option->id,
                    'key' => $option->key,
                    'value' => $option->value,
                ];
            }),
        ]);
    }
}
