@extends('Dashboard.layouts.main')

@section('content')
<div class="container d-flex flex-wrap justify-content-center m-auto text-center">
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
        <a href="/dashboard/paketWisata" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
      </div>
    </div>
  </div>
@endsection