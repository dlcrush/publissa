@extends('layouts/app')

@section('content')
    <div class="row">
        <div class="cell">
            <h1>Apps</h1>
        </div>
        <div class="cell" style="text-align: right;">
            <a href="{{ action('AppController@createApp') }}" class="button primary large" style="margin-top: 15px;"><span class="mif-plus"></span> New App</a>
        </div>
    </div>

    <div class="apps-list">
        @foreach($apps as $app)
            @include('apps.card', ['app' => $app])
        @endforeach
    </div>
@endsection
