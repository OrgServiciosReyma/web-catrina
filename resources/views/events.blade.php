@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section section-events intro-section">
    <img class="decorative-root root-3 parallax" data-relax-speed="3" src="{{ asset('img/root-3.svg') }}" alt="">
    <div class="container position-relative">
        <p class="decorative special-welcome parallax" data-relax-speed="5">Bienvenido querido amigo. Preparate para el mejor momento de tu semana.</p>
        
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid parallax" data-relax-speed="4" src="{{ asset('img/event-1.png') }}" alt="">
            </div>
            <div class="col-md-6 ps-5">
                <div class="title-group btm-mr">
                    <h2 class="display-3">Nuestro Estilo</h2>
                    <p class="decorative display-3">Te invita al lujo</p>
                </div>

                <p class="title-p mb-5">Hacienda Catrina es un escondite íntimo con su estilo e influencias profundamente arraigadas en su herencia cultural.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 offset-md-3 ps-5">
                <p>El Catrina Lounge es un sofisticado y elegante espacio que ofrece una experiencia gastronómica y de bebida única y refinada. Con un diseño elegante y atemporal, el salón ofrece un ambiente acogedor y relajado.</p>
                <p>Esto lo convierte en el lugar perfecto para una noche de fiesta con colegas, una velada romántica o una ocasión especial.</p>
            </div>

            <div class="col-md-5 ps-5">
                <img src="{{ asset('img/event-2.png') }}" class="img-fluid parallax" data-relax-speed="-2" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section section-enterprise std-p offset-mr-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="display-title btm-mr">
                    <p class="display-3 decorative">Eventos</p>
                    <h1 class="display-1">Empresariales</h1>
                </div>
            </div>

            <div class="col-md-5 offset-md-4">
                <p class="title-p">En el corazón de la hacienda, el patio central, un espacio bañado por la luz natural, sus arcos majestuosos y su fuente de talavera y cantera que alberga una magnolia y árboles de olivo, el lugar perfecto para consentirte y dejarte llevar por los colores, olores y sonidos de la fuente</p>
            </div>
        </div>

        <img src="{{ asset('img/business-1.png') }}" class="business-image business-1 parallax" data-relax-speed="1" alt="imagen 1">
        <img src="{{ asset('img/business-2.png') }}" class="business-image business-2 parallax" data-relax-speed="2" alt="imagen 2">
    </div>
</section>

<section class="section std-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel restaurant-carousel">
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/banner-restaurant.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/banner-restaurant.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/banner-restaurant.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row align-items-center mt-5">
            <div class="col-md-5 offset-md-1">
                <div class="title-group">
                    <p class="wide">Catrina Insider</p>
                    <h2 class="display-3">Restaurante <br>La Frida</h2>
                    <p class="decorative display-3">el lugar para ser</p>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <p>Toma un descanso y recupera tu energía a través del relajante murmullo de agua, del contacto con nuestras raíces mexicanas y la calidez momento en familia, pareja o amigos.</p>
                <a href="" class="btn-link">Este es un link de prueba ></a>
            </div>
        </div>
    </div>
    
</section>

<section class="section-terraza">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3">
          <p>Toma un descanso y recupera tu energía a través del relajante murmullo de agua, del contacto con nuestras raíces mexicanas y la calidez momento en familia, pareja o amigos.</p>
        </div>
        <div class="col-md-6 offset-md-3">
          <div class="title-group text-end">
            <p class="wide">Catrina Insider</p>
            <h2 class="display-3">Terraza Bar</h2>
            <p class="decorative display-3">el lugar para ser</p>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="section section-social">
    <img class="falling-letter letter-1 parallax" data-relax-speed="2" src="{{ asset('img/letter-1.png') }}" alt="">
    <img class="falling-letter letter-2 parallax" data-relax-speed="-5" src="{{ asset('img/letter-2.png') }}" alt="">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('img/social-1.png') }}" class="img-fluid social-1 parallax" data-relax-speed="-1" alt="">
            </div>

            <div class="col-md-5 offset-md-1 mt-5">
                <div class="display-title btm-mr">
                    <p class="display-3 decorative">Eventos</p>
                    <h1 class="display-2">Sociales</h1>
                </div>

                <p class="title-p pe-5">En el corazón de la hacienda, el patio central, un espacio bañado por la luz natural, sus arcos majestuosos y su fuente de talavera y cantera que alberga una magnolia y árboles de olivo, el lugar perfecto para consentirte y dejarte llevar por los colores, olores y sonidos de la fuente</p>
            </div>

            <div class="col-md-3 mt-auto">
                <img src="{{ asset('img/social-2.png') }}" class="img-fluid social-2 parallax" data-relax-speed="-3" alt="">
            </div>
        </div>

        <div class="row align-items-end std-p">
            <div class="col-md-3 offset-md-1" style="z-index: 2;">
                <p><strong>Hacienda Catrina ofrece a las parejas un refugio con encanto para evadirse, con jardines románticos y espacios íntimos.</strong></p>
                <p>Ubicado en uno de los centros económicos más vibrantes del Bajío, nuestra Hacienda Catrina es una mezcla entre el estilo tradicional y contemporeaneo que hace de México un vibrante espacio para crear memorias.</p>
            </div>

            <div class="col-md-5 offset-md-3 table-details mt-5">
                <div class="d-flex align-items-center justify-content-between">
                    <p>Eventos empresariales</p>
                    <p class="h6">50-100 Personas</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p>Eventos pequeños</p>
                    <p class="h6">50-100 Personas</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p>Bodas sociales</p>
                    <p class="h6">50-100 Personas</p>
                </div>
                <a href="" class="btn btn-block btn-box">¿Interesado en Reserva? Contáctanos</a>
            </div>
        </div>
    </div>
</section>

<div class="section">
    @include('layouts.utilities.scroll_text')
    @include('layouts.utilities.cta_video_alt')
  </div>
@endsection

@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.restaurant-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    items:1,
  });
</script>
@endpush
