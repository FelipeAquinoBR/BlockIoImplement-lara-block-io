<?php

namespace Aquinow\BlockIo;

use Illuminate\Support\ServiceProvider;

class LaraBlockIoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/main.php' => config_path('aquinowblockio.php'),
        ]);

        $file = __DIR__.'/../vendor/autoload.php';

        if (file_exists($file)) {
            require $file;
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('blockio', function () {
            return new LaraBlockIo();
        });
    }
}
