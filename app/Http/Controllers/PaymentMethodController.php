<?php

namespace App\Http\Controllers;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;


class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $porPagina = 2;
            $pagina = $request->input('page', 1);
            $metodos = PaymentMethod::withCount('PaymentMethodOption')->paginate($porPagina, ['*'], 'page', $pagina);
            $metodos_final = new ResourceCollection($metodos->map(function($metodo) {
                return [
                    'id' => $metodo->id,
                    'name' => $metodo->name,
                    'created_at' => $metodo->created_at,
                    'options_count' => $metodo->options_count
                ];
            }));
            return response()->json([
                'status' => 'success',
                'data' => $metodos_final
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
            $paymentMethod = PaymentMethod::with('PaymentMethodOption:id,payment_method_id,key,value')
            ->findOrFail($id);

            $metodos_final = new JsonResource([
                'id' => $paymentMethod->id,
                'name' => $paymentMethod->name,
                'created_at' => $paymentMethod->created_at,
                'opciones' => $paymentMethod->options->map(function($option) {
                    return [
                        'id' => $option->id,
                        'key' => $option->key,
                        'value' => $option->value
                    ];
                })
            ]);
            return response()->json([
                'status' => 'success',
                'data' => $metodos_final
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
