<?php

namespace App\Http\Controllers;
use App\Http\Controllers\GW2Controller;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends GW2Controller
{
    public function view()
    {
        $active = 'profile';
        $top_menu = $this->top_menu;
        $current_user = $this->current_user;

        $user = $this->_get('user', array('id' => 1));

        return view('profile', compact('active', 'user', 'top_menu', 'current_user'));
    }

    public function UserById($id, $exclude_id = null)
    {
        return $this->_get('user', array('id' => $id, '_exclude' => $exclude_id));
    }

    public function UserByEmail($email, $exclude_id = null)
    {
        return $this->_get('user', array('email' => $email, '_exclude' => $exclude_id));
    }

    public function UserByApi($api, $exclude_id = null)
    {
        return $this->_get('user', array('api' => $api, '_exclude' => $exclude_id));
    }

    public function getByNamePassword($name, $password, $exclude_id = null)
    {
        return $this->_get('user', array('name' => $name, 'password' => $password, '_exclude' => $exclude_id));
    }
    
    public function Insert($data)
    {
        if(sizeof($this->UserByEmail($data['email'], 1)) == 0){
            if(sizeof($this->UserByApi($data['api'], 1)) == 0){
                if(array_key_exists('password', $data)){
                    $data['password'] = Hash::make($data['password']);
                }  
                $this->_insert('user', $data);
                return true;
            }
            else
            {
                $this->last_error = 'INSERT_USER_API_EXISTS';
            }
        }
        else
        {
            $this->last_error = 'INSERT_USER_EMAIL_EXISTS';
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
                $this->_update('user', $data);
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

    public function Remove($data)
    {
        $this->_remove('user', $data);
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

    public function Login(Request $request)
    {
        $params = $request->all();
        $user = $this->getByNamePassword($params['name'], $params['password']);
        if($user){
            $session = new SessionController();
            $session->Insert($user);
        }
        return redirect('/');
    }

    public function Logout(Request $request)
    {
        $session = new SessionController();
        $session->Remove();
        return redirect('/');
    }
}
