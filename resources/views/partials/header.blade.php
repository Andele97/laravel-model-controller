<header>
  <nav>
    <ul>
      <li class=" {{ Route::currentRouteName() === 'home' ? 'active' : '' }} ">
      <a href=" {{ route('home')}} ">Home</a>
      </li>
      <li class=" {{ Request::route()->getName() === 'about' ? 'active' : '' }} ">
        <a href=" {{ route('about') }} ">About Us</a>
      </li>
      <li class=" {{ Request::route()->getName() === 'movies' ? 'active' : '' }} ">
        <a href=" {{ route('movies') }} ">Movies</a>
      </li>
    </ul>
  </nav>
</header>