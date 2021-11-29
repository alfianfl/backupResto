@extends('layouts.main')

@section('container')
<div class="home">
    <div class="landing img-fluid">
        <div class="container">
            <div class="row">
                <div class="col-6 ms-3">
                    <h1>Laboriosam dolor sequi ut iure</h1>
                    <p>Laboriosam dolor sequi ut iure</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h2>Download<img src="./img/download.png" height="30"></h2>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-2">
                    <img src="./img/qr.png" height="150">
                    <div class="vl"></div>
                </div>
                <div class="col-sm-2">
                    <div class="buttondwonload">
                        <a class="btn btn-google" href="#" title="GooglePlay"> <span class="ml-4 mt-2 d-block"> Google Play</span> </a>
                        <a class="btn btn-appstore" href="#" title="AppsStore"><span class="ml-4 mt-2 d-block">Apps Store</span></a>
                        <a class="btn btn-computer" href="#" title="Computer"><span class="">Your Computer</span></a>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
    <div class="layanan px-lg-5 px-3 ">
        <h2 class="subtittle mb-5">Layanan </h2>
        <div class="item-layanan d-flex justify-content-center flex-wrap mx-lg-5 mx-2">
                <div class="image-content item-1">
                    <img src="{{'../img/2.svg'}}" alt="">
                </div>
                <div class="dot">
                    <img src="{{'../img/dot.svg'}}" alt="">
                    <div>
                        <img src="{{'../img/line.svg'}}" alt="">
                    </div>
                </div>
                <div class="content-layanan">
                    <div class="content-item">
                        <h2 >Dine-in</h2>
                        <p >Quis doloribus porro adipisci doloremque dolores consequatur iste sit. Incidunt consequatur voluptatem aliquid et autem.<p>
                    </div>
                </div>
        </div>
        <div class="item-layanan d-flex justify-content-end flex-wrap mt-5 mx-lg-5 mx-2">
            <div class="content-layanan d-flex justify-content-end">
                <div class="content-item text-right">
                    <h2 >Delivery</h2>
                    <p >Quis doloribus porro adipisci doloremque dolores consequatur iste sit. Incidunt consequatur voluptatem aliquid et autem.<p>
                </div>
            </div>
            <div class="dot">
                <img src="{{'../img/dot.svg'}}" alt="">
            </div>
            <div class="image-content item-2">
                <img src="{{'../img/1.svg'}}" alt="">
                
            </div>
        </div>
        <div class="item-layanan d-flex justify-content-center flex-wrap mt-5 mx-lg-5 mx-2">
            <div class="image-content">
                <img src="{{'../img/3.svg'}}" alt="">
            </div>
            <div class="dot">
                <img src="{{'../img/dot.svg'}}" alt="">
            </div>
            <div class="content-layanan">
                <div class="content-item">
                    <h2 >Pick-up</h2>
                    <p >Quis doloribus porro adipisci doloremque dolores consequatur iste sit. Incidunt consequatur voluptatem aliquid et autem.<p>
                </div>
            </div>
        </div>
    </div>
    <div class="fitur px-lg-5 px-3 mt-5">
        <h2 class="subtittle my-5">Fitur</h2>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{'../img/History Detail.png'}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{'../img/History Done.png'}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{'../img/Dashboard.png'}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{'../img/Cart Payment.png'}}" alt="">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
</div>

@endsection
