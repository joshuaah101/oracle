<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- tailwindCss --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    {{-- additional links (e.g. fonts etc.) --}}
    @yield('css_links')
</head>
<body class="antialiased bg-slate-200 dark:bg-slate-900 dark:text-slate-100 flex justify-center">
    @yield('nav')
    @yield('header')
    @yield('main')
    @yield('footer')

    {{-- jquery --}}
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    {{-- additional scripts --}}
    @yield('scripts')
</body>
</html>