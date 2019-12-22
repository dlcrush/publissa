@extends('layouts/app')

@section('content')
    @include('components.breadcrumbs', ['links' =>
        [
            'Home' => '/',
            'Apps' => action('AppController@getApps'),
            $app->name => action('AppController@getApp', ['id' => $app->id]),
            'Posts' => action('AppController@getAppPosts', ['id' => $app->id])
        ]
    ])

    <form class="tag-form" method="POST" action="{{ action('AppController@postAppPost', ['id' => $app->id]) }}">
        @csrf
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" name="name" placeholder="Post Title" />
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" placeholder="Post slug" />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="textarea" data-role="textarea"></textarea>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" class="textarea rich-editor"></textarea>
        </div>
        <div class="form-group">
            <label for="description">Excerpt</label>
            <textarea name="excerpt" class="textarea" data-role="textarea"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="button primary large">Add Post</button>
        </div>
    </form>
@endsection
