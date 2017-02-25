<?php

namespace Qjiatrip\Sms;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 路由
//        if (! $this->app->routesAreCached()) {
//            require __DIR__.'/../../routes.php';
//        };
//
//        // 全局配置
//        $this->publishes([
//            __DIR__.'/path/to/config/courier.php' => config_path('courier.php'),
//        ]);
//        $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->singleton('Sms', function ($app) {
//            return new SmsServiceProvider($app->make('HttpClient'));
//        });
    }
}
