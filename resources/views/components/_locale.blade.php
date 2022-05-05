<form action="{{route('set_language_locale', $lang)}}", method="post" >
    @csrf
    <button type="submit" class="btn btn-link">
        <img src="/img/{{$nation}}.png"  class="w-75" alt="">
    </button>
</form>