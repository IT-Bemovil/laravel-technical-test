<?php

namespace App\Http\Controllers\PaymentMethod;

use App\Http\Controllers\Controller;
use App\UseCases\Contracts\PaymentMethods\GetByIDUseCaseInterface;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    protected GetByIDUseCaseInterface $getByIDUseCase;

    public function __construct(GetByIDUseCaseInterface $getByIDUseCase)
    {
        $this->getByIDUseCase = $getByIDUseCase;
    }

    public function __invoke(int $id)
    {
        return $this->getByIDUseCase->handle($id);
    }
}
