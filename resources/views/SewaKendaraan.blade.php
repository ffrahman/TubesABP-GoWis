@extends('layout.main')

@section('title')
  Sewa Kendaraan
@endsection

<style>
  .ma{
    /* background-color: gainsboro; */
    background-image: url("{{ asset('img/bck.jpg') }}");
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 75%;
  }
  h1{
    font-size: 30px;
    font-family: 'Roboto', sans-serif;
  }
  h3{
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
  }
</style>
@section('content')
  <div class="ma">
    <div class="text-center"> 
      <br>
      <h1>Rental kendaraan Lembang</h1>
      <div class="container">
        <h3>Rental kendaraan Lembang murah akan lebih mudah jika memesannya secara online di Go Wis. Kami menyediakan sewa mobil dan motor lepas kunci. Tersedia rental mobil dan motor dengan durasi harian, mingguan hingga sewa mobil bulanan.</h3>
        <img class="mot" src="{{ asset('img/motor/motor.webp') }}" alt="">
        <img class="mob" src="{{ asset('img/mobil/rental-mobil.png.webp') }}" alt="">
      </div>
    </div>
  </div>
  <div class="container d-flex flex-wrap justify-content-center m-auto">
      <section class="text-center">
        <hr>
          <h4 class="mb-5"><strong>Sewa Mobil & Motor</strong></h4>
  
          <div class="row" >
            @foreach ($sewas as $sewa)
            <div class="col-lg-4 col-md-12 mb-4" style="width: 20rem">
              <hr>
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="{{ asset('storage/' . $sewa->image) }}" class="img-fluid" />
                  <a href="#">
                    <div class="mask" style="background-color: rgba(255, 255, 0, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body" style="background-color: rgba(255,253,208,1)">
                  <h5 class="card-title">{{ $sewa->nama_kendaran }}</h5>
                  <p class="card-text">
                    Harga mulai dari Rp. {{ $sewa->harga }}
                  </p>
                  <p class="card-text">
                    Spesifikasi :
                  </p>
                  <p>
                    <i class="fas fa-gas-pump"></i> : full
                  </p>
                  <p>
                    <i class="fas fa-briefcase-medical"></i> : P3K
                  </p>
                  <p>
                    <i class="bi bi-people-fill"></i> : {{ $sewa->penumpang }} orang
                  </p>
                  <p><a class="btn btn-primary" href="https://wa.wizard.id/b18f79"><i class="bi bi-whatsapp"></i> Contact Now!</a></p>
                </div>
              </div>
              <hr>
            </div>
          @endforeach
        </section>
  </div>
@endsection