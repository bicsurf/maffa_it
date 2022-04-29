<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <h1>Tutti gli articoli:</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @forelse ($category->articles->sortByDesc('created_at') as $article)
                <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
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
                <div class="col-12 col-md-4">
                    <p class="h1">Non sono presenti annunci per queste categorie</p>
                    <h2>Pubblicane uno:
                        <a href="{{ route('article.create') }}" class="btn btn-primary">Nuovo Annuncio</a>
                    </h2>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
