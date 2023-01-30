<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>
    @vite ('resources/js/app.js')
    @yield('head')
</head>
<body>
    <div class="header">
        @include('components.header')
    </div>
    <div class="jumbotron">
        @include('components.jumbotron')
    </div>
    <div class="footer">
        @include('components.footer')
    </div>
    @yield('content')
</body>
</html>