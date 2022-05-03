<x-layout>
    <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-start me-5">
              <h1 class="fw-light mb-5 text-light"> <strong>{{__('ui.allTitles')}}</strong></h1>
            </div>
          </div>
        </div>
      </header>
      

      <h1 class="my-5 text-center">Prodotti</h1>


      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach ($articles as $article)
          <div class="swiper-slide">

            
      <section class="container-fluid my-5 ">
        <div class="row justify-content-center">

         
       
          <div class="col-12  d-flex justify-content-center mb-3 ">
            <article class="card lit shadow">
            <img class="img-tran"  src="https://picsum.photos/200" >
                <div class="card-body">
                  <h6 class="card-title">{{ $article->user->name }}</h6>
                  <h2 class="card-title">{{ Str::limit(" $article->title", 16, '') }}</h2>
                  <p class="card-text">{{ Str::limit("$article->description", 15, '...') }}</p>
                  <p class="card-text">{{ $article->price }}</p>
                  <p class="my-2 d-flex justify-center" href="#">Pubblicato il: {{ $article->created_at->format('d/m/Y') }}</p>
                  <a class="me-3 text-dark" href="{{ route('categoryShow', ['category'=>$article->category]) }}">Categoria: {{ $article->category->name }}</a>
                  <a href="{{ route('showArticle', compact('article')) }}" class="btn bg-primary bg-gradient text-light"> Leggi di più </a>
                                  
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
     
      
  <div class="container-fluid my-5">
    <div class="row justyfi-contend-center">
      <h1 class="text-center">Categorie</h1>
      <div class="col-12 col-md-3 botone my-5 d-flex align-items-center flex-column ">
        <img src="/img/fotografia.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2" href=" " alt="...">
        <h5 class="text-center">Fotografia</h5>
      </div>

      <div class="col-12 col-md-3 botone my-5 d-flex align-items-center flex-column ">
        <img src="/img/telefonia.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2" href="#" alt="...">
        <h5 class="text-center">Telefonia</h5>
      </div> 
      <div class="col-12 col-md-3 botone my-5 d-flex align-items-center flex-column ">
        <img src="/img/juegos.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2" href="#" alt="...">
        <h5 class="text-center">Console e Videogiochi</h5>
      </div>

      <div class="col-12 col-md-3 botone my-5 d-flex align-items-center flex-column " >
        <img src="/img/audiovideo.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"  href="#" alt="...">
        <h5 class="text-center">Audio e Video</h5>
      </div>
      <div class="col-12 col-md-3 botone my-5 d-flex align-items-center flex-column " >
        <img src="/img/animali.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"  href="#" alt="...">
        <h5 class="text-center">Accessori per Animali</h5>
      </div>

      <div class="col-12 col-md-3 botone my-5 d-flex align-items-center flex-column " >
        <img src="/img/musicafilm.jpg" class="rounded-circle btn shadow d-flex align-items-center my-2"  href="#" alt="...">
        <h5 class="text-center">Musica e Film</h5>
      </div>

    <div class="col-12 col-md-3 botone my-5 d-flex flex-column" >
      <img src="/img/audiovideo.jpg" class="rounded-circle btn shadow me-3 d-flex align-items-center my-2"  href="#" alt="...">
      <h5 class="text-center">Audio e Video</h5>
    </div>
  </div>
</x-layout>
