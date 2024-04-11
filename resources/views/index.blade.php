@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
  <section class="section section-intro">
    <img class="left-img parallax" data-rellax-speed="2" src="{{ asset('img/section-img-1.png') }}" alt="">
    <h5 class="special-welcome decorative parallax" data-rellax-speed="4">Bienvenido querido amigo. Preparate para el mejor momento de tu semana.</h5>

    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <img class="intro-title" src="{{ asset('img/intro-title.svg') }}" alt="">
        </div>

        <div class="col-md-4 offset-md-6">
          <p class="intro-description">Ubicado en uno de los centros económicos más vibrantes del Bajío, nuestra Hacienda Catrina es una mezcla entre el estilo tradicional y contemporeaneo que hace de México un vibrante espacio para crear memorias.</p>
        </div>

        <div class="col-md-12 text-center info-data-row">
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
      </div>
    </div>

    <img class="right-img parallax" data-rellax-speed="-1" src="{{ asset('img/section-img-2.png') }}" alt="">

    <img class="decorative-root root-1 parallax" data-rellax-speed="-2" src="{{ asset('img/root-1.svg') }}" alt="">
    <img class="decorative-root root-2 parallax" data-rellax-speed="-2" src="{{ asset('img/root-2.svg') }}" alt="">
  </section>

  <section class="section-columns">
    <div class="columns">
      <div class="column-wrap">
        <div class="column parallax" data-rellax-speed="-4">
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_r_room0.jpg)"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_r_room1.jpg)"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_r_room3.jpg)"></div>
          </div>
        </div>
      </div>
      <div class="column-wrap">
        <div class="column parallax" data-rellax-speed="4">
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_r_room7.jpg)"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_r_room000.jpg)"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_g_img2.jpg)"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_g_img5.jpg)"></div>
          </div>
        </div>
      </div>
      <div class="column-wrap">
        <div class="column parallax" data-rellax-speed="-4">
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_g_img9.jpg)"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_g_img12.jpg)"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url(https://www.haciendacatrina.com.mx/assets/img/hc_g_img10.jpg)"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-events std-p">
    <div class="container">
      <div class="row align-items-end btm-mr">
        <div class="col-md-6">
          <div class="title-group">
            <p class="wide">Eventos y Sociales</p>
            <h2 class="display-3">Cartelera</h2>
            <p class="decorative display-3">el lugar para ser</p>
          </div>
        </div>

        <div class="col-md-6 text-end">
          <a href="" class="btn-link">Conoce más sobre nuestra cartelera y eventos ></a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel event-carousel">
            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <img src="{{ asset('img/event-placeholder.png') }}" alt="">
                  <div class="event-date">
                    <h4>25/04</h4>
                    <p>25 de Febrero</p>
                    <p><ion-icon name="time-outline"></ion-icon> 10:00am</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Abierto de Polo FMP 2024</p>
                  <p>Los equipos Gonzalina v San Acasio se enfrentarán próximamente en las explanadas jardinadas de la Hacienda</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <img src="{{ asset('img/event-placeholder.png') }}" alt="">
                  <div class="event-date">
                    <h4>25/04</h4>
                    <p>25 de Febrero</p>
                    <p><ion-icon name="time-outline"></ion-icon> 10:00am</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Abierto de Polo FMP 2024</p>
                  <p>Los equipos Gonzalina v San Acasio se enfrentarán próximamente en las explanadas jardinadas de la Hacienda</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <img src="{{ asset('img/event-placeholder.png') }}" alt="">
                  <div class="event-date">
                    <h4>25/04</h4>
                    <p>25 de Febrero</p>
                    <p><ion-icon name="time-outline"></ion-icon> 10:00am</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Abierto de Polo FMP 2024</p>
                  <p>Los equipos Gonzalina v San Acasio se enfrentarán próximamente en las explanadas jardinadas de la Hacienda</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <img src="{{ asset('img/event-placeholder.png') }}" alt="">
                  <div class="event-date">
                    <h4>25/04</h4>
                    <p>25 de Febrero</p>
                    <p><ion-icon name="time-outline"></ion-icon> 10:00am</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Abierto de Polo FMP 2024</p>
                  <p>Los equipos Gonzalina v San Acasio se enfrentarán próximamente en las explanadas jardinadas de la Hacienda</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <img src="{{ asset('img/event-placeholder.png') }}" alt="">
                  <div class="event-date">
                    <h4>25/04</h4>
                    <p>25 de Febrero</p>
                    <p><ion-icon name="time-outline"></ion-icon> 10:00am</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Abierto de Polo FMP 2024</p>
                  <p>Los equipos Gonzalina v San Acasio se enfrentarán próximamente en las explanadas jardinadas de la Hacienda</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <img src="{{ asset('img/event-placeholder.png') }}" alt="">
                  <div class="event-date">
                    <h4>25/04</h4>
                    <p>25 de Febrero</p>
                    <p><ion-icon name="time-outline"></ion-icon> 10:00am</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Abierto de Polo FMP 2024</p>
                  <p>Los equipos Gonzalina v San Acasio se enfrentarán próximamente en las explanadas jardinadas de la Hacienda</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <img src="{{ asset('img/event-placeholder.png') }}" alt="">
                  <div class="event-date">
                    <h4>25/04</h4>
                    <p>25 de Febrero</p>
                    <p><ion-icon name="time-outline"></ion-icon> 10:00am</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Abierto de Polo FMP 2024</p>
                  <p>Los equipos Gonzalina v San Acasio se enfrentarán próximamente en las explanadas jardinadas de la Hacienda</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-rooms std-p">
    <p class="special-welcome decorative parallax" data-rellax-speed="2">Bienvenido querido amigo. Preparate para el mejor momento de tu semana.</p>
    <p class="special-text display-2 parallax" data-rellax-speed="1">Habitaciones</p>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel boutique-carousel">
            <div class="item">
              <div class="boutique-card">
                  <div class="row align-items-center">
                    <div class="col-md-5">
                      <div class="title-group">
                        <p class="wide">Hacienda Catrina</p>
                        <h2 class="display-3">Doble Queen Suite</h2>
                      </div>
                      <p>Nuestras espaciosas habitaciones están impecablemente diseñadas con comodidades residenciales y comodidades modernas.</p>
                    </div>
                    <div class="col-md-7 position-relative">
                      <img src="{{ asset('img/boutique-placeholder.png') }}" class="img-fluid" alt="">
                      <a href="" class="btn btn-primary">Conoce más</a>
                    </div>
                  </div>
              </div>
            </div>

            <div class="item">
              <div class="boutique-card">
                  <div class="row align-items-center">
                    <div class="col-md-5">
                      <div class="title-group">
                        <p class="wide">Hacienda Catrina</p>
                        <h2 class="display-3">Gran Class King</h2>
                      </div>
                      <p>Nuestras espaciosas habitaciones están impecablemente diseñadas con comodidades residenciales y comodidades modernas.</p>
                    </div>
                    <div class="col-md-7 position-relative">
                      <img src="{{ asset('img/boutique-placeholder.png') }}" class="img-fluid" alt="">
                      <a href="" class="btn btn-primary">Conoce más</a>
                    </div>
                  </div>
              </div>
            </div>

            <div class="item">
              <div class="boutique-card">
                  <div class="row align-items-center">
                    <div class="col-md-5">
                      <div class="title-group">
                        <p class="wide">Hacienda Catrina</p>
                        <h2 class="display-3">Master Suite</h2>
                      </div>
                      <p>Nuestras espaciosas habitaciones están impecablemente diseñadas con comodidades residenciales y comodidades modernas.</p>
                    </div>
                    <div class="col-md-7 position-relative">
                      <img src="{{ asset('img/boutique-placeholder.png') }}" class="img-fluid" alt="">
                      <a href="" class="btn btn-primary">Conoce más</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
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
            <h1 class="display-1">Gastronomía</h1>
            <p class="display-3 decorative">el mayor regalo del día</p>
          </div>
        </div>

        <div class="col-md-3 offset-md-6 position-relative">
          <p class="p"><strong>Un destino para los amantes de la gastronomía dirigido por el chef con dos estrellas Michelin Leondres Lour’d du León. Esta hacienda ofrece 2 restaurantes y 2 bares.</strong></p>
          <p>El arte culinario es parte importante de la experiencia inolvidable preparada para cada uno de ustedes.</p>
          <p>El mundo del sabor pleno es una inspiración infinita para nuestro chef y su equipo. Recetas tradicionales. Productos de temporada de calidad. Ver. Sentir. Disfrútala. Y déjate mimar.</p>

          <a href="{{ route('gastro') }}" class="btn btn-primary">Conoce más</a>
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

  <div class="section section-letters">
    <img class="falling-letter letter-1 parallax" data-rellax-speed="4" src="{{ asset('img/letter-1.png') }}" alt="">
    <img class="falling-letter letter-2 parallax" data-rellax-speed="-2" src="{{ asset('img/letter-2.png') }}" alt="">
    <img class="falling-letter letter-3 parallax" data-rellax-speed="2" src="{{ asset('img/letter-3.png') }}" alt="">
    <img class="falling-letter letter-4 parallax" data-rellax-speed="1" src="{{ asset('img/letter-4.png') }}" alt="">

    <div class="container position-relative">
      <img class="event-image parallax" data-rellax-speed="2" src="{{ asset('img/index-event.png') }}" alt="">
      <div class="row">
        <div class="col-md-12">
          <div class="display-title btm-mr">
            <h4 class="display-3">Queremos ser parte de un</h4>
            <h4 class="display-3 text-secondary-color text-end position-relative" style="z-index: 2;">Capitulo único de tu vida</h4>
          </div>
        </div>

        <div class="col-md-3 offset-md-2">
          <p class="p"><strong>Hacienda Catrina ofrece a las parejas un refugio con encanto para evadirse, con jardines románticos y espacios íntimos.</strong></p>
          <p>Ubicado en uno de los centros económicos más vibrantes del Bajío, nuestra Hacienda Catrina es una mezcla entre el estilo tradicional y contemporeaneo que hace de México un vibrante espacio para crear memorias.</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-5 offset-md-6">
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
    </div>
  </div>

  <section class="section section-members std-p">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-md-6">
            <img src="{{ asset('img/collage.png') }}" alt="">
          </div>

          <div class="col-md-6">
            <div class="title-group btm-mr">
              <p class="wide">Catrina Insider</p>
              <h2 class="display-3">Exclusivo para miembros</h2>
              <p class="decorative display-3">el lugar para ser</p>
            </div>

            <div class="ps-5 pe-5">
              <p class="title-p"><strong>Un escondite íntimo con un estilo e influencias profundamente arraigadas en su herencia cultural.</strong></p>
              <p>Toma un descanso y recupera tu energía a través del relajante murmullo de agua, del contacto con nuestras raíces mexicanas y la calidez momento en familia, pareja o amigos.</p>
              <a href="" class="btn-link mt-5">Este es un link de prueba ></a>
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
  $('.boutique-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    items:1,
  });

  $('.event-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
  });
</script>
@endpush
