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
        <h2>Bienvenido a mi blog personal</h2>
        <p>
            En este espacio comparto artículos sobre tecnología, desarrollo web y
            más. ¡Espero que disfrutes del contenido!
        </p>

        <section class="mt-5">
            <h3>Últimas publicaciones</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/html_y_css.jpg') }}" class="card-img-top" alt="HTML y CSS" />
                        <div class="card-body">
                            <h5 class="card-title">
                                <a>Introducción
                                    a HTML y CSS</a>
                            </h5>
                            <p class="card-text">
                                Descubre los conceptos básicos de HTML y CSS, los lenguajes
                                fundamentales para construir sitios web.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
