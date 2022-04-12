@extends('layout.main')

@section('title')
  Berita
@endsection

<style>
  .aa{
    float: right;
  }
</style>

@section('content')
<br>
  <h4 class="mb-5 my-y text-center"><strong>Latest posts</strong></h4>
  <div class="container mb-3" style="max-width: 1000px;">
    @foreach ($beritas as $berita)
    <hr>
      
    <div class="row g-3">
      <div class="col-md-4">
        <img src="{{ $berita->gambar }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $berita->judul }}</h5>
          <p class="card-text">{{ $berita->excerpt }}</p>
          {{-- last update laravel --}}
          {{-- <p class="card-text"><small class="text-muted">Last updated {{ $berita->updated_at->diffForHumans() }}</small></p> --}}
          <p class="card-text"><small class="text-muted">Last updated   {{ $berita->updated_at->diffForHumans() }}</small></p>
        </div>
        <div class="col text-right aa">
          <button type='button' class='btn btn-primary center-block'><a href="/berita/{{ $berita->slug }}" class="text-decoration-none text-light aa">Read more</a></button>
        </div>
      </div>
    </div>
    <hr>
    @endforeach
  </div>
  @endsection
  