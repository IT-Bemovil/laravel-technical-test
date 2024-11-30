<?php

namespace App\UseCases\Contracts\PaymentMethods;

interface GetByIDUseCaseInterface
{
    public function handle(int $id);
}
