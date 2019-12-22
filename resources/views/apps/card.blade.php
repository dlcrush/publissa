<a href="{{ action('AppController@getApp', ['id' => $app->id]) }}" class="apps-card-link">
    <div class="apps-card more-info-box">
        <div class="content">
            <h2 class="text-bold mb-0">{{ $app->name }}</h2>
            <div>{{ $app->description }}</div>
        </div>
        <div class="icon">
            <span class="mif-mobile"></span>
        </div>
    </div>
</a>
