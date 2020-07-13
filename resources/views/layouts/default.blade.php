<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
<div id="page">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
</div>
</body>
</html>