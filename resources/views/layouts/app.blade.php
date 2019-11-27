<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container app">
        <div class="app-header">
            <div class="app-menu" data-role="appbar" data-expand-point="md">
                <a href="#" class="brand no-hover">Publissa</a>

                <ul class="app-bar-menu pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="/sites">Sites</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Products</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="#">Windows 10</a></li>
                            <li><a href="#">Office 365</a></li>
                            <li class="divider bg-lightGray"></li>
                            <li><a href="#">Skype</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </div>

        @yield('content')

    </div>

    <script src=" {{ mix('/js/app.js') }}"></script>
  </body>
</html>
