<x-layout>
    <div class="container">
        <div class="row ">
            @forelse ($category->articles->where('is_accepted', true)->sortByDesc('created_at') as $article)
                <div class="col-12 col-md-4 my-3">
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
