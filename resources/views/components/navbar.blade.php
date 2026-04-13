<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        @auth
      <div class="navbar-nav col-lg-4 justify-content-start">
        <span class="navbar-brand">Welcome {{Auth::user()->name}}</span>
    </div>
    @endauth
    
    
    @auth
    <ul class="navbar-nav col-lg-2 justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="">Articles</a>
        </li>
        </ul>

    <ul class="navbar-nav col-lg-2 justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="">Add new</a>
            </li>
        </ul>
        <ul class="navbar-nav col-lg-4 justify-content-end">
            <li class="nav-item">
                <form action="{{route('logout')}}" method="POST">
                <button class="nav-link" type="submit">Logout</button>
                </form>
            </li>
        </ul>
    @endauth  
        
    @guest
<ul class="navbar-nav col-lg-5 justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="">Articles</a>
        </li>
        </ul>

    </ul>
        <ul class="navbar-nav col-lg-5 justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
        </ul>
    @endguest
    
    </div>

  </div>
</nav>