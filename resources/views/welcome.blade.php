<x-layout>
  <header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-start me-5">
            <h1 class="fw-light mb-5 text-light"> <strong>{{__('ui.allTitles')}}</strong></h1>
          </div>
        </div>
      </header>
      

      <h3 class="my-5 text-center">PRODOTTI</h3>


    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
          @foreach ($articles as $article)
            <div class="swiper-slide">

                    
              <section class="container-fluid my-5 ">
                <div class="row justify-content-center">

                  <div class="col-12  d-flex justify-content-center mb-3 ">
                    <article class="card lit shadow">
                      <img src="{{ !$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300):'https://picsum.photos/200'}}" class="card-img-top img-tran" alt="Immagine Articolo">
                        <div class="card-body">
                          <h6 class="card-title">{{ $article->user->name }}</h6>
                          <h2 class="card-title">{{ Str::limit(" $article->title", 16, '') }}</h2>
                          <p class="card-text">{{ Str::limit("$article->description", 15, '...') }}</p>
                          <p class="card-text">{{ $article->price }}</p>
                          <p class="my-2 " href="#">Pubblicato il: {{ $article->created_at->format('d/m/Y') }}</p>
                          <a class="me-3 text-dark my-5" href="{{ route('categoryShow', ['category'=>$article->category]) }}">Categoria: {{ $article->category->name }}</a>
                          <a href="{{ route('showArticle', compact('article')) }}" class="btn bg-primary bg-gradient text-light"> Visualizza Prodotto </a>
                                          
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
          
  <h3 class="my-5 text-center">CATEGORIE</h3>
  {{-- CAREGORIE --}}

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class=" d-flex justify-content-between">
        <div class="col-12 col-md-3  my-5 d-flex align-items-center flex-column w-25">
          <a href="{{ route('categoryShow','1') }} "><img src="/img/fotografia.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
          <h5 class="text-center">Fotografia</h5>
          
        </div>

        <div class="col-12 col-md-3  my-5 d-flex align-items-center flex-column w-25">
          <a href="{{ route('categoryShow','2') }} "><img src="/img/telefonia.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
          <h5 class="text-center">Telefonia</h5>
        </div> 
        <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column w-25">
          <a href="{{ route('categoryShow','3') }} "><img src="/img/juegos.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
          <h5 class="text-center">Console e Videogiochi</h5>
        </div>

        <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column w-25" >
          <a href="{{ route('categoryShow','4') }} "><img src="/img/audiovideo.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
          <h5 class="text-center">Audio e Video</h5>
        </div>
      </div>
     </div>

     <div class="carousel-item ">
      <div class=" d-flex justify-content-between">
        <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column " >
          <a href="{{ route('categoryShow','5') }} "><img src="/img/animali.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
          <h5 class="text-center">Accessori per Animali</h5>
        </div>
  
        <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column " >
          <a href="{{ route('categoryShow','6') }} "><img src="/img/musicafilm.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
          <h5 class="text-center">Musica e Film</h5>
        </div>
  
        <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column " >
          <a href="{{ route('categoryShow','7') }} "><img src="/img/bici.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
            <h5 class="text-center">Biciclette</h5>
        </div>
  
        <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column " >
          <a href="{{ route('categoryShow','8') }} "><img src="/img/auto.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
            <h5 class="text-center">Accessori Auto</h5>
        </div>
    </div>
   </div>

   <div class="carousel-item ">
    <div class=" d-flex justify-content-around">
      <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column " >
        <a href="{{ route('categoryShow','9') }} "><img src="/img/libri.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
          <h5 class="text-center">Libri e Reviste</h5>
      </div>

      <div class="col-12 col-md-3 my-5 d-flex align-items-center flex-column " >
        <a href="{{ route('categoryShow','10') }} "><img src="/img/elettrodomestici.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"></a>
          <h5 class="text-center">Elettrodomestici</h5>
      </div>

  </div>
 </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  






{{-- lavora con noi --}}


  <div id="boxLavora" class="container h-100" >
    <div class="row h-100 align-items-center">
      <div class="col-12 text-start">
        <h1 class="fw-light">Lavora con noi!</h1>
        <p class="lead">Hai volontà, motivazione e spirito d’iniziativa? <br>Siamo alla ricerca di te! L'esperienza che porterai con te <br>ci aiuterà a offrire un servizio da remoto di eccellenza. <br>Abbiamo bisogno di una persona brava, ma brava davvero.<br> Potresti essere tu.</p>
        <a href="" class="btn bg-primary bg-gradient text-light"> ENVIA LA CANDIDATURA </a>
      </div>
    </div>
  </div>
</div>



</x-layout>
