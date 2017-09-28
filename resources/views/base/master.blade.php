<html lang="{{ config('app.locale') }}">
    <head>
        @include('base.head')
    </head>
    <body>
        <header class="header fixed">
            <div class="-container">
                <div class="-main">
                    @include('base.header.main')
                </div>
                <div class="-actions">
                    @include('base.header.actions')
                </div>
            </div>
        </header>

        <div class="container">
            <div id="content">
                @section('content')
                    <div id="main" role="main">
                        @yield('main')
                    </div>

                    <div id="sidebar" role="complementary">
                        @yield('sidebar')
                    </div>
                @show
            </div>
        </div>

        <footer class="footer">
            @include('base.footer')
        </footer>
    </body>
</html>
