<?php

namespace App\Providers;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app('translator')->setLocale(config('app.locale'));
    }
    public function boot()
    {
        JsonResource::withoutWrapping();
    }
}
