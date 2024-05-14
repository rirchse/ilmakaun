<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$setting->title ?? env('APP_NAME')}}</title>
    <link rel="icon" href="{{$setting->favicon ?? '/images/favicon.png'}}">
    @include('partials.style')
    @yield('stylesheets')
</head>

<body>
    @include('dashboard.navbar')
    <div class="br-mainpanel">
        @include('partials.message')

        @yield('content')

        @include('dashboard.footer')
    </div>
    @include('partials.script')
    @yield('scripts')
</body> 
</html>