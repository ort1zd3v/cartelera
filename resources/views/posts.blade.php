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
        <div class="mb-4">
            <img src="assets/images/htmlsycssbk.jpg" class="img-fluid" alt="Introducción a HTML y CSS" />
        </div>

        <article>
            <h2>Introducción a HTML y CSS</h2>
            <p><strong>Fecha de publicación:</strong> 17 de septiembre de 2024</p>
            <p>
                HTML (HyperText Markup Language) es el lenguaje estándar para crear
                sitios web. Define la estructura del contenido de una página
                utilizando etiquetas. CSS (Cascading Style Sheets), por otro lado, es
                el lenguaje que permite diseñar y estilizar la apariencia visual de
                una página web.
            </p>
        </article>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>© 2024 Hazel Isaac Ortiz Jimenez.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
