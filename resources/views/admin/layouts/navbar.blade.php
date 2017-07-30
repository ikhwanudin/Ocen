<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <div class="container"> -->
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">posts</a>
            </li>
        </ul>
        <form class="my-2 my-lg-0">
          {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
          <div class="typeahead__container">
            <div class="typeahead__field">

                <span class="typeahead__query">
                    <input class="js-typeahead" 
                           placeholder="Search" 
                           name="q"
                           type="search"
                           autofocus
                           autocomplete="off">
                </span>
                <span class="typeahead__button">
                    <button class="btn btn-default" type="submit">
                        <span class="typeahead__search-icon"></span>
                    </button>
                </span>

            </div>
        </div>
        </form>
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}" class="btn btn-link">Login</a></li>
                <li><a href="{{ route('register') }}" class="btn btn-link">Register</a></li>
            @else
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a class="dropdown-item" href="{{ route('dashboard')}}">Dashboard</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @endif
        </ul>
        <!-- </form> -->
    </div>
  <!-- </div> -->
</nav>
