@extends('layout.main')


@section('content')
    <div class="container">
        <article>
            <h2>{{ $berita->judul }}</h2>
            <img src="{{ $berita->gambar }}" alt="">
            
                {!! $berita->isi !!}
            
        </article>
    
        <a href="/berita">Back</a>
    </div>
@endsection