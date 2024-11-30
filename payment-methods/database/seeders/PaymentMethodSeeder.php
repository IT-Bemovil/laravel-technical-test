<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use App\Models\PaymentMethodOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethod = new PaymentMethod();
        $paymentMethod->name = 'nequi';
        $paymentMethod->description = 'Este metodo de pago permite pagar con nequi';
        $paymentMethod->save();

        $paymentMethod = new PaymentMethod();
        $paymentMethod->name = 'LULO';
        $paymentMethod->description = 'Este metodo de pago permite pagar con LULO';
        $paymentMethod->save();

        $paymentMethod = new PaymentMethod();
        $paymentMethod->name = 'NUBANK';
        $paymentMethod->description = 'Este metodo de pago permite pagar con NUBANK';
        $paymentMethod->save();
    }
}
