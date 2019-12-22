@extends('layouts/app')

@section('content')
    @include('components.breadcrumbs', ['links' =>
        [
            'Home' => '/',
            'Apps' => action('AppController@getApps'),
            $app->name => action('AppController@getApp', ['id' => $app->id]),
            'Tags' => action('AppController@getAppTags', ['id' => $app->id])
        ]
    ])

    <form class="tag-form" method="POST" action="{{ action('AppController@postAppTag', ['id' => $app->id]) }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Tag name (ex. Review)" />
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" placeholder="Tag slug (ex. review)" />
        </div>
        <div class="form-group">
            <button type="submit" class="button primary large">Add Tag</button>
        </div>
    </form>
@endsection
