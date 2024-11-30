<?php

namespace App\UseCases\PaymentMethods;



use App\Http\Resources\PaymentMethodResource;
use App\Repositories\Contracts\PaymentMethod\PaymentMethodRepositoryInterface;
use App\Repositories\Contracts\PaymentMethodOption\PaymentMethodOptionRepositoryInterface;
use App\UseCases\Contracts\PaymentMethods\GetByIDUseCaseInterface;
use stdClass;

class GetByIDUseCase implements GetByIDUseCaseInterface
{
    protected PaymentMethodRepositoryInterface $paymentMethodRepository;
    protected PaymentMethodOptionRepositoryInterface $paymentMethodOptionRepository;

    public function __construct(PaymentMethodRepositoryInterface $paymentMethodRepository,
                                PaymentMethodOptionRepositoryInterface $paymentMethodOptionRepository)
    {
        $this->paymentMethodRepository = $paymentMethodRepository;
        $this->paymentMethodOptionRepository = $paymentMethodOptionRepository;

    }
    public function handle(int $id)
    {
        $paymentMethod = $this->paymentMethodRepository->getByID($id);
        $paymentMethodOptionsCount = $this->paymentMethodOptionRepository->getByPaymentMethodIDCount($id);

        $paymentMethodData = new stdClass();
        $paymentMethodData->id = $paymentMethod->id;
        $paymentMethodData->name = $paymentMethod->name;
        $paymentMethodData->created_at = $paymentMethod->created_at;
        $paymentMethodData->options_count = $paymentMethodOptionsCount;
        $paymentMethodData->options = $this->paymentMethodRepository->getByID($id)->paymentMethodOptions;

        return new PaymentMethodResource($paymentMethodData);
    }
}
