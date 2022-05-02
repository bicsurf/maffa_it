<x-layout>
    <div class="container">
        <div class="row">
            
            @forelse ($articles as $article)
            <div class="col-12 col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine Articolo">
                    <div class="card-body">
                        <h6 class="card-title">{{ $article->user->name }}</h6>
                        <h2 class="card-title">{{ $article->title }}</h2>
                        <p class="card-text">{{ Str::limit("$article->description", 15, '...') }}</p>
                        <p class="card-text">{{ $article->price }}</p>
                        <p class="my-2" href="#">Pubblicato il: {{ $article->created_at->format('d/m/Y') }}</p>
                        <a href="#">Categoria: {{ $article->category->name }}</a>
                        <a href="{{ route('showArticle', compact('article')) }}" class="btn btn-primary"> Visualizza Prodotto </a>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead text-center"> Non ci sono annunci per questa ricerca.</p>
                    </div>
                </div>
            @endforelse
            {{$articles->links()}}
        </div>
    </div>



</x-layout>