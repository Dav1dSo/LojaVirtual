<?php

namespace App\Providers;
 
use App\Interfaces\ProductsRepositoryInterface;
use App\Repository\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductsRepositoryInterface::class, ProductRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //  
    }
}
