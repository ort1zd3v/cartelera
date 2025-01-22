<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Blog de Hazel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header class="bg-dark text-white text-center py-4">
        <h1>@yield('header-title')</h1>
        @include('nav')
    </header>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 Hazel Isaac Ortiz Jimenez</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
