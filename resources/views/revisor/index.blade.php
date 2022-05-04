<x-layout>
    <div class="container-fluid p-5 bg-gradient bg-primary p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{ $announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
                </h1>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-4 my-3">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      @if ($announcement_to_check->images)
                          <div class="carousel-inner">
                              @foreach ($announcement_to_check->images as $image)
                                  <div class="carousel-item @if ($loop->first) active @endif">
                                      <img src="{{ $image->getUrl(400, 300) }}" class="card-img-top"
                                          alt="Immagine Articolo">
                                  </div>
                              @endforeach
                          </div>
                      @else
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img src="https://picsum.photos/1000" class="card-img-top"
                                      alt="Immagine Articolo">
                              </div>
                              <div class="carousel-item">
                                  <img src="https://picsum.photos/1000" class="card-img-top"
                                      alt="Immagine Articolo">
                              </div>
                              <div class="carousel-item">
                                  <img src="https://picsum.photos/1000" class="card-img-top"
                                      alt="Immagine Articolo">
                              </div>
                          </div>
                      @endif
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                      </button>
                  </div>
              </div>
              <div class="col-12 col-md-7">
                  <h1 class="text-center">{{ $announcement_to_check->title }}</h1>
                  <hr>
                  <a href="{{ route('categoryShow', ['category' => $announcement_to_check->category]) }}"
                      class="my-2 border-top pt-2 border-dark card-link shadow btn bg-primary bg-gradient text-light">{{ $announcement_to_check->category->name }}</a>
                  <h5 class="card-text">Prezzo: {{ $announcement_to_check->price }} €</h5>
                  <hr>
                  <h5>Descrizione :</h5>
                  <p class="card-text">{{ $announcement_to_check->description }}</p>
                  <hr id="hr-show">
                  <h5 class="card-text custom-positioning">Contatta subito
                      <strong>{{ $announcement_to_check->user->name ?? '' }}</strong> per avere più informazioni a
                      riguardo</h5>
                  <p id="p-date" class="card-text custom-positioning">Pubblicato il:
                      {{ $announcement_to_check->created_at->format('d/m/Y') }} </p>
              </div>
              {{-- Semafori validazione immagine caricata dall'utente --}}
              @foreach ($announcement_to_check->images as $image)
                <div class="col-md-12">
                    <div class="card-body">
                     
                        <h5 class="tc-accent">Revisione Immagini</h5>
                        <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                        <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                        <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                        <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                        <p>Contenuto Ammiccante: <span class="{{ $image->racy }}"></span></p>
                    </div>
                </div>
              @endforeach
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-6 d-flex justify-content-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#acceptModal">
                      Accetta
                  </button>
              </div>
              <div class="col-12 col-md-6 d-flex justify-content-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rejectModal">
                      Rifiuta
                  </button>
              </div>
          </div>
      </div>
      <div class="modal fade" id="acceptModal" tabindex="-1" aria-labelledby="acceptModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="acceptModalLabel">ATTENZIONE!</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      Sei sicuro di voler autorizzare questo articolo?
                  </div>
                  <div class="modal-footer">
                      <form action="{{ route('revisor.accept_announcement', ['article' => $announcement_to_check]) }}"
                          method="post">
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
      <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="rejectModalLabel">ATTENZIONE!</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                          aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      Sei sicuro di voler rifiutare questo annuncio?
                  </div>
                  <div class="modal-footer">
                      <form action="{{ route('revisor.reject_announcement', ['article' => $announcement_to_check]) }}"
                          method="post">
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
</x-layout>
