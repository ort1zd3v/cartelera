<header class="bg-dark text-white text-center py-4">
    <h1>Blog de Hazel Isaac Ortiz Jimenez</h1>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Sobre mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                </li>
            </ul>
            <a href="{{ route('login') }}" class="btn btn-primary ml-auto">Acceder</a>
        </div>
    </nav>
</header>
