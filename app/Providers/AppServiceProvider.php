<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Will contain all development environment names
     *
     * @var array
     */
    protected $devEnvironments = [];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->devEnvironments = $this->app->config->get('laraskel.devEnvironmentNames');

        // Load these packages only in a dev environment
        if ($this->app->environment($this->devEnvironments)) {

            // Register laravel-debugbar if enabled (see
            $this->registerDebugbar();

            // Github Source: https://github.com/barryvdh/laravel-ide-helper
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Registers the debugbar
     *
     * @return void
     */
    protected function registerDebugbar()
    {
        if ($this->app->config->get('laraskel.debug.debugbar')) {
            // Github Source: https://github.com/barryvdh/laravel-debugbar
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
    }
}
