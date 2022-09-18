<header>
    <a class="logo-header" href="{{ route('home') }}"><img src={{"/images/dc-logo.png"}} alt=""></a>
<nav>
    <ul>
        {{-- foreach per gli elementi della navbar --}}
        {{-- @foreach($navbar as $key => $item)
        <li> <a href="{{route($key)}}"> {{$item}} </a></li>
        @endforeach --}}
        <li> <a href="{{ route('home') }}">Home</a> </li>
        <li><a href="{{ route('characters') }}">Characters</a></li>
        <li><a href="{{ route('comics') }}">Comics</a></li>
        <li><a href="{{ route('movies') }}">Movies</a></li>
        <li><a href="{{ route('tv') }}">Tv</a></li>
        <li><a href="{{ route('games') }}">Games</a></li>
        <li><a href="{{ route('vedeos') }}">Vedeos</a></li>
        <li><a href="{{ route('fans') }}">Fans</a></li>
        <li><a href="{{ route('news') }}">News</a></li>
    </ul>
</nav>
</header>