<?php

namespace App\Repositories\PaymentMethods;

use App\Models\PaymentMethod;
use App\Repositories\Contracts\PaymentMethod\PaymentMethodRepositoryInterface;

class PaymentMethodRepository implements PaymentMethodRepositoryInterface
{
    public function getAll()
    {
        return PaymentMethod::get();
    }

    public function getByID(int $id)
    {
        return PaymentMethod::find($id);
    }
}
