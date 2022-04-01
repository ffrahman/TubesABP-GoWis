<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Go Wis | Paket Wisata</title>

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
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
</head>
<body>
    @include('layout.navbar')
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
              aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
              </svg>
    
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Rekomendasi Paket 1</h1>
                  <p>Some representative placeholder content for the first slide of the carousel.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
              </svg>
    
              <div class="container">
                <div class="carousel-caption">
                  <h1>Rekomendasi Paket 2</h1>
                  <p>Some representative placeholder content for the second slide of the carousel.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" />
              </svg>
    
              <div class="container">
                <div class="carousel-caption text-end">
                  <h1>Rekomendasi Paket 3</h1>
                  <p>Some representative placeholder content for the third slide of this carousel.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    
    
        <!-- Marketing messaging and featurettes
      ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
    
        <div class="container marketing">
    
          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/begonia.jpg') }}"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title></title>
                <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
              </img>
    
              <h2>Paket Wisata Begonia</h2>
              <p>Harga paket Rp 300.000,00</p>
              <p>paket 2 hari:
                <br>Villa (4 tempat tidur), makan pagi, akses masuk wisata</br>
              </p>
              <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
            </div><!-- /.col-lg-4 -->


            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/asia-africa.jpg') }}"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title></title>
                <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
              </img>
    
              <h2>Paket Wisata Asia Africa</h2>
              <p>Harga paket Rp 500.000,00</p>
              <p>paket 4 hari:
                <br>Villa (5 tempat tidur), makan pagi dan siang, akses masuk wisata</br>
              </p>
              <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/ciater.jpg') }}"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title></title>
                <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
              </img>
    
              <h2>Paket Wisata Ciater</h2>
              <p?>Harga paket Rp.350.000,00</p>
              <p>paket 2 hari
                <br>pemandian air hangat 24 jam, Villa(4 tempat tidur), akses masuk wisata</br>
              </p>
              <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

          </div><!-- /.row -->
          <br>
          <br>
          <div class="row">
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/cikole.jpg') }}"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title></title>
                <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
              </img>
    
              <h2>Paket Wisata Cikole</h2>
              <p>Harga paket Rp.900.000,00</p>
              <p>Paket 7 hari
                <br>Villa (4 tempat tidur), makan pagi, akses masuk tempat wisata</br>
              </p>
              <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/kawah-putih.jpg') }}"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title></title>
                <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
              </img>
    
              <h2>Paket Wisata Kawah Putih</h2>
              <p>Harga paket Rp.350.000,00</p>
              <p>Paket 2 hari
                <br>Villa (4 tempat tidur), fotografer</br>
              </p>
              <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ asset('img/lembang-zoo.jpg') }}"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title></title>
                <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
              </img>
    
              <h2>Paket Wisata Lembang Zoo</h2>
              <p>Harga paket Rp.250.000,00</p>
              <p>Paket 2 hari
                <br>Villa (4 tempat tidur), akses masuk wisata</br>
              </p>
              <p><a class="btn btn-secondary" href="/form-paket">Beli paket &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
    
    
          <!-- START THE FEATURETTES -->
    
    
          <!-- /END THE FEATURETTES -->
    
        </div><!-- /.container -->
    
    
        <!-- FOOTER -->
        @include('layout.footer')
      </main>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>