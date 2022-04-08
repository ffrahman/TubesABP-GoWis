@extends('layout.main')


@section('content')
    <div class="container">
        <article>
            <h2>{{ $berita->judul }}</h2>
            
                {!! $berita->isi !!}
            
        </article>
    
        <a href="/berita">Back</a>
    </div>
@endsection