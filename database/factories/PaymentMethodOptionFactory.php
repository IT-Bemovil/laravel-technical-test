<?php

namespace Database\Factories;

use App\Models\PaymentMethod;
use App\Models\PaymentMethodOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentMethodOptionFactory extends Factory
{
    protected $model = PaymentMethodOption::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'payment_method_id' => PaymentMethod::all()->random()->id,
            'name' => $this->faker->word,
            'description' => $this->faker->word,
        ];
    }
}
