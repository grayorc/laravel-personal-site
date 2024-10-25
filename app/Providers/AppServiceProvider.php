<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Log;
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
        try {
            if (Schema::hasTable('site_settings')) {
                $settings = SiteSetting::first();
    
                view()->share('settings', $settings);
            }
        } catch (\Exception $e) {
            Log::error('Error occurred: ' . $e->getMessage(), ['exception' => $e]);
        }
        Paginator::useBootstrap();
    }
}
