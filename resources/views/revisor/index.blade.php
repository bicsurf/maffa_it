<x-layout>
<div class="container-fluid p-5 bg-gradient bg-primary p-5 shadow mb-4">
    <div class="row">
        <div class="col-12 text-light p-5">
            <h1 class="display-2">
                {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
            </h1>
        </div>
    </div>
</div>
@if ($announcement_to_check)
<div class="container">
    <div class="row">
            <div class="col-12 col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine Articolo">
                    <div class="card-body">
                        <h6 class="card-title">{{ $announcement_to_check->user->name }}</h6>
                        <h2 class="card-title">{{ $announcement_to_check->title }}</h2>
                        <p class="card-text">{{ Str::limit("$announcement_to_check->description", 15, '...') }}</p>
                        <p class="card-text">{{ $announcement_to_check->price }}</p>
                        <p class="my-2" href="#">Pubblicato il: {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                        <a href="#">Categoria: {{ $announcement_to_check->category->name }}</a>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6 text-end">
        <form action="{{route('revisor.accept_announcement', ['article'=>$announcement_to_check]) }}" method="post">
        @csrf
        @method('PATCH')
        <button type="submit" class="btn btn-success shadow">Accetta</button>
        </form>
    </div>
    <div class="col-12 col-md-6 text-end">
        <form action="{{route('revisor.reject_announcement', ['article'=>$announcement_to_check]) }}" method="post">
        @csrf
        @method('PATCH')
        <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
        </form>
    </div>
</div>
@endif












</x-layout>