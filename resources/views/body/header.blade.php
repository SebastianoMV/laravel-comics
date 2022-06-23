<header>

  <div class="container">
    <img src="{{ asset('img/dc-logo.png') }}" alt="">
    <div>
      <ul>
        <li>
          <a class="{{Route::currentRouteName() == 'characters' ? 'active' : ''}}" href="{{ route('characters') }}">Characters</a>
        </li>
        <li>
          <a class="{{Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{ route('comics') }}">Comics</a>
        </li>
        <li>
          <a class="{{Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{ route('movies') }}">Movies</a>
        </li>
        <li>
          <a class="{{Route::currentRouteName() == 'tv' ? 'active' : ''}}" href="{{ route('tv') }}">TV</a>
        </li>
        <li>
          <a href="{{ route('comics') }}">games</a>
        </li>
        <li>
          <a href="{{ route('comics') }}">collectibles</a>
        </li>
        <li>
          <a href="{{ route('comics') }}">videos</a>
        </li>
        <li>
          <a href="{{ route('comics') }}">fans</a>
        </li>
        
      </ul>
    </div>
  </div>

</header>