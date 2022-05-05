<x-layout>
    <div class="container my-5 ">
        <div class="row justify-content-center">
            
            @forelse ($articles as $article)
            <div class="col-12 col-md-4 my-3 d-flex justify-content-center">
                <div class="card shadow" style="width: 18rem;">
                    <img src="{{ !$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300):'https://picsum.photos/200'}}" class="card-img-top img-tran " alt="Immagine Articolo">
                    <div class="card-body">
                        {{-- <h6 class="card-title">{{ $article->user->name }}</h6> --}}
                        <h2 class="card-title">{{ $article->title }}</h2>
                        <p class="card-text">{{ Str::limit("$article->description", 15, '...') }}</p>
                        <p class="card-text fs-4 fw-bold">{{ $article->price }} €</p>
                        {{-- <p class="my-2" href="#">Pubblicato il: {{ $article->created_at->format('d/m/Y') }}</p> --}}
                        {{-- <a class="me-3 text-dark" href="{{ route('categoryShow', ['category'=>$article->category]) }}">Categoria: {{ $article->category->name }}</a> --}}
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