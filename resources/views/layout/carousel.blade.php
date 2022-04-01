<!--Main Navigation-->

    <style>
      /* Carousel styling */
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 100vh;
      }

      .carousel-item:nth-child(1) {
        background-image: url('{{ asset('img/slide/susu.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }
      .carousel-item:nth-child(2) {
        background-image: url('{{ asset('img/slide/perahu3.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }
      .carousel-item:nth-child(3) {
        background-image: url('{{ asset('img/lembang-zoo.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #introCarousel {
          margin-top: -58.59px;
        }
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 65vh;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
      .lo:hover {
        color: aqua !important;
      }

      .gowis {
        font-family: 'Lato', sans-serif;
        font-weight: bold;
    }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank" href="/">
          <strong class="gowis mx-3">Go Wis</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="/paketWisata">Paket Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sewaKendaraan" rel="nofollow"
                target="_blank">Sewa Kendaraan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/berita" target="_blank">Berita</a>
            </li>
          </ul>

          <div>
              <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li style="margin-top:2px;min-height:1px;min-width:1px;" id="gtmDC-login-button">
                <a class="auth-modal-toggle btn btn-primary ms-2 me-1" data-auth-modal-tab="sign-in" href="/login">Login</a>
                </li>
          </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
      </ol>

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
                <h5 class="mb-4">Best & free guide of responsive web design</h5>
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                  role="button"
                  rel="nofollow"
                  target="_blank"
                  >Start tutorial</a
                >
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href="https://mdbootstrap.com/docs/standard/"
                  target="_blank"
                  role="button"
                  >Download MDB UI KIT</a
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h2>You can place here any content</h2>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div
            class="mask"
            {{-- style="
              background: linear-gradient(
                45deg,
                rgba(29, 236, 197, 0.7),
                rgba(91, 14, 214, 0.7) 100%
              );
            " --}}
          >
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h2>And cover it with any mask</h2>
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href="https://mdbootstrap.com/docs/standard/content-styles/masks/"
                  target="_blank"
                  role="button"
                  >Learn about masks</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Carousel wrapper -->

  <!--Main Navigation-->