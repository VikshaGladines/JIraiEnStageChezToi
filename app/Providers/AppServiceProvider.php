<?php
 
namespace App\Providers;
 
use App\Models\Offer;
use App\Observers\OfferObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Offer::observe(OfferObserver::class);
    }
 
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}