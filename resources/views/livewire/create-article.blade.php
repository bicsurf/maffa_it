<div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-12  my-5">
                <h1>Crea annuncio</h1>
                
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                
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
                                
                                <div class="mb-3">
                                    <label for="category" > Categoria</label>
                                    <select wire:model.defer="category" id="category" class="form-control"> 
                                        <option value="">Scegli la categoria</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
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


