<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


        <li class="nav-item {{ Route::is("index") ? "active" : "" }}">
          <a class="nav-link" href="{{ route("index") }}">Home</a>
        </li>


        {{-- <li class="nav-item {{ Route::currentRouteName() == "home" : "active" : "" }}">
          <a class="nav-link" href="{{ route("home") }}">Home</a>
        </li> --}}


        {{-- <li class="nav-item {{ request()->route()->getName() == "home" ? "active" : "" }}">
          <a class="nav-link" href="{{ route("home") }}">Home</a>
        </li> --}}

        
        <li class="nav-item {{ Route::is("about") ? "active" : "" }}">
          <a class="nav-link" href="{{ route("about") }}">About</a>
        </li>

        
        <li class="nav-item {{ Route::is("contact") ? "active" : "" }}">
          <a class="nav-link" href="{{ route("contact") }}">Contact</a>
        </li>
        
        
        </ul>
    </div>
  </nav>