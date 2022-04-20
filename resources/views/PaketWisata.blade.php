@extends('layout.main')

@section('title')
  Paket Wisata
@endsection

@section('content')

  @include('layout.slide-rekomendasi')

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
{{-- <hr class="my-5" /> --}}

<style>
    .coba{
        width: 20rem;
        position: relative;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .coba1{
        background-color: rgba(192, 130, 130, 0.7);

    }
    .coba11:hover{
        background-color: rgba(255, 255, 255, 0.527);
        box-shadow: 0 0 10px rgba(182, 111, 111, 0.5);
        transform-origin: center;
        transform: scale(1.3);
    }

    .rounded-circle:hover{
        background-color: rgba(255, 255, 255, 0.527);
        /* pop up hover */
        box-shadow: 0 0 10px rgba(182, 111, 111, 0.5);
        transform-origin: center;
        transform: scale(1.3);
    }
</style>

<div class="text-bold text-center mb-5">
    <br>
  <h2>Detail Wisata</h2>
</div>

<div class="container d-flex flex-wrap justify-content-center m-auto text-center">
  @foreach ($pakets as $paket)
  <!-- Three columns of text below the carousel -->
  <div class="col-md-4 col-sm-6 mb-3 m-3 text coba" style="background-image: url({{ asset('storage/' . $paket->image) }});">


            <img class="bd-placeholder-img rounded-circle justify-content-center text-center" width="140" height="140" src="{{ asset('storage/' . $paket->image) }}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title></title>
            <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
        </img>
        <div class="coba1">
            <h2 class="mb-5 text-light ">{{ $paket->nama }}</h2>
        </div>

      <div style="color: rgb(63, 58, 48)" class="coba11">
        <strong>
            <p>Harga paket Rp. {{ $paket->harga }} </p>
            <p>paket {{ $paket->durasi }} hari:</p>
            <p>{{ $paket->deskripsi }}</p>
        </strong>
      </div>
      <p><a class="btn btn-secondary" href="https://wa.wizard.id/b18f79"><i class="bi bi-whatsapp"></i> Contact Now!</a></p>

    </div>
    @endforeach
  </div>
</div>
@endsection
