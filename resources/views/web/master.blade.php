<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{ asset("css/app.css") }}'>
    <link rel="stylesheet" href='{{ asset("css/styles.css") }}'>
    <title>Dashboard</title>
</head>

<body>

    @include('web.partials.nav-header-main')

    <div class="container mt-3 mb-3" id="app">

        @yield('content')

    </div>

    @include('web.partials.footer-main')

    <script src='{{ asset("js/app.js") }}'></script>
    <script src='{{ asset("js/script.js") }}'></script>
</body>

</html>