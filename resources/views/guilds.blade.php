@extends('layouts.gw2')

@section('title', 'Clanes')

@section('topnav')
@parent
@endsection

@section('content')
<table id="guilds" class="table">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Preferencia</td>
            <td>Actividad</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($guilds as $id => $guild)
            <tr>
                <td><a href="/clan/{{$guild->url}}">{{$guild->name}}</a></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection