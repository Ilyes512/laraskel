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
            // Github Source: https://github.com/barryvdh/laravel-ide-helper
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
    }
}
