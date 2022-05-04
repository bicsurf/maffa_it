<x-layout>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            @forelse ($category->articles->where('is_accepted', true)->sortByDesc('created_at') as $article)
                <div class="col-12  d-flex justify-content-center mb-3 ">
                    <div class="card lit shadow">
                        <img src="{{ !$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300):'https://picsum.photos/200'}}" class="card-img-top img-tran" alt="Immagine Articolo">
                        <div class="card-body">
                            <h6 class="card-title">{{ $article->user->name }}</h6>
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <p class="card-text">{{ Str::limit("$article->description", 15, '...') }}</p>
                            <p class="card-text">{{ $article->price }}</p>
                            <p class="my-2 d-flex justify-center" href="#">Pubblicato il: {{ $article->created_at->format('d/m/Y') }}</p>
                            <a class="me-3 text-dark my-5" href="#">Categoria: {{ $article->category->name }}</a>
                            <a href="{{ route('showArticle', compact('article')) }}" class="btn bg-primary bg-gradient text-light"> Visualizza Prodotto </a>
                        </div>
                    </div>
                </div>
            @empty
                
                <div class="col-12 text-center my-5">
                    <h1>ATTENZIONE:</h1>
                    <p class="h1">Non sono presenti annunci per questa categoria</p>
                    <h2 class="mt-5">Vuoi pubblicarne uno?</h2>
                    <a href="{{ route('article.create') }}" class="btn btn-primary mt-4">Crea nuovo annuncio</a>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
