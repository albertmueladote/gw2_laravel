<?php

namespace App\Http\Controllers;

class GuildBlockController extends GW2Controller
{
    public function GuildBlock($guild)
    {
        $result = array();
        $blocks = $this->_get('guild_block', array('guild' => $guild));

        if($blocks){
            foreach($blocks AS $block)
            {
                $result[$block->row][$block->column] = $block;                                        
            }
        }

        foreach($result AS $row)
        {
            foreach($row AS $block)
            {
                $block->class = 12 / sizeof($row);
            }
        }
        
        return $result;
    }

    public function GuildBlockByGuildRowColumn($guild, $row, $column)
    {
        $block = $this->_get('guild_block', array('guild' => $guild, 'row' => $row));
        if(sizeof($block) > 0)
        {
            return $block;
        }
        return false;
    }
    
    public function Insert($data)
    {
        if($this->GuildBlockByGuildRowColumn($data['guild'], $data['row'], $data['column']))
        {
            return $this->_update('guild_block', $data);
        }
        else
        {
            $this->_insert('guild_block', $data);
            return true;
        }     
    }
    
    public function Update($data)
    {
        if($this->GuildBlockByGuildRowColumn($data['guild'], $data['row'], $data['column']))
        {
            $this->_update('guild_block', $data);
            return true;
        }
        else
        {
            return $this->_insert('guild_block', $data);
        }
    }

    public function Remove($data)
    {
        $this->_remove('guild_block', $data);
    }
}
