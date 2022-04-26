<div>
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea annuncio</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
               
                <form wire:submit.prevent="store">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input type="text" class="form-control" id="title" wire:model="title">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text" class="form-control" id="description" wire:model="description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" wire:model="price">
                    </div>

                      {{-- div categorie e paesi --}}

                    <button type="submit" class="btn btn-primary">Crea</button>
                  </form>
            </div>
        </div>
    </div>

</div>
