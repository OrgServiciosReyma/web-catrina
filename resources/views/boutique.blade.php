@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section section-boutique intro-section">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="display-title btm-mr text-center">
              <h1 class="display-1"><span class="line-detail"></span> Descanso y Placer</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="full-image-wrap boutique-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-8">
                    <p>Toma un descanso y recupera tu energía a través del relajante murmullo de agua, del contacto con nuestras raíces mexicanas y la calidez momento en familia, pareja o amigos.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pickup-badge">
        <p class="pickup-badge-title">Servicio de Pickup</p>
        <p class="mb-0">Hotel - Aeropuerto - Hotel</p>
    </div>

    <p class="special-welcome decorative">Con un diseno elegante y atemporal, el salon ofrece un ambiente acogedor y relajado, lo que lo convierte en el lugar pespecial.</p>
</section>

<section class="section offset-mr-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <p class="text-alt-color h5"><strong>Lo más importante son nuestros huéspedes</strong></p>
                <p>Las habitaciones, cuidadosamente restauradas con una perfecta acústica, combinan historia, elegancia y modernas comodidades, están equipadas con aire acondicionado, conexión Wi-Fi gratuito, TV por cable, conector para dispositivos y minibar. Se ofrece servicio a las habitaciones las 24 horas.</p>
            </div>

            <div class="col-md-6 offset-md-1">
              <div class="offset-mr-top">
                  <ul class="list-unstyled list-attributes mb-5">
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 2 Master Suite</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 7 Grand Class King</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 19 Grand Class Doble Queen</li>
                  </ul>

                  <h4 class="display-3 mb-0 mt-4">Check-in: 3:00 PM</h4>
                  <h4 class="display-3">Check-out: 12:00 PM</h4>
              </div>
                
            </div>
        </div>
    </div>
</section>

<section class="section std-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="wide">Habitaciones</p>

                <div class="room-collapse">
                    <button class="btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#masterSuite" aria-expanded="false" aria-controls="masterSuite">
                        Master Suite
                      </button>
                    
                    <div class="collapse" id="masterSuite">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="owl-carousel gallery-carousel">
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-1.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-2.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-3.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-4.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-1.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-3.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-2.png') }}" alt="">
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="row align-items-center mt-5 position-relative">
                            <a href="" class="btn btn-primary">Conoce más</a>

                            <div class="col-md-5">
                                <p class="text-alt-color h5"><strong>Lo más importante son nuestros huéspedes</strong></p>
                                <p>Las habitaciones, cuidadosamente restauradas con una perfecta acústica, combinan historia, elegancia y modernas comodidades, están equipadas con aire acondicionado, conexión Wi-Fi gratuito, TV por cable, conector para dispositivos y minibar. Se ofrece servicio a las habitaciones las 24 horas.</p>
                            </div>

                            <div class="col-md-2 offset-md-2">
                                <ul class="list-unstyled list-attributes">
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Servicio 24/7</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Tina de Baño</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Cama King Size</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="room-collapse">
                    <button class="btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#GranClassDobleQueen" aria-expanded="false" aria-controls="GranClassDobleQueen">
                      Gran Class Doble Queen
                    </button>
                    
                    <div class="collapse" id="GranClassDobleQueen">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="owl-carousel gallery-carousel">
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-1.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-2.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-3.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-4.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-1.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-3.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-2.png') }}" alt="">
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="row align-items-center mt-5 position-relative">
                            <a href="" class="btn btn-primary">Conoce más</a>

                            <div class="col-md-5">
                                <p class="text-alt-color h5"><strong>Lo más importante son nuestros huéspedes</strong></p>
                                <p>Las habitaciones, cuidadosamente restauradas con una perfecta acústica, combinan historia, elegancia y modernas comodidades, están equipadas con aire acondicionado, conexión Wi-Fi gratuito, TV por cable, conector para dispositivos y minibar. Se ofrece servicio a las habitaciones las 24 horas.</p>
                            </div>

                            <div class="col-md-2 offset-md-2">
                                <ul class="list-unstyled list-attributes">
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Servicio 24/7</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Tina de Baño</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Cama King Size</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="room-collapse">
                    <button class="btn-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#GranClassKing" aria-expanded="false" aria-controls="GranClassKing">
                        Gran Class King
                    </button>
                    
                    <div class="collapse" id="GranClassKing">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="owl-carousel gallery-carousel">
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-1.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-2.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-3.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-4.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-1.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-3.png') }}" alt="">
                                  </div>
                                </div>
                                <div class="item">
                                  <div class="gallery-card">
                                      <img src="{{ asset('img/banner-2.png') }}" alt="">
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="row align-items-center mt-5 position-relative">
                            <a href="" class="btn btn-primary">Conoce más</a>
                            <div class="col-md-5">
                                <p class="text-alt-color h5"><strong>Lo más importante son nuestros huéspedes</strong></p>
                                <p>Las habitaciones, cuidadosamente restauradas con una perfecta acústica, combinan historia, elegancia y modernas comodidades, están equipadas con aire acondicionado, conexión Wi-Fi gratuito, TV por cable, conector para dispositivos y minibar. Se ofrece servicio a las habitaciones las 24 horas.</p>
                            </div>

                            <div class="col-md-2 offset-md-2">
                                <ul class="list-unstyled list-attributes">
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Servicio 24/7</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Tina de Baño</li>
                                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Cama King Size</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section">
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
    items:4,
  });
</script>
@endpush
