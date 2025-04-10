<?php

namespace App\Providers;

use App\Models\Faq;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        if (Schema::hasTable('general_settings')) {
            $general = gs();
            $viewShare['general'] = $general;
            if (Schema::hasTable('faqs')) {
                $viewShare['faqs'] = Faq::all();
            }
            view()->share($viewShare);
        }
    }
}
