<x-layout>
    @desktop
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-start me-5">
                    <h1 class="fw-light mb-5 text-light fs-1 fw-bold"> <strong>{{ __('ui.allTitles') }}</strong></h1>
                </div>
            </div>
        </div>
    </header>
@else

<header class="masthead" id="mobile">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-start me-5">
                <h1  class="fw-light mb-5 text-light text-center my-5 fs-1 fw-bold" id="titoloMobile"> <strong>{{ __('ui.allTitles') }}</strong></h1>
            </div>
        </div>
    </div>
</header>

@enddesktop

    <h3 class="my-5 text-center">{{ __('ui.allProduct') }}</h3>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($articles as $article)
                <div class="swiper-slide">
                    <section class="container-fluid my-5 ">
                        <div class="row justify-content-center">
                            <div class="col-12  d-flex justify-content-center mb-3 ">
                                <article class="card lit shadow">
                                    <a href="{{ route('showArticle', compact('article')) }}"><img src="{{ !$article->images()->get()->isEmpty()? $article->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                                        class="card-img-top img-tran" alt="Immagine Articolo"></a>
                                    <div class="card-body">
                                        {{-- <h6 class="card-title">{{ $article->user->name }}</h6> --}}
                                        <h2 class="card-title">{{ Str::limit(" $article->title", 16, '') }}</h2>
                                        <p class="card-text">{{ Str::limit("$article->description", 15, '...') }}
                                        </p>
                                        <p class="card-text fs-4 fw-bold">{{ $article->price }} ???</p>
                                        {{-- <p class="fst-italic" href="#">{{__('ui.cardPostedOn') }}
                                            {{ $article->created_at->format('d/m/Y') }}</p> --}}
                                        {{-- <a class="text-dark" href="{{ route('categoryShow', ['category' => $article->category]) }}">{{__('ui.cardCategory') }} {{ $article->category->name }}</a> --}}
                                        <a class="btn bg-primary bg-gradient text-light my-3" href="{{ route('showArticle', compact('article')) }}"> {{__('ui.cardViewProduct') }} </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <h3 class="my-5 text-center">{{ __('ui.allCategories') }}</h3>
    @desktop
    {{-- CAREGORIE --}}
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class=" d-flex justify-content-between">
                    <div class="col-12 col-md-3  my-5 d-flex align-items-center flex-column w-25">
                        <a href="{{ route('categoryShow', '1') }} "><img src="/img/fotografia.jpg"
                                class="rounded-circle btn shadow  my-2"></a>
                        <h5 class="text-center">{{ __('ui.categoryPhotography') }}</h5>
                    </div>
                    <div class="col-12 col-md-3  my-5 d-flex align-items-center flex-column w-25">
                        <a href="{{ route('categoryShow', '2') }} "><img src="/img/telefonia.jpg"
                                class="rounded-circle btn shadow my-2"></a>
                        <h5 class="text-center">{{ __('ui.categoryTelephony') }}</h5>
                    </div>
                    <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column w-25">
                        <a href="{{ route('categoryShow', '3') }} "><img src="/img/juegos.jpg"
                                class="rounded-circle btn shadow my-2"></a>
                        <h5 class="text-center">{{ __('ui.categoryConsoleVideoGames') }}</h5>
                    </div>
                    <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column w-25">
                        <a href="{{ route('categoryShow', '4') }} "><img src="/img/audiovideo.jpg"
                                class="rounded-circle btn shadow my-2"></a>
                        <h5 class="text-center">{{ __('ui.categorySoundVideo') }}</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class=" d-flex justify-content-between">
                    <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column ">
                        <a href="{{ route('categoryShow', '5') }} "><img src="/img/animali.jpg"
                                class="rounded-circle btn shadow  my-2"></a>
                        <h5 class="text-center">{{ __('ui.categoryPets') }}</h5>
                    </div>
                    <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column ">
                        <a href="{{ route('categoryShow', '6') }} "><img src="/img/musicafilm.jpg"
                                class="rounded-circle btn shadow my-2"></a>
                        <h5 class="text-center">{{ __('ui.categoryMusicFilm') }}</h5>
                    </div>
                    <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column ">
                        <a href="{{ route('categoryShow', '7') }} "><img src="/img/bici.jpg"
                                class="rounded-circle btn shadow my-2"></a>
                        <h5 class="text-center">{{ __('ui.categoryBicycles') }}</h5>
                    </div>
                    <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column ">
                        <a href="{{ route('categoryShow', '8') }} "><img src="/img/auto.jpg"
                                class="rounded-circle btn shadow my-2"></a>
                        <h5 class="text-center">{{ __('ui.categoryCarAccessories') }}</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class=" d-flex justify-content-around">
                    <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column ">
                        <a href="{{ route('categoryShow', '9') }} "><img src="/img/libri.jpg"
                                class="rounded-circle btn shadow  my-2"></a>
                        <h5 class="text-center">{{ __('ui.categoryBooksMagazines') }}</h5>
                    </div>
                    <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column ">
                        <a href="{{ route('categoryShow', '10') }} "><img src="/img/elettrodomestici.jpg"
                                class="rounded-circle btn shadow  my-2"></a>
                        <h5 class="text-center">{{ __('ui.categoryDomestic') }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @else
<div class="container">
    <div class="row  justify-content-center">
        <div class="col-6 my-3 d-flex justify-content-center ">
        <a href="{{ route('categoryShow', '1') }} "><img src="/img/fotografia.jpg"
                class="rounded-circle btn shadow my-2"></a>
        </div>
        <div class="col-6 my-3 d-flex justify-content-center">
            <a href="{{ route('categoryShow', '2') }} "><img src="/img/telefonia.jpg"
                    class="rounded-circle btn shadow my-2"></a>
        </div>
        <div class="col-6 my-3 d-flex justify-content-center">
            <a href="{{ route('categoryShow', '3') }} "><img src="/img/juegos.jpg"
                    class="rounded-circle btn shadow my-2"></a>
        </div>
        <div class="col-6 my-3 d-flex justify-content-center">
            <a href="{{ route('categoryShow', '4') }} "><img src="/img/audiovideo.jpg"
                    class="rounded-circle btn shadow my-2"></a>
        </div>
        <div class="col-6 my-3 d-flex justify-content-center">
            <a href="{{ route('categoryShow', '5') }} "><img src="/img/animali.jpg"
                    class="rounded-circle btn shadow  my-2"></a>
        </div>
        <div class="col-6 my-3 d-flex justify-content-center">
            <a href="{{ route('categoryShow', '6') }} "><img src="/img/musicafilm.jpg"
                    class="rounded-circle btn shadow my-2"></a>
        </div>
    </div>
</div>
@enddesktop
    {{-- lavora con noi --}}
    <div class="boxLavora">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-start">
                    <h5 style="color:#D6680B">IL LAVORO A PORTATA DI UN CLICK</h5>
                    <h1 class="fw-light">Lavora con noi!</h1>
                    <p class="lead">Hai volont??, motivazione e spirito d???iniziativa? <br>Siamo alla ricerca di
                        te! L'esperienza che porterai con te <br>ci aiuter?? a offrire un servizio da remoto di
                        eccellenza. <br>Abbiamo bisogno di una persona brava, ma brava davvero.<br> Potresti essere tu.
                    </p>
                    <a href="{{route('lavoraShow')}}" class="btn bg-primary bg-gradient text-light"> INVIA LA CANDIDATURA </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>