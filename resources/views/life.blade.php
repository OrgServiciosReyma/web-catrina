@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">

<style>
    body{
        background-color: #1E1E1E !important;
        color: #fff !important;
    }

    .section{
        background-color: #1E1E1E !important;
    }

    nav .logo{
        mix-blend-mode:difference;
    }

    nav a{
        color: #fff;
    }

    nav.scroll{
        background-color: #1E1E1E !important;
    }

    footer{
        position: relative;
        z-index: 99;
    }

    .offset-xl{
        margin-top: 50vh;
    }

    .offset-big{
        margin-top: 300px;
    }

    .offset-md{
        margin-top: 150px;
    }

    img{
        border-radius: 15px;
    }

    .life-background{
        width: 100%;
        height: auto;
        position: absolute;
        top: 0px
    }

    .intro-section{
        margin-top: 50vh;
    }
</style>
@endpush

@section('content')
<img class="life-background" src="{{ asset('img/life-background.png') }}" alt="">
<section class="section section-experiences fade-eff">
    <p class="special-welcome decorative">Día con día ponemos todo nuestro esfuerzo en hacer sentir a cada uno de nuestros invitados como en casa.</p>

    <div class="display-title text-center">
        <h1 class="display-3">La Vida <br>Wellness Center</h1>
        <p>by Hacienda Catrina Hotel Boutique & SPA</p>
    </div>
</section>

<section class="section intro-section" style="height: 470vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 parallax" data-rellax-speed="1">
                <img src="{{ asset('img/spa-1.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Queremos que hagan suya Hacienda Catrina, que disfruten de todos los detalles de auténtido lujo mexicano que elegimos en cada uno los espacios y momentos en lo que estarán con nosotros, diseñados y elegidos con la calidez, amabilidad y sentido de hospitalidad con orgullo y tradición que nos caracteriza a nuestra gente y a nuestro país.</p>
            </div>

            <div class="col-md-3 offset-md-3 offset-xl parallax" data-rellax-speed="2">
                <img src="{{ asset('img/gallery-spa-2.jpg') }}" alt="" width="100%" class="mb-3">
            </div>

            <div class="col-md-3 offset-big parallax" data-rellax-speed="2">
                <img src="{{ asset('img/gallery-spa-3.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Recupera consciencia desde el centro y el sentido de LA VIDA</p>
            </div>
        </div>

        <div class="row offset-md">
            <div class="col-md-6 offset-big parallax" data-rellax-speed="4">
                <img src="{{ asset('img/gallery-spa-4.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Jacuzzi y alberca exclusiva para huéspedes</p>
            </div>

            <div class="col-md-3 offset-md-3 parallax" data-rellax-speed="-2">
                <img src="{{ asset('img/gallery-spa-5.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Nuestra cava, un espacio privado para reuniones</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 offset-md-2 parallax" data-rellax-speed="1">
                <img src="{{ asset('img/alt-terraza.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Rodeado de exuberantes jardines, un paraíso de descanso</p>
            </div>

            <div class="col-md-4 offset-md-1 parallax" data-rellax-speed="-4">
                <img src="{{ asset('img/main-img-1.png') }}" alt="" width="100%" class="mb-3">
                <p>El escenario ideal para tus eventos más importantes</p>
            </div>
        </div>

        <div class="row offset-md">
            <div class="col-md-3 offset-big parallax" data-rellax-speed="1">
                <img src="{{ asset('img/spa-7.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Equipado y cómodo dentro del hotel.</p>
            </div>

            <div class="col-md-6 offset-md-3 parallax" data-rellax-speed="4">
                <img src="{{ asset('img/spa-8.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Reserva para tus traslados más cómodos</p>
            </div>
        </div>
    </div>
</section>

<div class="section white-scroll-text">
    @include('layouts.utilities.scroll_text')
</div>
@endsection

@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.gallery-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    items:3,
  });
</script>
@endpush
