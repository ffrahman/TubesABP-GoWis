<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
        background-image: url('{{ asset('img/slide/dagobakery.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }
      .carousel-item:nth-child(3) {
        background-image: url('{{ asset('img/slide/Cikole.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 65vh;
        }
      }
      .gowis {
        font-family: 'Lato', sans-serif;
        font-weight: bold;
    }
    </style>

    {{-- @include('layout.navbarcarousel') --}}

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
                <h1 style="color: rgb(255, 251, 0)" class="mb-3">Selamat Datang di Go Wis</h1>
                <h5>Go wis adalah website pariwisata seputar Lembang</h5>
                <h5>Nikmati berbagai kemudahan dalam berwisata</h5>
                <h5 class="mb-4"></h5>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 style="color: rgb(255, 251, 0)" class="mb-3">Info Berita Seputar Destinasi Wisata Lembang</h1>
                <h5>"Pergi wisata dengan update info 
                  terbaru berita wisata Lembang untuk membantumu menemukan wisata yang sesuai dengan selera anda"</h5>
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href="/berita"
                  target="_blank"
                  role="button"
                  >Lihat Berita</a
                >
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
                <h2>Paket Wisata Murah Terlengkap</h2>
                <hr>
                <h3 style="color: rgb(255, 251, 0)">"Manfaatkan liburan kamu untuk 
                  melepaskan semua beban agar pikiran dan tubuh menjadi sehat kembali."</h3>
                <a
                  class="btn btn-outline-light btn-lg m-2"
                  href="/paketWisata"
                  target="_blank"
                  role="button"
                  >Lihat Paket Wisata</a
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