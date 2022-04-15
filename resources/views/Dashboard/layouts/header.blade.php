<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Go Wis</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/"><i class="bi bi-layout-text-sidebar-reverse"></i> Welcome Go Wis</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <div class="d-flex align-items-center">
            <button type="button" class="btn btn-light px-3 me-2">
              <a style="text-decoration: none" href="/login">Login <i class="bi bi-box-arrow-in-left"></i></a>
            </button>
          </div>
          @endauth
        </ul>
      </div>
    </div>
  </header>
  
  {{-- <form action="/logout" method="POST">
  @csrf
  <button type="submit" class="nav-link bg-dark  px-3 border-0 "> Logout <span data-feather="log-out"></span></button>
  </form> --}}