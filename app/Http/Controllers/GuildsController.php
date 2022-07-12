<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuildsController extends Controller
{
    public function Guilds()
    {   
        return view('guilds');
    }
}
