<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider; // CORRETO!

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Nenhuma chamada para parent::boot() ou registro manual de rotas.
    }
}
