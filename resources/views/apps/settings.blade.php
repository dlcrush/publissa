@extends('layouts/app')

@section('content')
    @include('components.breadcrumbs', ['links' => ['Home' => '/', 'Apps' => '/apps', $app->name => '/apps/' . $app->id, 'Settings' => action('AppController@getAppSettings', ['id' => $app->id])]])

    <h1>{{ $app->name }} Settings</h1>
    <form class="app-form" method="POST" action="{{ action('AppController@updateAppSettings', ['id' => $app->id]) }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $app->name }}" placeholder="App name (ex. Publissa)" />
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" value="{{ $app->slug }}" placeholder="App slug (ex. publissa)" />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" max="255" data-role="textarea" placeholder="App description (ex. A CMS for streamlining content creation.)">{{ $app->description }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="button primary large">Update Settings</button>
        </div>
    </form>
@endsection
