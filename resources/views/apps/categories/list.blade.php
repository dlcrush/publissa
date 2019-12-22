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

    <div class="row">
        <div class="cell">
            <h1>{{ $app->name }} Categories</h1>
        </div>
        <div class="cell" style="text-align: right;">
            <a href="{{ action('AppController@createAppCategory', ['id' => $app->id]) }}" class="button primary large" style="margin-top: 15px;"><span class="mif-plus"></span> New Category</a>
        </div>
    </div>

    <div class="category-list">
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
                @foreach($app->categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name}}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
