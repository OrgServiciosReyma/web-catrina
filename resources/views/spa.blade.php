@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section section-intro mb-0">
    <img class="left-img parallax" data-rellax-speed="2" src="{{ asset('img/section-img-3.png') }}" alt="">
    <h5 class="special-welcome decorative parallax" data-rellax-speed="4"> Día con día ponemos todo nuestro esfuerzo en hacer sentir a cada uno de nuestros invitados como en casa</h5>

    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <img class="intro-title" src="{{ asset('img/spa-title.svg') }}" alt="">
        </div>

        <div class="col-md-4 offset-md-6">
            <p class="intro-description">Queremos que hagan suya Hacienda Catrina, que disfruten de todos los detalles de auténtido lujo mexicano que elegimos en cada uno los espacios y momentos en lo que estarán con nosotros, diseñados y elegidos con la calidez, amabilidad y sentido de hospitalidad con orgullo y tradición que nos caracteriza a nuestra gente y a nuestro país.</p>
        </div>
      </div>

      <div class="row info-data-row">
        <div class="col-md-6 offset-md-3 text-center">
          <div class="d-flex justify-content-center text-center">
            <div class="info-data">
              <h4 class="h1">{{ Carbon\Carbon::now()->format('d') }}</h4>
              <p>{{ Carbon\Carbon::now()->translatedFormat('M Y') }}</p>
            </div>

            <div class="info-data">
              <h4 class="h1">{{ Carbon\Carbon::now()->format('h:i') }} <span class="small-add">{{ Carbon\Carbon::now()->format('a') }}</span></h4>
              <p>hora local</p>
            </div>

            <div class="info-data">
              <h4 class="h1">14º</h4>
              <p>despejado</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="d-flex align-items-center justify-content-sm-center justify-content-end">
            <img class="me-5" src="{{ asset('img/logo-header-1.png') }}" alt="" height="70">
            <img class="me-5" src="{{ asset('img/logo-header-6.png') }}" alt="" height="70">
            <img src="{{ asset('img/logo-header-2.png') }}" alt="" height="70">
          </div>
        </div>
      </div>
    </div>

    <img class="right-img parallax" data-rellax-speed="-1" src="{{ asset('img/section-img-4.png') }}" alt="">

    <img class="decorative-root root-1 parallax" data-rellax-speed="-2" src="{{ asset('img/root-1.svg') }}" alt="">
    <img class="decorative-root root-2 parallax" data-rellax-speed="-2" src="{{ asset('img/root-2.svg') }}" alt="">
  </section>

  <section id="amenidades" class="section section-places position-relative std-p pb-5" style="margin-bottom: 100vh;">
    <div class="container">
        <p class="special-welcome decorative parallax" data-rellax-speed="4">Bienvenido querido amigo. Preparate para el mejor momento de tu semana.</p>

        <div class="row align-items-end pb-5 mb-5">
            <div class="col-md-4">
                <div class="title-group btm-mr">
                    <p class="wide">Hacienda Catrina es</p>
                    <h2 class="display-3">Orgullo y Tradición</h2>
                </div>
        
                <ul class="list-unstyled list-attributes pe-5">
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Snack Bar.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Alberca, Chapoteadero y Jacuzzi</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Cava</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Jardines y Lagos</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Ruedo</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Gimnasio.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Servicio de PickUp.</li>
                </ul>
            </div>
        
            <div class="col-md-7 offset-md-1">
                <div class="owl-carousel gallery-carousel">
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spa-gallery-1.jpg') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spa-gallery-2.jpg') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spa-gallery-3.jpg') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spa-gallery-4.jpg') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spa-gallery-5.jpg') }}" alt="">
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section">
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
