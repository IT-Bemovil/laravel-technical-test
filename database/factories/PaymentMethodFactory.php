<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PaymentMethod;
use App\Models\PaymentMethodOption;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentMethod>
 */
class PaymentMethodFactory extends Factory
{
    protected $model = PaymentMethod::class;

    public function definition()
    {
        return [
            'name' => $this->faker->creditCardType(),
            'description' => $this->faker->optional()->sentence(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (PaymentMethod $paymentMethod) {
            PaymentMethodOption::factory()
                ->count(rand(1, 5))
                ->create([
                    'payment_method_id' => $paymentMethod->id
                ]);
        });
    }
}
