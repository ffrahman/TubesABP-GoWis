<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Go Wis | Sewa Kendaraan</title>

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
</head>
<body>
    @include('layout.navbar')
    <header>
        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('{{ asset('img/slide/sss.png') }}');
            height: 440px;"
        >
          
        </div>
        <!-- Background image -->
      </header>
        <!--Main layout-->
        <br>
        <br>
        <br>
        <div class="container">
            <section class="text-center">
                <h4 class="mb-5"><strong>Sewa Mobil & Motor</strong></h4>
        
                <div class="row" >
                  <div class="col-lg-4 col-md-12 mb-4" style="width: 20rem">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('img/mobil/avanza.webp') }}" class="img-fluid" />
                        <a href="/form-sewa">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Toyota Avanza</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk of the
                          card's content.
                        </p>
                        <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('img/mobil/brio.webp') }}" class="img-fluid" />
                        <a href="/form-sewa">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Honda Brio</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk of the
                          card's content.
                        </p>
                        <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('img/mobil/pajeroo.webp') }}" class="img-fluid" />
                        <a href="/form-sewa">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Pajero Sport</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk of the
                          card's content.
                        </p>
                        <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('img/mobil/inova.webp') }}" class="img-fluid" />
                        <a href="/form-sewa">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Toyota Inova</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk of the
                          card's content.
                        </p>
                        <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                      </div>
                    </div>
                  </div>
        
        
                <div class="row">
                  <div class="col-lg-4 col-md-12 mb-4" style="width: 20rem">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('img/motor/klx.webp') }}" class="img-fluid" />
                        <a href="/form-sewa">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Kawasaki KLX</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk of the
                          card's content.
                        </p>
                        <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('img/motor/nmax.webp') }}" class="img-fluid" />
                        <a href="/form-sewa">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Yamaha Nmax</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk of the
                          card's content.
                        </p>
                        <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('img/motor/scoopy.webp') }}" class="img-fluid" />
                        <a href="/form-sewa">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Honda Scoopy</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk of the
                          card's content.
                        </p>
                        <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6 mb-4" style="width: 20rem">
                    <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{ asset('img/motor/supra.webp') }}" class="img-fluid" />
                        <a href="/form-sewa">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Honda Supra X</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk of the
                          card's content.
                        </p>
                        <a href="/form-sewa" class="btn btn-primary">Sewa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
      <!--Section: Content-->
      <!-- Copyright -->
<footer class="bg-light text-lg-start">
    @include('layout.footer')
  </footer>
  <!--Footer-->
  <!-- Copyright -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    </body>
</html>