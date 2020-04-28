<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{ asset("css/app.css") }}'>
    <title>Dashboard</title>
</head>

<body>

    @include('dashboard.partials.nav-header-main')

    <div class="container mt-2">

        @include('dashboard.partials.validation-success')

        @yield('content')

    </div>

    <script src='{{ asset("js/app.js") }}'></script>
</body>

</html>