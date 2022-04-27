<div>
    

    <div class="container">
        <div class="row">
            <div class="col-12  my-5">
                <h1>Crea annuncio</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
               

    <div class="container">
        <div class="row">
            <div class="col-12">
               
                <form wire:submit.prevent="store">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input type="text" class="form-control 
                      @error('title') is-invalid @enderror" id="title" wire:model="title">
                    
                      @error('title')
                      {{$message}}
                      @enderror

                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model="description"></textarea>
                        @error('description')
                        {{$message}}
                        @enderror
                    
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" class="form-control  @error('price') is-invalid @enderror" id="price" wire:model="price">
                        @error('price')
                        {{$message}}
                        @enderror
                    
                    </div>

                      {{-- div categorie e paesi --}}

                    <button type="submit" class="btn btn-primary">Crea</button>
                  </form>
            </div>
        </div>
    </div>

</div>


            </div>
        </div>
    </div>


