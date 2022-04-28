<x-layout>
    <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-start">
              {{-- <h1 class="fw-light mb-5"> <strong>Comincia a guadagnare</strong></h1>
              <p class="lead"> <strong>Dai al tuo usato una seconda occasione: vendi quello che non usi più. </strong></p> --}}
            </div>
          </div>
        </div>
      </header>
      
    <div class="container">
        <div class="row me-4">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine Articolo">
                    <div class="card-body">
                        <h6 class="card-title">{{ $article->user->name }}</h6>
                        <h2 class="card-title">{{ Str::limit(" $article->title", 16, '') }}</h2>
                        <p class="card-text">{{ Str::limit("$article->description", 15, '...') }}</p>
                        <p class="card-text">{{ $article->price }}</p>
                        <p class="my-2" href="#">Pubblicato il: {{ $article->created_at->format('d/m/Y') }}</p>
                        <a href="#">Categoria: {{ $article->category->name }}</a>
                        <a href="{{ route('showArticle', compact('article')) }}" class="btn btn-primary"> Leggi di più </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
