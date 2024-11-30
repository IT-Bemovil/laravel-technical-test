<?php

namespace App\UseCases\Contracts\PaymentMethods;

interface GetAllPaginatedUseCaseInterface
{
    public function handle(int $page);
}
