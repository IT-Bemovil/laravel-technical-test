<?php

namespace App\Repositories\Contracts\PaymentMethod;

interface PaymentMethodRepositoryInterface
{
    public function getAll();
    public function getByID(int $id);
}
