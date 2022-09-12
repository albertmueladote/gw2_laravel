<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewGuildsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'guilds', 'App\Http\View\Composers\GuildComposer'
        );
    }
}
