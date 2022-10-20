<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ConcreteClass\ProductRepository;
use App\Repositories\CountryRepositoryInterface;
use App\Repositories\ConcreteClass\CountryRepository;
use App\Repositories\ProductCategoryInterface;
use App\Repositories\ConcreteClass\ProductCategoryRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CountryRepositoryInterface::class,CountryRepository::class);
        $this->app->bind(ProductCategoryInterface::class, ProductCategoryRepository::class);


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
