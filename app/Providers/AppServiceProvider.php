<?php

namespace App\Providers;

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
        // Herokuではvarchar型の文字数はデフォルトの255では大きすぎるため191に設定
        Schema::defaultStringLength(191);

        // https化
        if (\App::environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
