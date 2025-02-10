<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PaymentMethodOption;
use App\Models\PaymentMethod;

class PaymentMethodOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethod::all()->each(function ($paymentMethod) {
            PaymentMethodOption::factory()
                ->count(rand(1, 5))
                ->create(['payment_method_id' => $paymentMethod->id]);
        });
    }
}
