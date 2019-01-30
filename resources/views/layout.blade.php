<!DOCTYPE html>
<html>
<head>
    <title>@yield('title' , 'my first Laravel')</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">about us</a></li>
        <li><a href="/contact">contact us</a></li>
        @yield('content')
    </ul>
</body>
</html>