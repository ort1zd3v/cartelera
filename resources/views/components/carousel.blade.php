<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($cards as $index => $card)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset($card['image']) }}" class="card-img-top" alt="{{ $card['title'] }}" />
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="#">{{ $card['title'] }}</a>
                                </h5>
                                <p class="card-text">{{ $card['text'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
