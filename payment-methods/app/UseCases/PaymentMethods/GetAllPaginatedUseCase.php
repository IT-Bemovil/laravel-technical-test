<?php

namespace App\UseCases\PaymentMethods;

use App\Http\Resources\PaymentMethodResource;
use App\Models\PaymentMethod;
use App\Repositories\Contracts\PaymentMethodOption\PaymentMethodOptionRepositoryInterface;
use App\UseCases\Contracts\PaymentMethods\GetAllPaginatedUseCaseInterface;

class GetAllPaginatedUseCase implements GetAllPaginatedUseCaseInterface
{
    protected PaymentMethodOptionRepositoryInterface $paymentMethodOptionRepository;

    public function __construct(PaymentMethodOptionRepositoryInterface $paymentMethodOptionRepository)
    {
        $this->paymentMethodOptionRepository = $paymentMethodOptionRepository;
    }

    public function handle(int $page)
    {
        $paymentMethods = PaymentMethod::paginate(2, ['*'], 'page', $page);

        $paymentMethods->getCollection()->transform(function($item){
            unset($item->description);
            unset($item->updated_at);
            $item->options_count = $this->paymentMethodOptionRepository->getByPaymentMethodIDCount($item->id);

            return $item;
        });

        return response()->json($paymentMethods->items());
    }
}
