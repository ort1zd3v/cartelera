<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog de Hazel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <x-header />

    <main class="container my-5">
        <h2>Publicaciones recientes</h2>
        <div class="row">
            @foreach ($cards as $card)
            <div class="col-md-3 mb-4"> <!-- 4 columnas -->
                <div class="card h-100">
                    <img src="{{ asset($card->image) }}" class="card-img-top" alt="{{ $card->title }}">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ route('posts') }}">{{ $card->title }}</a>
                        </h5>
                        <p class="card-text">
                            {{ $card->description }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 Hazel Isaac Ortiz Jimenez</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
