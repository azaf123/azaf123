<html lang="en">
<head>
    <!-- yield masukin data, include input data -->
    <title>@yield('title')</title>
    <!-- punya blade -->
    @include('templatefrontend.header')
</head>
<body>

    @include('templatefrontend.navbar')
    @yield('content') 
    @include('templatefrontend.footer')
    
</body>
</html>