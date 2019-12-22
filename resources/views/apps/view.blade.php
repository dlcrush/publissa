@extends('layouts/app')

@section('content')
    @include('components.breadcrumbs', ['links' => ['Home' => '/', 'Apps' => '/apps', $app->name => '/apps/' . $app->id]])

    <h1>{{ $app->name }}</h1>
    <h3>Manage App</h3>
    <div class="manage-app-container" style="margin-bottom: 15px; height: auto;">
        <div class="tiles-grid tiles-group size-8">
            <a href="{{ action('AppController@getAppSettings', ['id' => $app->id]) }}" data-role="tile" class="bg-black">
                <span class="mif-cog icon"></span>
                <span class="branding-bar">Settings</span>
            </a>
            <a href="{{ action('AppController@getAppPosts', ['id' => $app->id]) }}" data-role="tile" class="bg-black">
                <span class="mif-file-text icon"></span>
                <span class="branding-bar">Posts</span>
                {{-- <span class="badge-bottom">30</span> --}}
            </a>
            <a href="{{ action('AppController@getAppFeeds', ['id' => $app->id]) }}" data-role="tile" class="bg-black">
                <span class="mif-feed icon"></span>
                <span class="branding-bar">Feeds</span>
                {{-- <span class="badge-bottom">2</span> --}}
            </a>
            <a href="{{ action('AppController@getAppNavigation', ['id' => $app->id]) }}" data-role="tile" class="bg-black">
                <span class="mif-navigation icon"></span>
                <span class="branding-bar">Navigation</span>
                {{-- <span class="badge-bottom">1</span> --}}
            </a>
            <a href="{{ action('AppController@getAppCategories', ['id' => $app->id]) }}" data-role="tile" class="bg-black">
                <span class="mif-folder icon"></span>
                <span class="branding-bar">Categories</span>
                {{-- <span class="badge-bottom">5</span> --}}
            </a>
            <a href="{{ action('AppController@getAppTags', ['id' => $app->id]) }}" data-role="tile" class="bg-black">
                <span class="mif-tags icon"></span>
                <span class="branding-bar">Tags</span>
                {{-- <span class="badge-bottom">20</span> --}}
            </a>
        </div>
    </div>
    <h3>Latest Posts</h3>
    <div class="app-posts-list">

    </div>
@endsection
