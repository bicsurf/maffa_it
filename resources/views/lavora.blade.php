<x-layout>
    <div class="lavoraShow">
        <div class="container-fluid h-100">
            <div class="row d-flex h-100 justify-content-end align-items-center me-4">
                <div class="col-12 text-end">
                    <h5>IL LAVORO A PORTATA DI UN CLICK</h5>
                    <h1 class="fw-light">Dove potrai svolgere il tuo lavoro?</h1>
                    <p class="lead">Puoi lavorare da remoto, ovunque tu ti trovi in Italia.<br>
                        Basta avere una connessione internet, da computer, tablet o telefono!
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="lavoraForm">
        <div class="container h-100">
            <div class="row d-flex h-100 align-items-center">
                <div class="col-12 col-md-5 text-start">
                    <img src="/img/logo.png" width="120" class="my-5">
                    <h5>COMPLETAMENTE DA REMOTO</h5>
                    <p class="lead">Siamo alla ricerca di te! 
                    </p>
                    
                </div>
                <div class="col-12 col-md-5 text-start" style="border:2px solid #0d6efd; border-radius:30px;">
                    <form method="POST" action="{{route('send.contact')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-4">Nome</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-4">Cognome</label>
                            <input type="text" name="surname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleDataList" class="form-label fs-4">Città di Domicilio</label>
                            <input class="form-control" name="city" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                            <option value="Milano">
                            <option value="Torino">
                            <option value="Bologna">
                            <option value="Bari">
                            <option value="Roma">
                            </datalist>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-4">Numero di Telefono</label>
                            <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fs-4">Indirizzo email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label fs-4">Carica CV</label>
                            <input class="form-control" name="cv" type="file" id="formFileMultiple" multiple>
                          </div>
                        <button type="submit" class="btn btn-primary m-2">Invia</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


</x-layout>