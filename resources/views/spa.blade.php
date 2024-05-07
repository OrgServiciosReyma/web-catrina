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
</style>
@endpush

@section('content')
<section class="section section-experiences fade-eff">
    <p class="special-welcome decorative">Día con día ponemos todo nuestro esfuerzo en hacer sentir a cada uno de nuestros invitados como en casa.</p>

    <div class="display-title text-center">
        <h1 class="display-3">Hacienda Catrina <br>es Hospitalidad</h1>
    </div>
</section>

<section class="section intro-section" style="height: 450vh">
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
                <img src="{{ asset('img/spa-2.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Disfruta de la vista en nuestro Snack Bar</p>
            </div>
        </div>

        <div class="row offset-md">
            <div class="col-md-6 offset-big parallax" data-rellax-speed="4">
                <img src="{{ asset('img/spa-3.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Jacuzzi y alberca exclusiva para huéspedes</p>
            </div>

            <div class="col-md-3 offset-md-3 parallax" data-rellax-speed="-2">
                <img src="{{ asset('img/spa-4.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Nuestra cava, un espacio privado para reuniones</p>
            </div>
        </div>

        <div class="row offset-md">
            <div class="col-md-5 offset-md-2 offset-big parallax" data-rellax-speed="1">
                <img src="{{ asset('img/spa-5.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Rodeado de exuberantes jardines, un paraíso de descanso</p>
            </div>

            <div class="col-md-4 offset-md-1 parallax" data-rellax-speed="-4">
                <img src="{{ asset('img/spa-6.jpg') }}" alt="" width="100%" class="mb-3">
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

    <div class="container std-p position-relative">
        <div class="owl-carousel gallery-carousel">
            <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/gallery-spa-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/gallery-spa-2.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/gallery-spa-3.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/gallery-spa-4.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/gallery-spa-5.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/gallery-spa-6.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/gallery-spa-7.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/gallery-spa-8.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="gallery-card">
                    <img src="{{ asset('img/gallery-spa-9.jpg') }}" alt="">
                </div>
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
