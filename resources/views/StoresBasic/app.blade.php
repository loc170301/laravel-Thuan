<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar1
            <h2>This is the master sidebar.2</h2>
        @show

        <div class="container">
            @yield('content')

        </div>
        
        @section('footer')
        This is the master footer
        <h2>This is the master footer.2</h2>
    @show


    </body>
</html>

