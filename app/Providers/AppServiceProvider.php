<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $newOrdersCount;
    public $lowStockCount;
    public $test;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!Schema::hasTable('orders')) {
            return;
        }
        Paginator::useBootstrap();

        $this->newOrdersCount = Order::where('status', 'pending')->count();
        $this->lowStockCount = Product::where('stock', '<=', 5)->count();


        view()->composer('layouts.adminLayout', function ($view) {
            $view->with(['newOrdersCount' => $this->newOrdersCount, 'lowStockCount' => $this->lowStockCount, 'test' => $this->test]);
        });
    }
}
