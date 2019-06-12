<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('partials.header')
    </head>
    <body>
        <div id="contain">
            @include('partials.menu')
            @yield('content')
            @include('partials.footer')
        </div>
    </body>
</html>
