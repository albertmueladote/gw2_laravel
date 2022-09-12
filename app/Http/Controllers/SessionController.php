<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GW2Controller;

use Illuminate\Http\Request;

class SessionController extends GW2Controller
{

    public function SessionByToken($token)
    {
        return $this->_get('session', array('token' => $token));
    }

    public function Insert($user)
    {
        if(!isset($_COOKIE[$this->GetCookie()])){
            $token = $this->CreateToken();
            while($this->SessionByToken($token)){
                $token = $this->CreateToken();
            }
            $expire_time_token = $this->ExpireTimeCookie();
            setcookie($this->GetCookie(), $token, $expire_time_token, "/");
            $this->_insert('session', array('token' => $token, 'user' => $user->id, 'expire_at' => date('Y-m-d H:i:s', $expire_time_token)));
            return true;
        }
        return false;
    }

    public function Update($data)
    {
        if(sizeof($this->UserByEmail($data['email'], 1)) == 0){
            if(sizeof($this->UserByApi($data['api'], 1)) == 0){
                if(array_key_exists('password', $data)){
                    $data['password'] = Hash::make($data['password']);
                }
                $this->_update('session', $data);
                return true;
            }
            else
            {
                $this->last_error = 'UPDATE_USER_API_EXISTS';
            }
        }
        else
        {
            $this->last_error = 'UPDATE_USER_EMAIL_EXISTS';
        }
        return false;
    }

    public function Remove()
    {
        if(isset($_COOKIE[$this->GetCookie()])){
            $this->_remove('session', array('token' => $_COOKIE[$this->GetCookie()]));
            unset($_COOKIE[$this->GetCookie()]);
            setcookie($this->GetCookie(), null, time() - $this->ExpireTimeCookie(), '/');
            return true;
        }
        return false;
    }

    public function UpdateProfile(Request $request)
    {
        $this->Update(['id' => 1, 'email' => $request->email, 'api' => $request->api]);
        $this->view();
        $active = 'profile';
        $this->topMenu();
        $top_menu = $this->top_menu;
        
        $user = $this->_get('user', array('id' => 1));

        return view('profile', compact('active', 'user', 'top_menu'));
    }

    public function CreateToken($size = 100)
    {
        $seed = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');  
        $rand = '';
        for($x = 0; $x < $size; $x++){
            shuffle($seed);
            $rand .= $seed[rand(0, sizeof($seed) - 1)];
        }
        return $rand;
    }

    public function ExpireTimeCookie()
    {
        return time() + 31536000;   
    }
}
