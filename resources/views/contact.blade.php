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
      <div class="mb-4 text-center">
        <img
          src="{{ asset('https://img.freepik.com/free-photo/vintage-pink-telephone-composition_23-2148913955.jpg') }}"
          class="img-fluid"
          alt="Ponte en contacto"
        />
      </div>

      <section>
        <h2 class="text-center mb-4">Ponte en contacto conmigo</h2>
        <form>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" required />
          </div>
          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea
              class="form-control"
              id="mensaje"
              rows="4"
              required
            ></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
      <p>© 2024 Hazel Isaac Ortiz Jimenez</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
