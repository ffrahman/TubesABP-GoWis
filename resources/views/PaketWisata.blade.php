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

<div class="text-bold text-center mb-5">
  <h2>Detail Wisata</h2>
</div>

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
      <p>paket 2 hari:</p>
      <p>Villa (4 tempat tidur), makan pagi, akses masuk wisata</p>
      <p><a class="btn btn-secondary" href="/form-paket"><i class="bi bi-whatsapp"></i> Contact Now!</a></p>
    </div>
  </div>
@endsection
{{-- <div class="container d-flex flex-wrap justify-content-center m-auto">
    @foreach ($beritas as $berita)
    <div class="card col-md-4 col-sm-6 mb-3 m-3" style="width: 20rem; position: relative;">
      <img src="{{ $berita->gambar }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $berita->judul }}</h5>
        <p class="card-text">{{ $berita->excerpt }}</p>
      </div>
      <a href="/berita/{{ $berita->slug }}" class="btn btn-primary">Read more</a>
    </div>
    @endforeach
  </div> --}}