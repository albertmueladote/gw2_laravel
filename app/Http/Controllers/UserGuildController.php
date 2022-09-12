<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GW2Controller;

class UserGuildController extends GW2Controller{

    public function UserGuildByUserGuild($user, $guild)
    {
        $user_guild = $this->_get('user_guild', array('user' => $user, 'guild' => $guild));
        if(sizeof($user_guild) > 0)
        {
            $user_guild->leader = false;
            return $user_guild;
        }
        else
        {
            $user_guild = $this->_get('user_guild_leader', array('user' => $user, 'guild' => $guild));

            if(sizeof($user_guild) > 0)
            {
                $user_guild->leader = true;
                return $user_guild;
            }
        }
        return false;
    }

    public function Insert($data)
    {
        if (array_key_exists("leader",$data))
        {
            if($data['leader'] === true){
                unset($data['leader']);
                $this->_insert('user_guild_leader', $data);
            }
            elseif($data['leader'] === false)
            {   
                unset($data['leader']);
                $this->_insert('user_guild', $data);
            }
            return true;
        }
        
        $this->last_error = 'ERR_INSERT_USER_GUILD_LEADER_NOT_DATA';
        return false;
    }

    public function Remove($data)
    {
        $this->_remove('user_guild', $data);
    }
}
