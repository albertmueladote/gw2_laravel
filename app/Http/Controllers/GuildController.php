<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuildController extends Controller
{
    public function Guild($id)
    {   
        return view('guild', ['id' => $id]);
    }
}
