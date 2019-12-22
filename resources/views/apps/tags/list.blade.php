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

    <div class="row">
        <div class="cell">
            <h1>{{ $app->name }} Categories</h1>
        </div>
        <div class="cell" style="text-align: right;">
            <a href="{{ action('AppController@createAppTag', ['id' => $app->id]) }}" class="button primary large" style="margin-top: 15px;"><span class="mif-plus"></span> New Tag</a>
        </div>
    </div>

    <div class="tag-list">
        <table class="table table-hover table-border mt-4" data-role="table" data-rows="50">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($app->tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name}}</td>
                        <td>{{ $tag->slug }}</td>
                        <td>{{ $tag->created_at }}</td>
                        <td>{{ $tag->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
