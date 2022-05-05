<x-layout>
    <div class="login">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-5">
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input">
                            <label for="examplecheck1" class="form-check-label">Ricordati di me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a class="text-light btn btn-primary my-3" href="{{ route('register') }}">Registrati</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
