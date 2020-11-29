<?php

namespace Chicongst\Porto;

use Chicongst\Porto\Commands\MakePortoAction;
use Chicongst\Porto\Commands\MakePortoTask;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config-porto.php' => config_path('config-porto.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            MakePortoAction::class,
            MakePortoTask::class,
        ]);
    }
}
