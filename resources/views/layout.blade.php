<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Home page')</title>
    <!-- <link rel="stylesheet" type="text/css" href="/css/app.css"> -->
</head>

<body>
   

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About me</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>

    @yield('content')
</body>

</html>