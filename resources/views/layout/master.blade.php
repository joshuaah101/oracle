<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oracle Today - @yield('title')</title>
    {{-- tailwindCss --}}
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- additional links (e.g. fonts etc.) --}}
    <style>
        body
        {
            margin: 0;
            padding: 0;
        }
    </style>
    @yield('css_links') 
</head>
<body class="antialiased bg-gray-100 text-gray-800 dark:bg-slate-900 dark:text-slate-100 flex flex-col items-center">
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