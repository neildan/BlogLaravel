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

    <div class="container mt-2" id="app">

        @yield('content')

    </div>

    <script src='{{ asset("js/app.js") }}'></script>
    <script src='{{ asset("js/script.js") }}'></script>
</body>

</html>