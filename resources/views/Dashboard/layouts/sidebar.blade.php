<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/news*') ? 'active' : '' }}" href="/dashboard/news">
            <span data-feather="file-text"></span>
            Post Berita
          </a>
          <a class="nav-link {{ Request::is('dashboard/paket*') ? 'active' : '' }}" href="/dashboard/paket">
            <span data-feather="file-text"></span>
            Post Paket Wisata
          </a>
          <a class="nav-link {{ Request::is('dashboard/sewa*') ? 'active' : '' }}" href="/dashboard/sewa">
            <span data-feather="file-text"></span>
            Post Sewa
          </a>
        </li>
      </ul>


    </div>
</nav>
