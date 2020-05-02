<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('head')
</head>

<body>
    <header>
        <h1>@yield('header-text')</h1>
    </header>

    <div class="main">
        @yield('main')
    </div>

    @yield('script')
</body>

</html>