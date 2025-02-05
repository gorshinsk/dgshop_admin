<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';

    /**
     * Определяем маршруты для приложения.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            // Регистрация API маршрутов с префиксом "api"
            Route::prefix('api')
                 ->middleware('api')
                 ->group(base_path('routes/api.php'));

            // Регистрация веб-маршрутов
            Route::middleware('web')
                 ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Опционально: настройка ограничения скорости запросов (rate limiting)
     */
    protected function configureRateLimiting(): void
    {
        // Если необходимо, можно настроить лимиты запросов здесь.
    }
}
