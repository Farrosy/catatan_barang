<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('includes.header')

</head>    
<body>

    @include('includes.navbar')
    
    @include('includes.sidebar')

    @yield('content')

    @include('includes.footer')
    @include('includes.script')
</body>
</html>
