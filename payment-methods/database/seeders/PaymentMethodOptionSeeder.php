<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use App\Models\PaymentMethodOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '123';
        $paymentMethodOption->value = '$50000';
        $paymentMethodOption->payment_method_id = 1;
        $paymentMethodOption->save();

        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '565';
        $paymentMethodOption->value = '$80000';
        $paymentMethodOption->payment_method_id = 1;
        $paymentMethodOption->save();


        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '897';
        $paymentMethodOption->value = '$70000';
        $paymentMethodOption->payment_method_id = 1;
        $paymentMethodOption->save();

        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '675';
        $paymentMethodOption->value = '$20000';
        $paymentMethodOption->payment_method_id = 1;
        $paymentMethodOption->save();


        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '674';
        $paymentMethodOption->value = '$50000';
        $paymentMethodOption->payment_method_id = 2;
        $paymentMethodOption->save();


        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '891';
        $paymentMethodOption->value = '$80000';
        $paymentMethodOption->payment_method_id = 2;
        $paymentMethodOption->save();

        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '671';
        $paymentMethodOption->value = '$10000';
        $paymentMethodOption->payment_method_id = 2;
        $paymentMethodOption->save();

        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '674';
        $paymentMethodOption->value = '$50000';
        $paymentMethodOption->payment_method_id = 3;
        $paymentMethodOption->save();


        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '892';
        $paymentMethodOption->value = '$80000';
        $paymentMethodOption->payment_method_id = 3;
        $paymentMethodOption->save();

        $paymentMethodOption = new PaymentMethodOption();
        $paymentMethodOption->key = '667';
        $paymentMethodOption->value = '$10000';
        $paymentMethodOption->payment_method_id = 3;
        $paymentMethodOption->save();
    }
}
