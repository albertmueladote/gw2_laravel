<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GW2Controller;
use App\Http\Controllers\GuildBlockController;

class GuildController extends GW2Controller
{
    public function ViewGuild($url)
    {   
        $active = $url;
        $top_menu = $this->top_menu;
        $current_user = $this->current_user;

        $guild = $this->_get('guild', array('url' => $url));

        $guild_block = new GuildBlockController();
        $blocks = $guild_block->GuildBlock($guild->id);

        if($guild){
            return view('guild', compact('guild', 'active', 'top_menu', 'current_user', 'blocks'));
        }else{
            return redirect('/clanes');
        }
    }

    public function ViewGuilds()
    {   
        $active = 'guilds';
        $top_menu = $this->top_menu;
        $current_user = $this->current_user;
        $guilds = $this->_get('guild');

        return view('guilds', compact('guilds', 'active', 'top_menu', 'current_user'));
    }

    public function GuildByName($name)
    {
        return $this->_get('guild', array('name' => $name));
    }

    public function GuildByApi($api)
    {
        return $this->_get('guild', array('api' => $api));
    }

    public function insert($data)
    {
        if(sizeof($this->GuildByName($data['name'])) == 0){
            if(sizeof($this->GuildByApi($data['api'])) == 0){
                $data['url'] = $this->cleanString($data['name']);
                $this->_insert('guild', $data);
                return true;
            }
        }
        return false;
    }

    public function update($data)
    {
        if(sizeof($this->GuildByName($data['name'])) == 0){
            if(sizeof($this->GuildByApi($data['api'])) == 0){
                $data['url'] = $this->cleanString($data['name']);
                $this->_update('guild', $data);
                return true;
            }
        }
        return false;
    }

    public function remove($data)
    {
        $this->_remove('guild', $data);
    }
}
