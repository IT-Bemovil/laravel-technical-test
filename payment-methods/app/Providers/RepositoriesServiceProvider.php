<?php

namespace App\Providers;

use App\Repositories\Contracts\PaymentMethod\PaymentMethodRepositoryInterface;
use App\Repositories\Contracts\PaymentMethodOption\PaymentMethodOptionRepositoryInterface;
use App\Repositories\PaymentMethodOptions\PaymentMethodOptionRepository;
use App\Repositories\PaymentMethods\PaymentMethodRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    protected array $classes = [
        PaymentMethodRepositoryInterface::class => PaymentMethodRepository::class,
        PaymentMethodOptionRepositoryInterface::class => PaymentMethodOptionRepository::class,
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
        //
    }
}
