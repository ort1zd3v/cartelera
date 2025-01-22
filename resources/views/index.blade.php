@extends('app')
@section('title', 'Inicio')
@section('header-title', 'Blog de Hazel Isaac Ortiz Jimenez')
@section('content')
    <h2>Bienvenido a mi blog personal</h2>
    <p>En este espacio comparto artículos sobre tecnología, desarrollo web y más. ¡Espero que disfrutes del contenido!</p>
    <section class="mt-5">
        <h3>Últimas publicaciones</h3>
        <div class="row">
            <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($cards->chunk(3) as $index => $chunk)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row">
                                @foreach ($chunk as $card)
                                    <div class="col-md-4 mb-4">
                                        <div class="card h-100">
                                            <img src="{{ asset($card->image) }}" class="card-img-top"
                                                alt="{{ $card->title }}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $card->title }}</h5>
                                                <p class="card-text">{{ $card->text }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Controles del carrusel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </section>
@endsection


<style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #333;
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }

    .carousel-control-prev-icon::after,
    .carousel-control-next-icon::after {
        content: '';
    }
</style>
