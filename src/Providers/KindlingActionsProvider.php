<?php

namespace Kindling\Actions\Providers;

use Illuminate\Support\ServiceProvider;
use Kindling\Actions\Console\MakeActionCommand;

class KindlingActionsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->registerDevDependencies();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommonResources();

        // if ($this->app->runningInConsole()) {
            
        // }
    }

    private function registerCommonResources()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeActionCommand::class,                
            ]);
        }
    }

    private function registerDevDependencies()
    {
        if (env('APP_DEBUG')) {
            // foreach (config('kindling.dev.providers') as $provider) {
            //     $this->app->register(
            //         $provider
            //     );
            // }
            
            // $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            // foreach (config('kindling.dev.aliases') as $key => $alias) {
            //     $loader->alias($key, $alias);
            // }
        }
    }
}