<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('forstersgym.title') }}</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/bootstrap-cosmo.min.css') !!}
    <!-- for extra styles -->
    @yield('styles')
</head>

<body>
    <!-- for other pages main content area -->
    @yield('content')

    <!-- for common js scripts -->
    {!! Html::script('js/jquery-2.1.4.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}

    <!-- for extra scripts -->
    @yield('scripts')
</body>
</html>