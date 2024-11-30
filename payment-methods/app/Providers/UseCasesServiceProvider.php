<?php

namespace App\Providers;

use App\Repositories\Contracts\PaymentMethod\PaymentMethodRepositoryInterface;
use App\Repositories\Contracts\PaymentMethodOption\PaymentMethodOptionRepositoryInterface;
use App\Repositories\PaymentMethodOptions\PaymentMethodOptionRepository;
use App\Repositories\PaymentMethods\PaymentMethodRepository;
use App\UseCases\Contracts\PaymentMethods\GetAllPaginatedUseCaseInterface;
use App\UseCases\Contracts\PaymentMethods\GetByIDUseCaseInterface;
use App\UseCases\Contracts\Statistics\GetStatisticsDataUseCaseInterface;
use App\UseCases\PaymentMethods\GetAllPaginatedUseCase;
use App\UseCases\PaymentMethods\GetByIDUseCase;
use App\UseCases\Statistics\GetStatisticsDataUseCase;
use Illuminate\Support\ServiceProvider;

class UseCasesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    protected array $classes = [
            GetByIDUseCaseInterface::class => GetByIDUseCase::class,
            GetAllPaginatedUseCaseInterface::class => GetAllPaginatedUseCase::class
        ];

    public function register(): void
    {
        foreach ($this->classes as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        foreach ($this->classes as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
