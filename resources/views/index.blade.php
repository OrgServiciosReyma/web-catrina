@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
  <section class="section section-intro">
    <img class="left-img parallax" data-rellax-speed="2" src="{{ asset('img/section-img-1.png') }}" alt="">
    <h5 class="special-welcome decorative parallax" data-rellax-speed="4"> Bienvenido a Hacienda Catrina, todo el sabor, orgullo y tradición del auténtico lujo mexicano.</h5>

    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <img class="intro-title" src="{{ asset('img/intro-title.svg') }}" alt="">
        </div>

        <div class="col-md-4 offset-md-6">
          <p class="intro-description">Disfrutarás del descanso y tranquilidad rodeado de hermosos jardines, vivirás las magníficas travesías diseñadas en nuestro centro de bienestar para reconectar con el origen y descubrirás todos los sabores en nuestra cocina creativa con tradición. Permítenos consentirte con nuestra hospitalidad para una estancia excepcional.</p>
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

    <img class="right-img parallax" data-rellax-speed="-1" src="{{ asset('img/section-img-2.png') }}" alt="">

    <img class="decorative-root root-1 parallax" data-rellax-speed="-2" src="{{ asset('img/root-1.svg') }}" alt="">
    <img class="decorative-root root-2 parallax" data-rellax-speed="-2" src="{{ asset('img/root-2.svg') }}" alt="">
  </section>

  <section class="section-columns">
    <div class="columns">
      <div class="column-wrap">
        <div class="column parallax" data-rellax-speed="-4">
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-1.png') }})"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-2.png') }})"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-3.png') }})"></div>
          </div>
        </div>
      </div>
      <div class="column-wrap">
        <div class="column parallax" data-rellax-speed="4">
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-4.png') }})"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-5.png') }})"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-6.png') }})"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-7.png') }})"></div>
          </div>
        </div>
      </div>
      <div class="column-wrap">
        <div class="column parallax" data-rellax-speed="-4">
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-8.png') }})"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-9.png') }})"></div>
          </div>
          <div class="column__item">
            <div class="column__item-img" style="background-image:url({{ asset('img/main-img-10.png') }})"></div>
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
            <p class="wide">Experiencias</p>
            <h2 class="display-3">Hacienda Catrina</h2>
            <p class="decorative display-3">es celebración</p>
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
                  <div class="overlay"></div>
                  <img src="{{ asset('img/event-1.jpg') }}" alt="">
                  <div class="event-date">
                    <h4>10-May</h4>
                    <p>Día de las madres</p>
                    <p>Menú Especial</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Celebra a mamá en La Frida Restaurante</p>
                  <p>Reserva este viernes 10 de mayo, tendremos menú especial.</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <div class="overlay"></div>
                  <img src="{{ asset('img/event-2.jpg') }}" alt="">
                  <div class="event-date">
                    <h4>14-Feb</h4>
                    <p>San Valentín</p>
                    <p>Comparte en pareja</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>San Valentín</p>
                  <p>Ven a disfrutar de un día especial con quien más amas.</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <div class="overlay"></div>
                  <img src="{{ asset('img/event-3.jpg') }}" alt="">
                  <div class="event-date">
                    <h4>31-Dec</h4>
                    <p>¡Bienvenido 2024!</p>
                    <p>Celebra Año Nuevo</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Bienvenido 2024</p>
                  <p>Dale la bienvenida al 2024 con nuestro evento especial en La Frida Restaurante.</p>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="event-card">
                <div class="event-image">
                  <div class="overlay"></div>
                  <img src="{{ asset('img/event-4.jpg') }}" alt="">
                  <div class="event-date">
                    <h4>2-Nov</h4>
                    <p>Primer Aniversario</p>
                    <p>Ven y celebra con nosotros</p>
                  </div>
                </div>
                <div class="event-info">
                  <p>Nuestro primer aniversario</p>
                  <p>Tendremos un evento especial para celebrar nuestro primer aniversario y el tradicional encendido de altar de muertos. Reserva Ahora.</p>
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
                        <h2 class="display-3">Villa Catrina</h2>
                      </div>
                      <p>Hermosa casa de campo decorada con un estilo tradicional mexicano totalmente privada. 2 habitaciones, Sala comedor, terraza con asador y alberca privada.</p>
                    </div>
                    <div class="col-md-7 position-relative">
                      <div class="img-wrap">
                        <img src="{{ asset('img/rooms/villa-catrina/gallery_1.jpg') }}" class="img-fluid" alt="">
                      </div>
                      <a href="{{ route('boutique.detail', 'villa-catrina') }}" class="btn btn-primary">Conoce más</a>
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
                        <h2 class="display-3">Doble Queen Suite</h2>
                      </div>
                      <p>Nuestras espaciosas habitaciones están impecablemente diseñadas con comodidades residenciales y comodidades modernas.</p>
                    </div>
                    <div class="col-md-7 position-relative">
                      <div class="img-wrap">
                        <img src="{{ asset('img/rooms/gran-class-double-queen/gallery_1.jpg') }}" class="img-fluid" alt="">
                      </div>
                      <a href="{{ route('boutique.detail', 'gran-class-double-queen') }}" class="btn btn-primary">Conoce más</a>
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
                      <div class="img-wrap">
                        <img src="{{ asset('img/rooms/gran-class-king/main_img_2.jpg') }}" class="img-fluid" alt="">
                      </div>
                      
                      <a href="{{ route('boutique.detail', 'gran-class-king') }}" class="btn btn-primary">Conoce más</a>
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
                        <h2 class="display-3">Master Suite 101</h2>
                      </div>
                      <p>Nuestras espaciosas habitaciones están impecablemente diseñadas con comodidades residenciales y comodidades modernas.</p>
                    </div>
                    <div class="col-md-7 position-relative">
                      <div class="img-wrap">
                        <img src="{{ asset('img/rooms/master-suite-101/main_img_1.jpg') }}" class="img-fluid" alt="">
                      </div>
                      <a href="{{ route('boutique.detail', 'master-suite-101') }}" class="btn btn-primary">Conoce más</a>
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
            <h1 class="display-1">Sabor</h1>
            <p class="display-3 decorative">Cocina creativa con tradición</p>
          </div>
        </div>

        <div class="col-md-3 offset-md-6 position-relative">
          <p class="p"><strong>Nuestra gastronomía es un honor a la tierra mexicana. Cocina tradicional y regional, cocina de autor y de temporada preparada desde nuestro horno y parilla para una experiencia inigualable. Extensos sabores y productos frescos para consentir y deleitar los paladares.</strong></p>
          <p>La virtud de nuestro menú se distingue por la calidad, donde cuidamos la combinación perfecta entre olores, texturas, colores y sabores junto con una presentación excepcional.</p>
          <p>La autenticidad de nuestra cocina es lo que nos hace únicos, en conjunto con el hermoso lugar y ambientación cuidado detalladamente para lograr una experiencia inigualable para nuestros comensales.</p>

          <a href="{{ route('gastro') }}" class="btn btn-primary">Conoce más</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-terraza">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3">
          <p>Nuestra carta de bebidas y destilados nacionales e importados harán de tu estancia un momento especial.</p>
          <p>Prueba nuestra mixología de casa para disfrutar de la vista en la terraza del motor lobby.</p>
        </div>
        <div class="col-md-6 offset-md-3">
          <div class="title-group text-end">
            <p class="wide">Bar Kahlo</p>
            <h2 class="display-3">Hacienda Catrina</h2>
            <p class="decorative display-3">es sabor</p>
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
        <div class="col-md-9 offset-md-1">
          <div class="display-title btm-mr">
            <h4 class="display-2">¡Hacienda Catrina</h4>
            <h4 class="display-2 text-secondary-color text-end position-relative" style="z-index: 2;">es Celebración!</h4>
          </div>
        </div>

        <img class="event-image-responsive" data-rellax-speed="2" src="{{ asset('img/index-event.png') }}" alt="">

        <div class="col-md-3 offset-md-2">
          <p class="p"><strong>Nuestros espacios están diseñados para ser el marco perfecto de tu evento, sea social o empresarial  sorprenderás siempre a todos tus invitados.</strong></p>
          <p>Contamos con espacios para todo tipo de eventos: desde cava privada, salones de negocios, amplios jardines con carpa y un magnífico ruedo para un escenario especial.</p>
        </div>
      </div>

      <div class="row table-details">
        <div class="col-md-5 offset-md-6">
          <div class="d-flex align-items-center justify-content-between">
            <p>Empresariales</p>
            <p class="h6">15 a 100 invitados</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p>Sociales</p>
            <p class="h6">100 hasta 500 invitados</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p>Bodas&Corporativo</p>
            <p class="h6">150 hasta 1000 invitados</p>
          </div>
          <a href="" class="btn btn-block btn-box">Más Información +</a>
        </div>
      </div>
    </div>
  </div>

  <section class="section section-members std-p">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-md-6">
            <img src="{{ asset('img/collage.png') }}" alt="" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="title-group btm-mr">
              <p class="wide">Social Club</p>
              <h2 class="display-3">PERTENECE A NUESTRO PROGRAMA PARA CLIENTES PRIORITARIOS</h2>
              <p class="decorative display-3">pre registro</p>
            </div>

            <div class="ps-5 pe-5">
              <p class="title-p"><strong>Forma parte de nuestro Social Club de Recompensas y Beneficios exclusivos para nuestros Clientes Prioritarios de Gastro & Resorts.</strong></p>
              <p>Nuestro club te otorgará distintos beneficios para ti y tus invitados en todos nuestros servicios y espacios, estamos en etapa de pre registro. Con sólo compartirnos tu correo electrónico o número telefónico y tu nombre podrás entrar en la lista. </p>
              <a href="tel:4721450510" class="btn-link mt-5">Más Información +</a>
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
    nav:true,
    responsive:{
        0:{
            items:2,
            margin:15,
        },
        600:{
            items:2,
            margin:15,
        },
        1000:{
            items:4,
            margin:30,
        }
    }
  });
</script>
@endpush
