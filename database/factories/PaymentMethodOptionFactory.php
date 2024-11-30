<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PaymentMethodOption;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentMethodOption>
 */
class PaymentMethodOptionFactory extends Factory
{
    protected $model = PaymentMethodOption::class;

    public function definition()
    {
        return [
            'key' => $this->faker->word(),
            'value' => $this->faker->word(),
        ];
    }
}
