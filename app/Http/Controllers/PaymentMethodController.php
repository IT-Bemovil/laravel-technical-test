<?php

namespace App\Http\Controllers;
use App\Models\PaymentMethod;
use App\Models\PaymentMethodOption;
use Illuminate\Http\Request;


class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $metodos = PaymentMethod::get(['id','name','created_at']);
            $metodos_opciones = PaymentMethodOption::with(['PaymentMethod'])
                ->get(['payment_method_id','key','value']);
                
            $metodos['cantidad_opciones'] = count($metodos_opciones);
            return response()->json([
                'status' => 'success',
                'data' => $metodos
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error al obtener los tipos de metodos de pago',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $metodos = PaymentMethod::get(['id','name','created_at'])->where('id', $id);
            $metodos_opciones = PaymentMethodOption::with(['PaymentMethod'])
            ->where('payment_method_id', $id)
                ->get(['payment_method_id','key','value']);
                
            $metodos['metodo_opciones'] = $metodos_opciones;
            return response()->json([
                'status' => 'success',
                'data' => $metodos
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error al obtener los tipos de metodos de pago por id',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
