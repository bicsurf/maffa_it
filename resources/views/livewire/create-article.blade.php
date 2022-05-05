<div class="crea">
    {{-- Title && alert --}}
    <div class="container">
        <div class="row">
            <div class="col-12  mt-5">
                <h1>Crea annuncio</h1>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                
            </div>
        </div>
    {{-- Form --}}
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
                                <div class="mb-3">
                                    <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error ('temporary_images.*') is-invalid @enderror" placeholder="immagine"/>
                                    @error ('temporary_images.*')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                @if (!empty($images))
                                
                                    <div class="col-12">
                                        <p>Photo preview:</p>
                                        <div class="row border border-4 border-info rounded shadow py-4">
                                            @foreach ($images as $key=>$image)
                                            <div class="col my-3">
                                                {{-- <div class="img-preview mx-auto shadow rounded" style="background-image:url({{ $image->temporaryUrl() }}); height:500px; width:500px;"></div> --}}
                                                <img src="{{ $image->temporaryUrl() }}" alt="" class="w-100">
                                                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{ $key }})">Cancella</button>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                
                                @endif
                                <button type="submit" class="btn btn-primary">Crea</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



