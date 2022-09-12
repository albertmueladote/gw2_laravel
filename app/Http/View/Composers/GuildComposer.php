<?php

namespace App\Http\View\Composers;
 
use Illuminate\View\View;

class GuildComposer
{
    /**
     * The guild repository implementation.
     *
     * @var \App\Repositories\GuildRepository
     */
    protected $guilds;
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\GuildRepository  $guilds
     * @return void
     */
    public function __construct()
    {
        $this->guilds = [1 => 'Maestros de Hoeth', 2 => 'Alumnos de Hoeth'];
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('count', count($this->guilds));
    }
}