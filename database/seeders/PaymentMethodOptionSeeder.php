<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('PaymentMethod')->insert([
            'payment_method_id' => Str::random(10),
            'description' => Str::random(10)
        ]);
    }
}
