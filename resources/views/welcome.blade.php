@extends('layout.main')

@section('title')
  Welcome
@endsection

@section('content')
@include('layout.carousel')
<div class="container">
    <h1>Mau Liburan Kemana Kalian ?</h1>
    <hr>
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
                Sesuai namanya, Lembang Park and Zoo mengombinasikan taman wisata yang 
                luas dengan kebun binatang. Jadi pengunjung tidak hanya bisa bertemu 
                dengan binatang saja, tetapi beraktivitas santai dengan berbagai fasilitas 
                yang tersedia di Lembang Park and Zoo, dari naik kano di danau buatan, naik kuda, 
                hingga berkeliling area Lembang Park and Zoo yang luas dengan scooter.
            </p>
            <p><strong></strong></p>
            <p class="text-muted">
                Di Lembang Park and Zoo juga tersedia banyak restoran dan kafe yang istimewa, 
                karena sambil makan kamu bisa melihat berbagai satwa di balik dinding kaca. 
                Ada juga Neko Cat Cafe yang merupakan kafe di mana kamu juga bisa bermain dengan 
                banyak kucing lucu. Selain itu, Lembang Park and Zoo juga punya tempat-tempat 
                bermain untuk anak-anak, dari Playground outdoor, Kereta Mini, Storyland yang 
                punya banyak wahana seru, hingga sekolah riding untuk anak.
            </p>
        </div>
    </div>
</div>


  

<hr class="my-5" />
<div class="container d-flex flex-wrap justify-content-center m-auto">
    <section class="text-center">
        <h4 class="mb-5"><strong>Info Latest</strong></h4>

        <div class="row" >
            @foreach ($beritas as $berita)
            <div class="col-lg-4 col-md-12 mb-4" style="width:26rem">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{ $berita->image }}" class="img-fluid" />
                <a href="#">
                    <div class="mask" style="background-color: rgba(255, 255, 0, 0.15);"></div>
                </a>
                </div>
                <div class="card-body" style="background-color: rgba(255,253,208,1)">
                <h5 class="card-title">{{ $berita->judul }}</h5>
                <p class="card-text">
                    Harga mulai dari Rp. {{ $berita->excerpt }}
                </p>
                <a href="/berita/{{ $berita->slug }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <hr>
            </div>
        @endforeach
        </section>
</div>
@endsection