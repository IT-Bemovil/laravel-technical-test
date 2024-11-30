<?php

namespace App\Http\Controllers\PaymentMethod;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Repositories\Contracts\PaymentMethodOption\PaymentMethodOptionRepositoryInterface;
use App\Repositories\PaymentMethodOptions\PaymentMethodOptionRepository;
use App\UseCases\Contracts\PaymentMethods\GetAllPaginatedUseCaseInterface;
use Illuminate\Http\Request;

class ShowAllPaginatedController extends Controller
{
    protected GetAllPaginatedUseCaseInterface $getAllPaginatedUseCase;

    public function __construct(GetAllPaginatedUseCaseInterface $getAllPaginatedUseCase)
    {
        $this->getAllPaginatedUseCase = $getAllPaginatedUseCase;
    }

    public function __invoke(Request $request)
    {
        $page = $request->input('page', 1);
        return $this->getAllPaginatedUseCase->handle($page);
    }


}
