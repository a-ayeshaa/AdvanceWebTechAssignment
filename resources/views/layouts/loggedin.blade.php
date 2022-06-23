<html>
    <head>
        <h3>
        <a href="{{route('user.dashboard')}}">DASHBOARD || </a>
        <a href="{{route('user.details.all')}}">DETAILS</a>
        </h3>
    </head>
    <body>
        @yield('content')
        <br>
        <a href="{{ route('user.logout') }}">LOG OUT</a>
    </body>
</html>