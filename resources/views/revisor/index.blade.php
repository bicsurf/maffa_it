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
       
        
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#acceptModal">
          Accetta
        </button>

    </div>


    <div class="col-12 col-md-6 text-end">

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rejectModal">
        Rifiuta
      </button>

       
    </div>
</div>

<div class="modal fade" id="acceptModal" tabindex="-1" aria-labelledby="acceptModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="acceptModalLabel">ATTENZIONE!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler autorizzare questo articolo?
      </div>
      <div class="modal-footer">
        

        <form action="{{route('revisor.accept_announcement', ['article'=>$announcement_to_check]) }}" method="post">
        @csrf
        @method('PATCH')
        <button type="submit" class="btn btn-success shadow" data-bs-dismiss="modal">SI</button>

        </form>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
        
      </div>
    </div>
  </div>
</div>




<!-- Modale rifiuta -->
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rejectModalLabel">ATTENZIONE!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler rifiutare questo annuncio?
      </div>
      <div class="modal-footer">

        <form action="{{route('revisor.reject_announcement', ['article'=>$announcement_to_check]) }}" method="post">
          @csrf
          @method('PATCH')
          <button type="submit" class="btn btn-danger shadow" data-bs-dismiss="modal">SI</button>
          </form>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
       
      </div>
    </div>
  </div>
</div>

@endif


<!-- Button trigger modal -->


<!-- Modal -->


</x-layout>