@extends('Dashboard.layouts.main')

@section('content')
<div class="container d-flex flex-wrap justify-content-center m-auto">
    <section class="text-center">
      <br>
        <h4 class="mb-5"><strong>Post Berita</strong></h4>

        <div class="row" >
          <div class="col-lg-8 col-md-12 mb-4" style="width: 30rem">
            <hr>
            <div class="card">
                <h5 class="card-title mb-3">{{ $news->title }}</h5>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid" />
                <a href="#">
                  <div class="mask" style="background-color: rgba(255, 255, 0, 0.15);"></div>
                </a>
              </div>
              <div class="card-body" style="background-color: rgba(255,253,208,1)">
                <p class="card-text">
                  {{ $news->excerpt }}
                </p>
              </div>
            </div>
            <hr>
            <a href="/dashboard/news" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>

            <a href="/dashboard/news/{{ $news->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>

            <form action="/dashboard/news/{{ $news->id }}" method="post" class="d-inline">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Data akan dihapus!')"><span data-feather="trash-2"></span>Delete</button>
            </form>

          </div>
      </section>
</div>
@endsection
