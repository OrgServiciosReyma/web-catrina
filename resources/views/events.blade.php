@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section section-business intro-section">
    <div class="container">
        <img src="{{ asset('img/wedding-title.svg') }}" class="img-fluid" alt="">
        
        <p class="special-welcome decorative parallax" data-rellax-speed="-3">diseño, creación y celebración</p>
       
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <img class="main-img img-fluid parallax" data-rellax-speed="4" src="{{ asset('img/wedding-img.png') }}" alt="">
            </div>

            <div class="col-md-3">
                <p class="ps-2 description">En el corazón del Puerto Interior encuentras un espacio del México tradicional sin tener que ir más lejos. Con toda la calidad y atención al detalle en cada evento. Haz que la magia de tu evento comience desde una cena rompehielo, hasta la tornaboda en nuestro restaurante La Frida.</p>
            </div>
        </div>
    </div>
    <img class="decorative-root root-3 parallax" data-rellax-speed="1" src="{{ asset('img/root-3.svg') }}" alt="">
</section>

<section class="section std-p">
    <div class="container">
        <div class="row btm-mr">
            <div class="col-md-6">
                <div class="title-group">
                    <p class="wide">Da el sí a Hacienda Catrina</p>
                    <h2 class="display-3">Tu boda con toque de auténtico lujo mexicano</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="pickup-badge parallax" data-rellax-speed="3">
        <p class="pickup-badge-title">Servicio de Pickup</p>
        <p>Hotel - Aeropuerto - Hotel</p>
    </div>

    <div class="full-image-wrap business-banner"></div>
    
    <div class="container std-p">
        <div class="row">
            <div class="col-md-3 offset-md-4">
                <p>Imagina la recepción en medio de nuestro lago, para luego caminar entre nuestros jardines hacia el imponente ruedo, donde todos tus invitados aplaudirán a tu entrada. Es hora de aventar el ramo al iniciar el atardecer y disfrutar de una velada inolvidable. Descansa en nuestra Villa Catrina para el día siguiente desayunar en compañía de tus seres queridos en nuestro restaurante La Frida al pie de su terraza rodeada de árboles y el dulce sonido del del trinar de lo pájaros.</p>
            </div>

            <div class="col-md-3 offset-md-1">
                <ul class="list-unstyled list-attributes">
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Recepción en patio central para tus invitados</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Ruedo con capacidad de 500 personas</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Jadines con capacidad de hasta 600 personas.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Lago para ceremonia civil.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Villa catrina privada para novios.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 28 habitaciones para tus invitados más íntimos</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-gastro">
    <img class="decorative-root root-1" src="{{ asset('img/root-1.svg') }}" alt="">
    <img class="gastro-plate plate-1 parallax" data-rellax-speed="2" src="{{ asset('img/gastro-1.png') }}" alt="">
    <img class="gastro-plate plate-2 parallax" data-rellax-speed="-2" src="{{ asset('img/gastro-2.png') }}" alt="">
    <img class="gastro-plate plate-3 parallax" data-rellax-speed="2"src="{{ asset('img/gastro-3.png') }}" alt="">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="display-title btm-mr text-center">
            <h1 class="display-2">Catering de Eventos</h1>
            <p class="display-3 decorative">Recinto Orangerie</p>
          </div>
        </div>

        <div class="col-md-3 offset-md-6 position-relative">
            <p><strong>Sabores que acompañan a tus invitados en esta experiencia inolvidable.</strong></p>
            <p>Contamos con nuestro servicio premium de catering de eventos servido por nuestra marca Recinto Orangerie, garantía de sabor y calidad en todos nuestros procesos.</p> 
            <p>Agenda tu cita con nuestra asesora para que pueda guiarte en todo el diseño del evento, desde la prueba de menú, selección de mobiliario, elección de los platillos y la reservación de tu habitación.</p>

          <a href="" class="btn btn-primary">Agenda tu Cita</a>
        </div>
      </div>
    </div>
</section>

<section class="section section-places position-relative std-p offset-mr-top">
    <div class="container">
        <p class="special-welcome decorative parallax" data-rellax-speed="4">Bienvenido querido amigo. Preparate para el mejor momento de tu semana.</p>

        <div class="row align-items-end">
            <div class="col-md-4">
                <div class="title-group btm-mr">
                    <p class="wide">Hacienda Catrina es Celebración</p>
                    <h2 class="display-3">Eventos Inolvidables</h2>
                </div>
        
                <ul class="list-unstyled list-attributes pe-5">
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Bodas.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Cumpleaños.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Bautizos.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Fiestas de Fin de Año.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Premiaciones.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Festivales Empresariales.</li>
                </ul>
            </div>
        
            <div class="col-md-7 offset-md-1">
                <div class="owl-carousel gallery-carousel">
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/wedding-gallery-1.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/wedding-gallery-2.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/wedding-gallery-3.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/wedding-gallery-4.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/wedding-gallery-5.png') }}" alt="">
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section">
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
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
  });
</script>
@endpush