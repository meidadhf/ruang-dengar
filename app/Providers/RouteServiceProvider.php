<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = 'siswa/dashboard'; // pastikan ini benar

    public function boot()
    {
        $this->configureRateLimiting();
    
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
    
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
        });
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));

        // Tambahkan mapping untuk API atau route lainnya jika ada
    }
}
