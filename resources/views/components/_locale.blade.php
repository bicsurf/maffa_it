<<<<<<< HEAD
<form action="{{ route("set_language_locale", $lang) }}" method="post">
    @csrf
    <button type="submit" class="nav-link" style="background-color:transparent; border:none;">
        <span class="flag-icon flag-icon-{{ $nation }}"></span>
    </button>
=======
<form action="{{route('set_language_locale', $lang)}}", method="post" >
    @csrf
    <button type="submit" class="nav-link " style="background-color:transparent; boder:none;">
        <img src="/img/{{$nation}}.png"  class="w-25" alt="">
</button>
>>>>>>> ade27a9964a8135dd5d258d7a8bd1978fd7e5710
</form>