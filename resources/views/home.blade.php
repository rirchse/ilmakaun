<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.home_style')
        @yield('stylesheets')
</head>
<body>
    @include('home.header')
        @yield('content')
    @include('home.footer')
    @include('partials.home_script')
    @yield('scripts')
</body>
</html>