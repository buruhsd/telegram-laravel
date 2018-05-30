<?php

namespace Aljawad\Telegramlogs;

use Illuminate\Support\ServiceProvider;

class TelegramLogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // include __DIR__.'/routes/web.php';
        // $this->app->make('Aljawad\Telegramlogs\TelegramLogController');
        $this->app->bind('telegram', function(){
            return new Telegram;
        });
    }
}
