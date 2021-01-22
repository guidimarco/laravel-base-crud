<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'I products')</title>

        {{-- css --}}
        <link rel="stylesheet" href="/css/app.css">

        {{-- js --}}
        <script src="/js/app.js" charset="utf-8"></script>
    </head>
    <body>
        @include('partials.navbar')

        <main>
            @yield('main-content')
        </main>

    </body>
</html>
