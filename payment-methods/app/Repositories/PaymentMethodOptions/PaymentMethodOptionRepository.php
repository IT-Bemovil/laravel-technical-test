<?php

namespace App\Repositories\PaymentMethodOptions;

use App\Models\PaymentMethodOption;
use App\Repositories\Contracts\PaymentMethodOption\PaymentMethodOptionRepositoryInterface;

class PaymentMethodOptionRepository implements PaymentMethodOptionRepositoryInterface
{
    public function getByPaymentMethodID(int $id)
    {
        return PaymentMethodOption::where('payment_method_id', $id)->get();
    }

    public function getByPaymentMethodIDCount(int $id)
    {
        return PaymentMethodOption::where('payment_method_id', $id)->count();
    }
}
