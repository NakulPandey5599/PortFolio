<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PdfGenerator;

class PdfServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind PdfGenerator in the service container
        $this->app->singleton(PdfGenerator::class, function () {
            return new PdfGenerator();
        });
    }

    public function boot()
    {
        // Optional boot logic
    }
}
