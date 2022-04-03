<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('TampilanRp', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        Carbon::setlocale('id');
        date_default_timezone_set('Asia/Jakarta');
    }
}
