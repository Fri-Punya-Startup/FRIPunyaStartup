<!doctype html>
<html lang="en">

<head>
    <title>{{ $title ?? config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('pages.layouts.head-import')
    @yield('head-script')
    @yield('style')
</head>

<body>
    <header>
        @yield('navbar')
    </header>
    <main id="main">
        @include('pages.dashboard.layouts.sidebar')
    </main>
    <footer>
        @yield('footer')
    </footer>
    @include('pages.layouts.body-import')
    @yield('script')
</body>

</html>
