<?php

namespace Database\Factories;

use App\Models\PaymentMethodOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentMethodOptionFactory extends Factory
{
    protected $model = PaymentMethodOption::class;

    public function definition()
    {
        return [
            'payment_method_id' => \App\Models\PaymentMethod::factory(),
            'key' => $this->faker->word,
            'value' => $this->faker->word,
        ];
    }
}
