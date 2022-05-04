<x-layout>
    <div class="container my-5">
        <div class="row">
            {{-- Carosello delle immagini degli annunci --}}
            <div class="col-12 col-md-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    @if ($article->images)
                        <div class="carousel-inner">
                            @foreach ($article->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ $image->getUrl(400, 300) }}" class="card-img-top img-tran"
                                        alt="Immagine Articolo">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/1000" class="card-img-top" alt="Immagine Articolo">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1000" class="card-img-top" alt="Immagine Articolo">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1000" class="card-img-top" alt="Immagine Articolo">
                            </div>
                        </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                {{-- Modale di condivisione --}}
                <div class="row d-flex justify-content-center">
                    <div class="col-5 mt-5 text-center">
                        <h5>CONDIVIDI</h5>
                        <!-- Button trigger modal -->
                        <i class="bi bi-share-fill" style="font-size: 4rem; color:#d6680b; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Condividi l'annuncio con chi
                                            vuoi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Condividendo il tuo annuncio aumenterai le possibilità di concludere un
                                            affare!</p>
                                        <div class="d-flex justify-content-center">
                                            {{-- Loghi Social per condivisione --}}
                                            <a href="#"><i class="bi bi-facebook m-3" style="font-size: 4rem;"></i></a>
                                            <a href="#"><i class="bi bi-messenger m-3" style="font-size: 4rem;"></i></a>
                                            <a href="#"><i class="bi bi-whatsapp m-3"
                                                    style="font-size: 4rem; color:green;"></i></a>
                                            <a href="#"><i class="bi bi-link-45deg m-3"
                                                    style="font-size: 4rem; color:rgb(73, 73, 73);"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fine del carosello delle immagini degli annunci --}}

            {{-- Body descrizione articolo --}}
            <div class="col-12 col-md-7 border shadow rounded">
                {{-- Title --}}
                <div class="text-center">
                    <h1>{{ $article->title }}</h1>
                </div>
                {{-- Price --}}
                <div>
                    <a href="{{ route('categoryShow', ['category' => $article->category]) }}"
                        class="my-2 border-top pt-2 border-dark card-link shadow btn bg-primary bg-gradient text-light">{{ $article->category->name }}</a>
                    <h5 class="my-3 fs-3">Prezzo: {{ $article->price }} €</h5>
                </div>
                {{-- Description --}}
                <div>
                    <hr>
                    <h5 class="my-3 fs-3 font-monospace">Descrizione: </h5>
                    <p class="card-text">{{ $article->description }}</p>
                    <hr id="hr-show">
                </div>
                {{-- Contatta l'utente che vuole pubblicare l'annuncio --}}
                <div class="container">
                    <div class="row text-center">
                        <div class="col-12">
                            <h5>Contatta subito <strong>{{ $article->user->name ?? '' }}</strong> per avere più
                                informazioni a riguardo</h5>
                        </div>
                        <div class="col-12">
                            <p>Pubblicato il: {{ $article->created_at->format('d/m/Y') }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
