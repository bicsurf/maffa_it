<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <h1>Articolo: {{ $article->title }}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine Articolo">
            <div class="col-12 col-md-4">
                <h5 class="card-title">Titolo: {{ $article->title }}</h5>
                <p class="card-text">Descrizione: {{ $article->description }}</p>
                <p class="card-text">Prezzo: {{ $article->price }}</p>
                <a href="{{ route('categoryShow', ['category' => $article->category]) }}" class="my-2 border-top pt-2 border-dark card-link shadow btn bg-primary bg-gradient text-light">Categoria: {{ $article->category->name }}</a>
                <p class="card-text">Pubblicato il: {{ $article->created_at->format('d/m/Y') }} - Autore {{ $article->user->name ?? '' }}</p>
            </div>
        </div>
    </div>
</x-layout>