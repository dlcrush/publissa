<ul class="breadcrumbs">
    @foreach($links as $name => $url)
        <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $name }}</a></li>
    @endforeach
</ul>
