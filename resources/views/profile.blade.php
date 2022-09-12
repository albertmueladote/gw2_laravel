@extends('layouts.gw2')

@section('title', 'Perfil')

@section('css')
@parent
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@endsection

@section('topnav')
@parent
@endsection

@section('content')
    <div class="row">
        <form class="profile" method="POST" action="">
            <h1>Perfil</h1>
            <h1>{{$user->name}}</h1>
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" placeholder="email" name="email" value="{{$user->email}}"/>
            </div>
            <div>
                <label for="api">Clave API:</label>
                <input type="text" placeholder="api" name="api" value="{{$user->api}}"/>
            </div>
            <div>
                <input type="submit" value="Modificar"/>
            </div>
        </form>
    </div>
@endsection