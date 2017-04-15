<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
    <a href="{{ url('cerrar_sesion') }}">Cerrar sesion</a>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
