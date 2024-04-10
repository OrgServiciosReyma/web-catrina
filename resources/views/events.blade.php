@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section intro-section">
    <div class="container">
        <p class="decorative special-welcome">Bienvenido querido amigo. Preparate para el mejor momento de tu semana.</p>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="title-group btm-mr">
                    <h2 class="display-3">Nuestro Estilo</h2>
                    <p class="decorative display-3">Te invita al lujo</p>
                </div>

                <p class="h5">Hacienda Catrina es un escondite íntimo con su estilo e influencias profundamente arraigadas en su herencia cultural.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 offset-md-3">
                <p>El Catrina Lounge es un sofisticado y elegante espacio que ofrece una experiencia gastronómica y de bebida única y refinada. Con un diseño elegante y atemporal, el salón ofrece un ambiente acogedor y relajado.</p>
                <p>Esto lo convierte en el lugar perfecto para una noche de fiesta con colegas, una velada romántica o una ocasión especial.</p>
            </div>

            <div class="col-md-5">

            </div>
        </div>
    </div>
</section>

<section class="section std-p">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="display-title btm-mr">
                    <p class="display-3 decorative">Eventos</p>
                    <h1 class="display-1">Empresariales</h1>
                </div>
            </div>

            <div class="col-md-5 offset-md-4">
                <p class="h5">En el corazón de la hacienda, el patio central, un espacio bañado por la luz natural, sus arcos majestuosos y su fuente de talavera y cantera que alberga una magnolia y árboles de olivo, el lugar perfecto para consentirte y dejarte llevar por los colores, olores y sonidos de la fuente</p>
            </div>
        </div>

        <img src="" alt="imagen 1">
        <img src="" alt="imagen 2">
    </div>
</section>

<section class="section std-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel restaurant-carousel">
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/event-placeholder.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/event-placeholder.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/event-placeholder.png') }}" alt="">
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

<section class="section std-p">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="display-title btm-mr">
                    <p class="display-3 decorative">Eventos</p>
                    <h1 class="display-1">Sociales</h1>
                </div>
            </div>

            <div class="col-md-5 offset-md-4">
                <p class="h5">En el corazón de la hacienda, el patio central, un espacio bañado por la luz natural, sus arcos majestuosos y su fuente de talavera y cantera que alberga una magnolia y árboles de olivo, el lugar perfecto para consentirte y dejarte llevar por los colores, olores y sonidos de la fuente</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 offset-md-1">
                <p><strong>Hacienda Catrina ofrece a las parejas un refugio con encanto para evadirse, con jardines románticos y espacios íntimos.</strong></p>
                <p>Ubicado en uno de los centros económicos más vibrantes del Bajío, nuestra Hacienda Catrina es una mezcla entre el estilo tradicional y contemporeaneo que hace de México un vibrante espacio para crear memorias.</p>
            </div>

            <div class="col-md-5 offset-md-3">
                <div class="d-flex">
                    <p>Eventos empresariales</p>
                    <p>50-100 Personas</p>
                </div>
                <div class="d-flex">
                    <p>Eventos pequeños</p>
                    <p>50-100 Personas</p>
                </div>
                <div class="d-flex">
                    <p>Bodas sociales</p>
                    <p>50-100 Personas</p>
                </div>
                <a href="" class="btn btn-block btn-box">¿Interesado en Reserva? Contáctanos</a>
            </div>
        </div>
        <img src="" alt="imagen 1">
        <img src="" alt="imagen 2">
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
