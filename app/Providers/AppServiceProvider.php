<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Route;

class AppServiceProvider extends ServiceProvider
{
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
        Schema::defaultStringLength(191);
        
        Route::prefix('api')
            ->middleware('api')
            ->as('api.')
            ->namespace($this->app->getNamespace().'Http\Controllers\API')
            ->group(base_path('routes/api.php'));
    }
}
