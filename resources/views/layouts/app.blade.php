<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" >
        <title>Rock Paper Scissors</title>
        @livewireStyles
    </head>
    <body>
    <h1 class="site-name">@lang('game.site_name')</h1>

    @yield('content')

    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
