@extends('layout.main')


@section('content')
    <div class="container">
        <article>
            <h2>{{ $berita->nama }}</h2>
            <img src="{{ $berita->image }}" alt="image berita" class="mb-3 mt-3">
            
                {!! $berita->isi !!}
            
        </article>
    
        <a href="/berita">Back</a>
    </div>
@endsection