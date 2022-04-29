<x-layout>
  
  @if (session('access.denied'))
  <div class="alert alert-danger">
    {{ session('access.denied') }}
  </div>
  @endif

  @if (session('message'))
  <div class="alert alert-success">
    {{ session('message') }}
  </div>
  @endif
  
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-start me-5">
          <h1 class="fw-light mb-5 text-light"> <strong>LA TUA NUOVA ZONA DI COMFORT</strong></h1>
        </div>
      </div>
    </div>
  </header>
  
  <section class="container-fluid my-5 ">
    <div class="row justify-content-center">
      @foreach ($articles as $article)
      <div class="col-12 col-md-4 d-flex justify-content-center mb-3 ">
        
        <article class="lit shadow" id="card ">
          <img  class="card-img-top img-tran" src="https://picsum.photos/200" >
          <div class="card-body">
            <h6 class="card-title">{{ $article->user->name }}</h6>
            <h2 class="card-title">{{ Str::limit(" $article->title", 16, '') }}</h2>
            <p class="card-text">{{ Str::limit("$article->description", 15, '...') }}</p>
            <p class="card-text">{{ $article->price }}</p>
            <p class="my-2 d-flex justify-center" href="#">Pubblicato il: {{ $article->created_at->format('d/m/Y') }}</p>
            <a class="me-3 text-dark" href="#">Categoria: {{ $article->category->name }}</a>
            <a href="{{ route('showArticle', compact('article')) }}" class="btn btn-primary"> Leggi di più </a>
          </div>
        </article>
        
      </div>
      @endforeach       
    </div>  
  </section>
  
</x-layout>
