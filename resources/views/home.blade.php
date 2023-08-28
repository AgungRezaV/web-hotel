@extends('layouts.app')

{{-- CSS  --}}
<link href="css/css.css" rel="stylesheet" type="text/css">

{{-- Font Awesome --}}
<script src="https://kit.fontawesome.com/6dd0d33a7f.js" crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

@section('content')
<!-- Swiper -->
<div class="swiper mySwiper rounded shadow">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="{{asset('img/hotels1.jpg')}}" alt="Hotel 1">
        </div>

        <div class="swiper-slide">
            <img src="{{asset('img/hotels2.jpg')}}" alt="Hotel 2">
        </div>

        <div class="swiper-slide">
            <img src="{{asset('img/hotels3.jpg')}}" alt="Hotel 3">
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

{{-- Jenis Kamar Section --}}
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Jenis Kamar</h2>

<div class="container">
    <div class="row">
        {{-- First Card --}}
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                {{-- Image Swipper JS --}}
                <div class="swiper mySwiper rounded shadow">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('img/reg/kamar_reg_1.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/reg/kamar_reg_2.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/reg/kamar_reg_3.jpg')}}" alt="Testing" class="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="card-body">
                    <h5>Standar</h5>
                    <h6 class="mb-4">Rp 500.000/Malam</h6>
                    <div class="features mb-4">
                        <h6>Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">2 Kasur</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">1 Kamar Mandi</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">AC</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">TV</span>
                    </div>

                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="/input" class="btn btn-success btn-md text-white shadow-none">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        {{-- Second --}}
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                {{-- Image Swipper JS --}}
                <div class="swiper mySwiper rounded shadow">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('img/del/deluxe_1.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/del/deluxe_2.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/reg/kamar_reg_3.jpg')}}" alt="Testing" class="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="card-body">
                    <h5>Deluxe</h5>
                    <h6 class="mb-4">Rp 800.000/Malam</h6>
                    <div class="features mb-4">
                        <h6>Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">2 Kasur</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">1 Kamar Mandi</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">AC</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">TV</span>
                    </div>

                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="/input" class="btn btn-success btn-md text-white shadow-none">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        {{-- Third --}}
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                {{-- Image Swipper JS --}}
                <div class="swiper mySwiper rounded shadow">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            {{-- <img src="{{asset('img/fam/family_1.jpg')}}" alt="Testing" class=""> --}}
                            <video height="235" controls>
                                <source src="{{asset('video/video_1.mp4')}}" type="video/mp4">
                            </video>
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/fam/family_2.jpg')}}" alt="Testing" class="">
                        </div>
                
                        <div class="swiper-slide">
                            <img src="{{asset('img/fam/family_3.jpg')}}" alt="Testing" class="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="card-body">
                    <h5>Family</h5>
                    <h6 class="mb-4">Rp 1.200.000/Malam</h6>
                    <div class="features mb-4">
                        <h6>Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Outdoor</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">2 Kasur</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">1 Kamar Mandi</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">AC</span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">TV</span>
                    </div>

                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                    </div>
                    <a href="/input" class="btn btn-success btn-md text-white shadow-none">Pesan Sekarang</a>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- Tentang Kami Section --}}
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Tentang Kami</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-light rounded">
            <h1 class="text-center">
                Alamat
            </h1>
            <iframe class="w-100" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2088.5127696503882!2d115.21827706447199!3d-8.824774042479445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd25cc661212a01%3A0x63d7607350cf7576!2sHilton%20Bali%20Resort!5e0!3m2!1sen!2sid!4v1692891006954!5m2!1sen!2sid" loading="lazy"></iframe>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="p-4 rounded mb-4 bg-light">
                <h5>Telepon Kami</h5>
                <a href="" class="badge d-inline-block text-dark fs-6 mb-2 p-2 text-decoration-none">
                    <i class="fa-solid fa-phone"></i> +1-800-HILTONS
                </a>
            </div>

            <div class="p-4 rounded mb-4 bg-light">
                <h5>Email Kami</h5>
                <a href="" class="badge text-dark fs-6 mb-2 p-2 text-decoration-none">
                    <i class="fa-solid fa-envelope"></i> hilton@email.com
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endsection