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

    <div class="row">
        <div class="cell">
            <h1>{{ $app->name }} Posts</h1>
        </div>
        <div class="cell" style="text-align: right;">
            <a href="{{ action('AppController@createAppPost', ['id' => $app->id]) }}" class="button primary large" style="margin-top: 15px;"><span class="mif-plus"></span> New Post</a>
        </div>
    </div>

    <div class="posts-list">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($app->posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title}}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
