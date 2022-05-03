<form action="{{route('set_language_locale', $lang)}}", method="post" >
    @csrf
    <button type="submit" class="nav-link">
        <img src="/img/{{$nation}}.png"  class="w-25" alt="">
</button>
</form>