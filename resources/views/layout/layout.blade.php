<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @yield('header')
    </head>
    <body>
        <div id="contain">
            @yield('content')
        </div>
        @yield('footer')
    </body>
</html>
