@extends('layouts/app')

@section('content')
    <form class="app-form" method="POST" action="{{ action('AppController@postApp') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="App name (ex. Publissa)" />
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" placeholder="App slug (ex. publissa)" />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" max="255" data-role="textarea" placeholder="App description (ex. A CMS for streamlining content creation.)"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="button primary large">Add Site</button>
        </div>
    </form>
@endsection
