<?php

namespace Jazer\Forms\Http\Provider;

use Illuminate\Support\ServiceProvider;

class FormsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../../config/database.php', 'jtreviewsconfig'  
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../../config/config.php' => config_path('jtreviewsconfig.php')
        ], 'jtreviewsconfig-config');
        
        $this->loadRoutesFrom( __DIR__ . '/../../../routes/api.php');

        config(['database.connections.conn_reviews' => config('forms.database_connection')]);
    }
}
