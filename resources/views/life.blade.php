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
        display: none;
    }


    nav .logo-white{
        display: block !important;
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

    .content-img{
        border-radius: 15px;
    }

    .intro-section{
        margin-top: 0px;
    }

    .falling-letter{
        position: absolute;
        z-index: 0;
        width: auto !important;
    }

    .letter-1{
        top: 40%;
        left: -10vw !important;
    }

    .letter-2{
        top: -10%;
        right: -10vw !important;
    }

    .letter-3{
        bottom: 0px;
        left: -10vw !important;
    }

    .letter-4{
        bottom: 0px;
        right: -10vw !important;
    }

    .gold-branch{
        position: absolute;
        z-index: 0;
        width: auto !important;
    }

    .branch-1{
        top: 40%;
        right: -10vw !important;
    }

    .branch-2{
        bottom: 0px;
        left: -10vw !important;
    }

    .intro-section{
        position: relative;
    }
</style>
@endpush

@section('content')
<section class="section section-experiences">
    <img class="life-background" src="{{ asset('img/life-background.png') }}" alt="">

    <p class="special-welcome decorative">Día con día ponemos todo nuestro esfuerzo en hacer sentir a cada uno de nuestros invitados como en casa.</p>

    <div class="display-title text-center fade-eff" style="top: 75%;">
        <h1 class="display-3">La Vida <br>Wellness Center</h1>
        <p>by Hacienda Catrina Hotel Boutique & Spa</p>
    </div>
</section>

<section class="section intro-section">
    <div class="container">
        <div class="row position-relative">
            <img class="gold-branch branch-1 parallax" data-rellax-speed="2" src="{{ asset('img/gold-branch-2.svg') }}" alt="">
            

            <div class="col-md-3 parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/experience-1.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Travesías que promuevan el reprogramar el cuerpo y la mente.</p>
            </div>

            <div class="col-md-5 offset-xl parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/experience-2.jpg') }}" alt="" width="100%" class="mb-3">
            </div>

            <div class="col-md-3 offset-md-1 offset-big parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/experience-3.jpg') }}" alt="" width="100%" class="mb-3">
                <p>En La Vida Wellness Center podrás tener disfrutar de travesías para relajar, reconectar y energizar  con guía y respaldo de profesionales de la salud que impactarán de manera positiva en tus hábitos y estilo de vida para volver al origen y recuperar la conciencia que dia a dia vamos olvidando en el ajetreo de nuestros tiempos.</p>
            </div>
        </div>

        <div class="row offset-md position-relative">
            <img class="falling-letter letter-1 parallax" data-rellax-speed="4" src="{{ asset('img/letter-1.png') }}" alt="">
            <img class="falling-letter letter-2 parallax" data-rellax-speed="-2" src="{{ asset('img/letter-2.png') }}" alt="">

            <div class="col-md-6 offset-big parallax" data-rellax-speed="4">
                <img class="content-img" src="{{ asset('img/experience-4.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Recupera consciencia desde el centro y el sentido de LA VIDA</p>
            </div>

            <div class="col-md-3 offset-md-3 parallax" data-rellax-speed="-2">
                <img class="content-img" src="{{ asset('img/experience-5.jpg') }}" alt="" width="100%" class="mb-3">
            </div>
        </div>

        <div class="row position-relative">
            <div class="col-md-8 offset-md-2 parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/experience-6.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Somos anfitriones de bienestar para sensibilizar.</p>
            </div>

            <div class="col-md-8 offset-md-1 parallax" data-rellax-speed="-4">
                <img class="content-img" src="{{ asset('img/experience-7.png') }}" alt="" width="100%" class="mb-3">
            </div>

            <img class="gold-branch branch-2 parallax" data-rellax-speed="2" src="{{ asset('img/gold-branch-1.svg') }}" alt="">
        </div>

        <div class="row offset-md position-relative">
            <img class="falling-letter letter-3 parallax" data-rellax-speed="2" src="{{ asset('img/letter-3.png') }}" alt="">
            <img class="falling-letter letter-4 parallax" data-rellax-speed="1" src="{{ asset('img/letter-4.png') }}" alt="">

            <div class="col-md-6 offset-big parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/experience-4.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Generamos un verdadero cambio para relajar, reconectar y energizar.</p>
            </div>

            <div class="col-md-6 parallax" data-rellax-speed="4">
                <img class="content-img" src="{{ asset('img/experience-8.jpg') }}" alt="" width="100%" class="mb-3">
                <p>para alcanzar el máximo potencial emocional.</p>
            </div>
        </div>
    </div>
</section>

<section id="travesias" class="section section-experiences">
    <div class="overlay"></div>
    <img class="life-background" src="{{ asset('img/life-background.png') }}" alt="">

    <p class="special-welcome decorative">Día con día ponemos todo nuestro esfuerzo en hacer sentir a cada uno de nuestros invitados como en casa.</p>

    <div class="display-title text-center">
        <h1 class="display-3">Travesías</h1>
        <p>by Hacienda Catrina Hotel Boutique & Spa</p>
    </div>
</section>

<section class="section intro-section">
    <div class="container">
        <div class="row position-relative">
            <img class="gold-branch branch-1 parallax" data-rellax-speed="2" src="{{ asset('img/gold-branch-2.svg') }}" alt="">
            

            <div class="col-md-3 parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/spa-1.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Queremos que hagan suya Hacienda Catrina, que disfruten de todos los detalles de auténtido lujo mexicano que elegimos en cada uno los espacios y momentos en lo que estarán con nosotros, diseñados y elegidos con la calidez, amabilidad y sentido de hospitalidad con orgullo y tradición que nos caracteriza a nuestra gente y a nuestro país.</p>
            </div>

            <div class="col-md-3 offset-md-3 offset-xl parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/gallery-spa-2.jpg') }}" alt="" width="100%" class="mb-3">
            </div>

            <div class="col-md-3 offset-big parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/gallery-spa-3.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Recupera consciencia desde el centro y el sentido de LA VIDA</p>
            </div>
        </div>

        <div class="row offset-md position-relative">
            <img class="falling-letter letter-3 parallax" data-rellax-speed="2" src="{{ asset('img/letter-3.png') }}" alt="">
            <img class="falling-letter letter-4 parallax" data-rellax-speed="1" src="{{ asset('img/letter-4.png') }}" alt="">

            <div class="col-md-3 offset-big parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/spa-7.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Equipado y cómodo dentro del hotel.</p>
            </div>

            <div class="col-md-6 offset-md-3 parallax" data-rellax-speed="4">
                <img class="content-img" src="{{ asset('img/spa-8.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Reserva para tus traslados más cómodos</p>
            </div>
        </div>
    </div>
</section>

<section id="gimnasio" class="section section-experiences">
    <div class="overlay"></div>
    <img class="life-background" src="{{ asset('img/life-background.png') }}" alt="">

    <p class="special-welcome decorative">Día con día ponemos todo nuestro esfuerzo en hacer sentir a cada uno de nuestros invitados como en casa.</p>

    <div class="display-title text-center">
        <h1 class="display-3">Gimnasio</h1>
        <p>by Hacienda Catrina Hotel Boutique & Spa</p>
    </div>
</section>


<section class="section intro-section">
    <div class="container">
        <div class="row position-relative">
            <img class="gold-branch branch-1 parallax" data-rellax-speed="2" src="{{ asset('img/gold-branch-2.svg') }}" alt="">
            

            <div class="col-md-3 parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/spa-1.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Queremos que hagan suya Hacienda Catrina, que disfruten de todos los detalles de auténtido lujo mexicano que elegimos en cada uno los espacios y momentos en lo que estarán con nosotros, diseñados y elegidos con la calidez, amabilidad y sentido de hospitalidad con orgullo y tradición que nos caracteriza a nuestra gente y a nuestro país.</p>
            </div>

            <div class="col-md-3 offset-md-3 offset-xl parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/gallery-spa-2.jpg') }}" alt="" width="100%" class="mb-3">
            </div>

            <div class="col-md-3 offset-big parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/gallery-spa-3.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Recupera consciencia desde el centro y el sentido de LA VIDA</p>
            </div>
        </div>

        <div class="row offset-md position-relative">
            <img class="falling-letter letter-3 parallax" data-rellax-speed="2" src="{{ asset('img/letter-3.png') }}" alt="">
            <img class="falling-letter letter-4 parallax" data-rellax-speed="1" src="{{ asset('img/letter-4.png') }}" alt="">

            <div class="col-md-3 offset-big parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/spa-7.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Equipado y cómodo dentro del hotel.</p>
            </div>

            <div class="col-md-6 offset-md-3 parallax" data-rellax-speed="4">
                <img class="content-img" src="{{ asset('img/spa-8.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Reserva para tus traslados más cómodos</p>
            </div>
        </div>
    </div>
</section>

<section id="temazcal" class="section section-experiences">
    <div class="overlay"></div>
    <img class="life-background" src="{{ asset('img/life-background.png') }}" alt="">

    <p class="special-welcome decorative">Día con día ponemos todo nuestro esfuerzo en hacer sentir a cada uno de nuestros invitados como en casa.</p>

    <div class="display-title text-center">
        <h1 class="display-3">Temazcal</h1>
        <p>by Hacienda Catrina Hotel Boutique & Spa</p>
    </div>
</section>


<section class="section intro-section">
    <div class="container">
        <div class="row position-relative">
            <img class="gold-branch branch-1 parallax" data-rellax-speed="2" src="{{ asset('img/gold-branch-2.svg') }}" alt="">
            

            <div class="col-md-3 parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/spa-1.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Queremos que hagan suya Hacienda Catrina, que disfruten de todos los detalles de auténtido lujo mexicano que elegimos en cada uno los espacios y momentos en lo que estarán con nosotros, diseñados y elegidos con la calidez, amabilidad y sentido de hospitalidad con orgullo y tradición que nos caracteriza a nuestra gente y a nuestro país.</p>
            </div>

            <div class="col-md-3 offset-md-3 offset-xl parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/gallery-spa-2.jpg') }}" alt="" width="100%" class="mb-3">
            </div>

            <div class="col-md-3 offset-big parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/gallery-spa-3.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Recupera consciencia desde el centro y el sentido de LA VIDA</p>
            </div>
        </div>

        <div class="row offset-md position-relative">
            <img class="falling-letter letter-3 parallax" data-rellax-speed="2" src="{{ asset('img/letter-3.png') }}" alt="">
            <img class="falling-letter letter-4 parallax" data-rellax-speed="1" src="{{ asset('img/letter-4.png') }}" alt="">

            <div class="col-md-3 offset-big parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/spa-7.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Equipado y cómodo dentro del hotel.</p>
            </div>

            <div class="col-md-6 offset-md-3 parallax" data-rellax-speed="4">
                <img class="content-img" src="{{ asset('img/spa-8.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Reserva para tus traslados más cómodos</p>
            </div>
        </div>
    </div>
</section>

<section id="productos" class="section section-experiences">
    <div class="overlay"></div>
    <img class="life-background" src="{{ asset('img/life-background.png') }}" alt="">

    <p class="special-welcome decorative">Día con día ponemos todo nuestro esfuerzo en hacer sentir a cada uno de nuestros invitados como en casa.</p>

    <div class="display-title text-center">
        <h1 class="display-3">Productos</h1>
        <p>by Hacienda Catrina Hotel Boutique & Spa</p>
    </div>
</section>


<section class="section intro-section">
    <div class="container">
        <div class="row position-relative">
            <img class="gold-branch branch-1 parallax" data-rellax-speed="2" src="{{ asset('img/gold-branch-2.svg') }}" alt="">
            

            <div class="col-md-3 parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/spa-1.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Queremos que hagan suya Hacienda Catrina, que disfruten de todos los detalles de auténtido lujo mexicano que elegimos en cada uno los espacios y momentos en lo que estarán con nosotros, diseñados y elegidos con la calidez, amabilidad y sentido de hospitalidad con orgullo y tradición que nos caracteriza a nuestra gente y a nuestro país.</p>
            </div>

            <div class="col-md-3 offset-md-3 offset-xl parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/gallery-spa-2.jpg') }}" alt="" width="100%" class="mb-3">
            </div>

            <div class="col-md-3 offset-big parallax" data-rellax-speed="2">
                <img class="content-img" src="{{ asset('img/gallery-spa-3.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Recupera consciencia desde el centro y el sentido de LA VIDA</p>
            </div>
        </div>

        <div class="row offset-big position-relative">
            <img class="falling-letter letter-3 parallax" data-rellax-speed="2" src="{{ asset('img/letter-3.png') }}" alt="">
            <img class="falling-letter letter-4 parallax" data-rellax-speed="1" src="{{ asset('img/letter-4.png') }}" alt="">

            <div class="col-md-3 parallax" data-rellax-speed="1">
                <img class="content-img" src="{{ asset('img/spa-7.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Equipado y cómodo dentro del hotel.</p>
            </div>

            <div class="col-md-6 offset-md-3 parallax" data-rellax-speed="4">
                <img class="content-img" src="{{ asset('img/spa-8.jpg') }}" alt="" width="100%" class="mb-3">
                <p>Reserva para tus traslados más cómodos</p>
            </div>
        </div>
    </div>
</section>

<div class="section white-scroll-text">
    @include('layouts.utilities.scroll_text')
    @include('layouts.utilities.cta_video')
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
