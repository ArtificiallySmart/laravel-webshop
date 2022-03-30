<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class AdminContentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public $newOrdersCount;
    public $lowStock;

    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->newOrdersCount = Order::where('status', 'pending')->count();
        $this->lowStockCount = Product::where('stock', '<', 5)->count();

        view()->composer('layouts.adminLayout', function ($view) {
            $view->with(['newOrdersCount' => $this->newOrdersCount, 'lowStockCount' => $this->lowStockCount]);
        });
    }
}
