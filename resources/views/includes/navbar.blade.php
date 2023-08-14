<div>
  <nav class="navbar p-4 navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        @include('includes.logo')
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
          @include('includes.logo')
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              @if(Auth::check() || Auth::viaRemember())
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Meu perfil - {{ Auth::user()->name }}</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Editar perfil</a></li>
                </ul>
                @else
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Criar conta</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Fazer login</a></li>
              </li>
              @endif
              <li class="nav-item">
                <a class="nav-link" href="#">Fale conosco</a>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>  
</div>