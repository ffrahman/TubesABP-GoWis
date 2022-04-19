@extends('Dashboard.layouts.main')

<style>
        body{margin-top:20px;}
    .counter {
    background: #100028;
    height: 840px;
    padding-top: 380px;
    overflow: hidden;
    }

    .counter__content {
    padding: 0px 50px;
    }

    .counter__item {
    background: #1a083d;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    height: 255px;
    width: 255px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    text-align: center;
    position: relative;
    z-index: 1;
    }
    .counter__item::before {
    position: absolute;
    left: -1px;
    bottom: -2px;
    height: 636px;
    width: 636px;
    border-left: 1px solid #333333;
    border-top: 1px solid #333333;
    content: "";
    z-index: -1;
    }
    .counter__item.second__item {
    margin-top: -185px;
    }
    .counter__item.second__item:before {
    left: -316px;
    bottom: -65px;
    border-right: 1px solid #333333;
    border-bottom: 1px solid #333333;
    border-left: none;
    border-top: none;
    }
    .counter__item.four__item {
    margin-top: -185px;
    }
    .counter__item.four__item:before {
    left: -380px;
    bottom: -380px;
    border-right: 1px solid #333333;
    border-bottom: 1px solid #333333;
    border-left: none;
    border-top: none;
    }
    .counter__item.third__item:before {
    left: -65px;
    bottom: -317px;
    }

    .counter__item__text {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }
    .counter__item__text h2 {
    font-size: 60px;
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 6px;
    margin-top: 18px;
    }
    .counter__item__text p {
    color: #ffffff;
    margin-bottom: 0;
    }
    .counter__item__text .icon{
    color:#FF0000;
    }
</style>

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
  </div>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<section class="counter">
    <div class="container">
        <div class="counter__content">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <a href="/dashboard/paket">
                            <div class="counter__item__text">
                                <i class="icon fas fa-list-alt fa-3x"></i>
                                <h2 class="counter_num">{{ $paket }}</h2>
                                <p>Post Paket</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item second__item">
                        <a href="/dashboard/sewa">
                            <div class="counter__item__text">
                                <i class="icon bi bi-speedometer fa-3x"></i>
                                <h2 class="counter_num">{{ $sewa }}</h2>
                                <p>Post Rental</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item third__item">
                        <a href="/dashboard/news">
                            <div class="counter__item__text">
                                <i class="icon fas bi bi-newspaper fa-3x"></i>
                                <h2 class="counter_num">{{ $news }}</h2>
                                <p>Post Berita</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item four__item">
                        <div class="counter__item__text">
                            <i class="icon fas bi bi-person-circle fa-3x"></i>
                            <h2 class="counter_num">{{ $user }}</h2>
                            <p>Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
