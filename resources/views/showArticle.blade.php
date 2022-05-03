<x-layout>
  
  <div class="container">
    <div  class="row  my-5">
      <div  class="col-12 col-md-5">
        
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          
          @if($article->images)
          <div class="carousel-inner">
            @foreach ($article->images as $image)
            
            <div class="carousel-item @if($loop->first)active @endif">
              <img src="{{ Storage::url($image->path) }}" class="card-img-top" alt="Immagine Articolo">
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

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          
        </div>
      </div>
      
      <div class="col-12 col-md-7">
        <h1>{{ $article->title }}</h1><hr>
        <a href="{{ route('categoryShow', ['category' => $article->category]) }}" class="my-2 border-top pt-2 border-dark card-link shadow btn bg-primary bg-gradient text-light">{{ $article->category->name }}</a>
        <p class="card-text">Prezzo: {{ $article->price }}</p><hr>
        <h5>Descrizione :</h5>
        <p class="card-text">Descrizione: {{ $article->description }}</p>
        <hr id="hr-show">
        <h5 class="card-text custom-positioning">Contatta subito <strong>{{ $article->user->name ?? '' }}</strong> per avere più informazioni a riguardo</h5>
        <p id="p-date" class="card-text custom-positioning">Pubblicato il: {{ $article->created_at->format('d/m/Y') }}  </p>
      </div>
    </div>
  </div>
</x-layout>


