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

<div class="container d-flex flex-wrap justify-content-center m-auto text-center">
  @foreach ($paketwisatas as $paket)
  <!-- Three columns of text below the carousel -->
  <div class="col-md-4 col-sm-6 mb-3 m-3" style="width: 20rem; position: relative;">
    <hr>
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ $paket->gambar }}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title></title>
        <rect width="100%" height="100%" fill="#77 7" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
      </img>
    
      <h2>{{ $paket->nama_paket }}</h2>
      <p>Harga paket Rp. {{ $paket->harga }} </p>
      <p>paket {{ $paket->durasi }} hari:</p>
      <p>{{ $paket->deskripsi }}</p>
      <p><a class="btn btn-secondary" href="https://wa.wizard.id/b18f79"><i class="bi bi-whatsapp"></i> Contact Now!</a></p>
      <hr>
    </div>
    @endforeach
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