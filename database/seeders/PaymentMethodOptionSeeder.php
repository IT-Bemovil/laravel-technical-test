<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use App\Models\PaymentMethodOption;
use Illuminate\Database\Seeder;

class PaymentMethodOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::all()->each(function ($paymentMethod) {
            PaymentMethodOption::factory(rand(1,5))->create([
                'payment_method_id' => $paymentMethod->id,
            ]);
        });
    }
}
