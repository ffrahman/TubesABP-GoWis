@extends('layout.main')


@section('content')
    <div class="container">
        <article>
            <h2>{{ $news->title }}</h2>
            <img src="{{ asset('storage/' . $news->image) }}" alt="image berita" class="mb-3 mt-3">

                {!! $news->content !!}

        </article>

        <a href="/news">Back</a>
    </div>
@endsection
