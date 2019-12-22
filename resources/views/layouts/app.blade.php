<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Publissa</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container app">
        <div class="app-header">
            <div class="app-menu" data-role="appbar" data-expand-point="md">
                <a href="#" class="brand no-hover">Publissa</a>

                @include('navigation')
            </div>
        </div>

        @yield('content')

    </div>

    <script src=" {{ mix('/js/app.js') }}"></script>
  </body>
</html>
