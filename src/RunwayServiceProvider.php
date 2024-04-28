<?php

namespace Pixelatedcraft\Runway;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\AboutCommand;
use Pixelatedcraft\Runway\Console\Startcommand;
use Pixelatedcraft\Runway\Console\StopCommand;

class RunwayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../stubs/web' => base_path('.docker/web'),
            __DIR__ . '/../stubs/database' => base_path('.docker/database'),
            __DIR__ . '/../stubs/docker-compose.yml' => base_path('docker-compose.yml'),
        ]);


        if ($this->app->runningInConsole()) {
            $this->commands([
                Startcommand::class,
                StopCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
