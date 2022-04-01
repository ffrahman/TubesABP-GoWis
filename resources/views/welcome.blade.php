<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Go Wis | Welcome</title>
    <link class="rounded-circle" rel="icon" href="{{asset('img/gowis.jpg')}}">

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    
</head>
<body>
        <!--Main Navigation-->
    <header>
    {{-- @include('layout.navbar') --}}
    <!-- Navbar -->
    @include('layout.carousel')
  
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
    <div>
        <!--Section: Content-->
        <section>
          <div class="container">
        <div class="row">
            <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="{{ asset('img/lembang-zoo.jpg') }}" class="img-fluid" />
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Lembang PARK & ZOO</strong></h4>
            <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <p><strong>...</strong></p>
            <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
                nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
                alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
            </div>
        </div>
      </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <div class="container">
        <h4 class="mb-5"><strong>Destinasi Wisata Lembang</strong></h4>

        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                    src="{{ asset('img/begonia.jpg') }}"
                    class="img-fluid"
                />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
                <div class="card-body">
                <h5 class="card-title">Taman Begonia</h5>
                <p class="card-text">
                    Tak hanya keindahan bunga yang menarik, taman ini juga memiliki daya tarik pada tata letak taman yang sangat menarik.
                </p>
                <a href="#!" class="btn btn-primary">Lihat Wisata</a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                    src="{{ asset('img/cikole.jpg') }}"
                    class="img-fluid"
                />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
                <div class="card-body">
                <h5 class="card-title">Grafika Cikole Lembang</h5>
                <p class="card-text">
                    Tempat wisata Lembang ini menjadi salah satu obyek wisata yang baru dan sangat instagramable. Moms bisa melakukan foto bersama dengan rumah hobbit yang hits di sosial media.
                </p>
                <a href="#!" class="btn btn-primary">Lihat Wisata</a>
                </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                    src="{{ asset('img/kawah-putih.jpg') }}"
                    class="img-fluid"
                />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
                <div class="card-body">
                <h5 class="card-title">Kawah Putih Ciwidey</h5>
                <p class="card-text">
                    Kawah Putih Ciwidey juga jadi salah satu rekomendasi tempat wisata Lembang terfavorit.
                </p>
                <a href="#!" class="btn btn-primary">Lihat Wisata</a>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        
  <!-- Pills navs -->
  

<!-- Copyright -->

@include('layout.footer')
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
</body>
</html>