@extends('layouts/app')

@section('content')
    @include('components.breadcrumbs', ['links' =>
        [
            'Home' => '/',
            'Apps' => action('AppController@getApps'),
            $app->name => action('AppController@getApp', ['id' => $app->id]),
            'Categories' => action('AppController@getAppCategories', ['id' => $app->id])
        ]
    ])

    <form class="app-form" method="POST" action="{{ action('AppController@postAppCategory', ['id' => $app->id]) }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Category name (ex. Politics)" />
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" placeholder="Category slug (ex. politics)" />
        </div>
        <div class="form-group">
            <button type="submit" class="button primary large">Add Category</button>
        </div>
    </form>
@endsection
