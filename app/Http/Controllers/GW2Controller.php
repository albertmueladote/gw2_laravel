<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserGuildController;
use App\Http\Controllers\SessionController;

class GW2Controller extends Controller
{
    public $top_menu;
    public $current_user;

    public $last_error;

    function __construct($id = null) {
        $this->topMenu();
        $this->CurrentUser();
    }

    public function topMenu()
    {
        if(isset($_COOKIE[$this->GetCookie()])){
            $user = $this->_get('session', array('token' => $_COOKIE[$this->GetCookie()]), array('table' => 'user', 'from' => 'user', 'to' => 'id'));
            $guilds = array();
            $user_guilds = $this->_get('user_guild', array('user' => $user->user), array('table' => 'guild', 'from' => 'guild','to' =>'id'));
            $user_guilds_leader = DB::table('user_guild_leader')->where('user', 1)->join('guild', 'user_guild_leader.guild', '=', 'guild.id')->get();
            $guilds['member'] = $user_guilds;
            $guilds['leader'] = $user_guilds_leader;
            $this->top_menu = $guilds;
            return true;
        }
        return false;

    }

    public function CurrentUser()
    {
        if(isset($_COOKIE[$this->GetCookie()])){
            $session = $this->_get('session', array('token' => $_COOKIE[$this->GetCookie()]));
            if($session){
                $this->current_user = $this->_get('user', array('id' => $session->user));
            }
            return true;
        }
        return false;
    }

    public function _get($table, $data = array(), $joins = array())
    {
        $get = DB::table($table);
        foreach($data AS $key => $value){
            if(str_contains($key, '.')){
                $get->where($key, $value);
            }elseif(strcmp($key, '_exclude') === 0){
                $get->where('id', '<>', $value);
            }else{
                $get->where($table . '.' . $key, $value);
            }
        }
        if(isset($joins[0])){
            if(is_array($joins[0])){
                foreach($joins AS $join){
                    if(isset($join['table']) && isset($join['from']) && isset($join['to'])){
                        $get->join($join['table'], $table . '.' . $join['from'], '=', $join['table'] . '.' . $join['to']);
                    }
                }
            }
        }else if(isset($joins['table']) && isset($joins['from']) && isset($joins['to'])){
            $get->join($joins['table'], $table . '.' . $joins['from'], '=', $joins['table'] . '.' . $joins['to']);
        }
        $result = $get->get();

        if(sizeof($result) == 1){
            $result = $result[0];
        }elseif(sizeof($result) == 0){
            $result = false;
        }
        return $result;
    }

    public function _insert($table, $data)
    {
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        DB::table($table)->insert($data);
        return true;
    }

    public function _update($table, $data)
    {
        if (array_key_exists("id",$data))
        {
            $data['updated_at'] = date('Y-m-d H:i:s');
            DB::table($table)->where('id', $data['id'])->update($data);
            return true;
        }
        else
        {
            return false;
        }
    }

    public function _remove($table, $data)
    {
        DB::table($table)->where($data)->delete();
    }

    public function cleanString($string){
        $string = strtolower($string);
        $unwanted_array = array('Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', ' ' => '-');
        $string = strtr($string, $unwanted_array);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }

    public function GetCookie()
    {
        return 'gw2';
    }
}
