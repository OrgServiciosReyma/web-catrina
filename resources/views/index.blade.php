@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
  <section class="section section-intro">
    <img src="{{ asset('img/section-img-1.png') }}" alt="">
    <h5>Bienvenido querido amigo. Preparate para el mejor momento de tu semana.</h5>

    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h2>La belleza y <br> comodidad <br> del auténtico <br> lujo mexicano</h2>
        </div>

        <div class="col-md-4 offset-md-6">
          <p>Ubicado en uno de los centros económicos más vibrantes del Bajío, nuestra Hacienda Catrina es una mezcla entre el estilo tradicional y contemporeaneo que hace de México un vibrante espacio para crear memorias.</p>
        </div>

        <div class="col-md-12 text-center">
          <div class="d-flex justify-content-center text-center">
            <div class="info-data">
              <h4>{{ Carbon\Carbon::now()->format('d') }}</h4>
              <p>{{ Carbon\Carbon::now()->translatedFormat('m, Y') }}</p>
            </div>

            <div class="info-data">
              <h4>{{ Carbon\Carbon::now()->format('H:i') }}</h4>
              <p>hora loca</p>
            </div>

            <div class="info-data">
              <h4>14º</h4>
              <p>despejado</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <img src="{{ asset('img/section-img-2.png') }}" alt="">
  </section>

  <section class="section-columns">
    <div class="columns">
      <div class="column-wrap">
        <div class="column">
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
        <div class="column">
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
        <div class="column">
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

  <section class="section section-events">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-6">
          <div class="title-group">
            <h6>Eventos y Sociales</h6>
            <h2>Cartelera</h2>
            <h5>el lugar para ser</h5>
          </div>
        </div>

        <div class="col-md-6 text-end">
          <a href="">Conoce más sobre nuestra cartelera y eventos ></a>
        </div>

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

  <section class="section section-gastro">
    <img src="{{ asset('img/gastro-1.png') }}" alt="">
    <img src="{{ asset('img/gastro-2.png') }}" alt="">
    <img src="{{ asset('img/gastro-3.png') }}" alt="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h1>Gastronomía</h1>
            <h5>el mayor regalo del día</h5>
          </div>
        </div>

        <div class="col-md-3 offset-md-6">
          <p><strong>Un destino para los amantes de la gastronomía dirigido por el chef con dos estrellas Michelin Leondres Lour’d du León. Esta hacienda ofrece 2 restaurantes y 2 bares.</strong></p>
          <p>El arte culinario es parte importante de la experiencia inolvidable preparada para cada uno de ustedes.</p>
          <p>El mundo del sabor pleno es una inspiración infinita para nuestro chef y su equipo. Recetas tradicionales. Productos de temporada de calidad. Ver. Sentir. Disfrútala. Y déjate mimar.</p>

          <a href="" class="btn btn-primary">Conoce más</a>
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
        <div class="col-md-6">
          <div class="title-group text-end">
            <h6>Catrina Insider</h6>
            <h2>Terraza Bar</h2>
            <h5>el lugar para ser</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section section-letters">
    <img src="{{ asset('img/letter-1.png') }}" alt="">
    <img src="{{ asset('img/letter-2.png') }}" alt="">
    <img src="{{ asset('img/letter-3.png') }}" alt="">
    <img src="{{ asset('img/letter-4.png') }}" alt="">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Queremos ser parte de un <br><span>Capitulo único de tu vida</span></h1>
        </div>

        <div class="col-md-3 offset-md-2">
          <p><strong>Hacienda Catrina ofrece a las parejas un refugio con encanto para evadirse, con jardines románticos y espacios íntimos.</strong></p>
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

  <section class="section section-members">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-md-6">
            <img src="{{ asset('img/collage.png') }}" alt="">
          </div>

          <div class="col-md-6">
            <div class="title-group">
              <h6>Catrina Insider</h6>
              <h2>Exclusivo para miembros</h2>
              <h5>el lugar para ser</h5>
            </div>

            <div class="ps-5">
              <p><strong>Un escondite íntimo con un estilo e influencias profundamente arraigadas en su herencia cultural.</strong></p>
              <p>Toma un descanso y recupera tu energía a través del relajante murmullo de agua, del contacto con nuestras raíces mexicanas y la calidez momento en familia, pareja o amigos.</p>
              <a href="">Este es un link de prueba ></a>
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
  })
</script>
@endpush
