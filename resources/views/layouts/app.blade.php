<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'I products')</title>

        {{-- css --}}
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('partials.navbar')

        <main>
            @yield('main-content')
        </main>

    </body>
</html>
