@extends('layouts.gw2')

@section('title', 'Clan')

@section('topnav')
    @parent
@endsection

@section('content')
    <h1>{{$guild->name}}</h1>
    @foreach ($blocks AS $row)
        <div class="row">
            @foreach ($row AS $block)
                @if ($block->type == 'text')
                    <div class="col-{{$block->class}}">
                        {!! $block->value !!}
                    </div>
                @elseif($block->type == 'image')
                    <div class="col-{{$block->class}} {{$block->extra}}">
                        <img src="{{asset('img/') . '/' . $block->value}}"/>
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach
@endsection