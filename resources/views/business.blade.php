@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section section-business intro-section">
    <div class="container">
        <img src="{{ asset('img/business-title.svg') }}" class="img-fluid" alt="">
        
        <p class="special-welcome decorative parallax" data-rellax-speed="-3">Disfruta con nosotros el lujo del descanso</p>
       
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <img class="main-img img-fluid parallax" data-rellax-speed="4" src="{{ asset('img/business-img.png') }}" alt="">
            </div>

            <div class="col-md-3">
                <p class="ps-2 description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu ipsum at arcu aliquam dictum. Curabitur tincidunt mauris ac fringilla tempus. Curabitur eleifend, tellus ac condimentum suscipit, odio velit molestie neque, vitae rutrum nunc augue at ante. Donec vel tortor mauris</p>
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
                    <p class="wide">Salón de Eventos Empresariales</p>
                    <h2 class="display-3">El espacio correcto para conferencias y congresos</h2>
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
                <p>Hacienda Catrina es el lugar ideal donde el trabajo y la relajación se unen! Hacienda Catrina ofrece salas de conferencias bien equipadas, personal profesional, un hermoso ambiente hotelero y un maravilloso espacio y jardines.</p>
            </div>

            <div class="col-md-3 offset-md-1">
                <ul class="list-unstyled list-attributes">
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Salas de conferencias modernizadas y ampliadas con luz natural, adecuadas para los expositores durante las conferencias y para la prestación de servicios de catering.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 4 supercargadores rápidos Tesla</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Restaurante bonito, elegante y con estilo.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Menú de temporada sabroso y saludable.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Almacenamiento de su equipaje.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Posibilidad de colocar en el salón de congresos un producto grande (por ejemplo, un coche).</li>
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
            <h1 class="display-1">Restaurante</h1>
            <p class="display-3 decorative">el mayor regalo del día</p>
          </div>
        </div>

        <div class="col-md-3 offset-md-6 position-relative">
          <p><strong>Un destino para los amantes de la gastronomía dirigido por el chef con dos estrellas Michelin Leondres Lour’d du León. Esta hacienda ofrece 2 restaurantes y 2 bares.</strong></p>
          <p>El arte culinario es parte importante de la experiencia inolvidable preparada para cada uno de ustedes.</p>
          <p>El mundo del sabor pleno es una inspiración infinita para nuestro chef y su equipo. Recetas tradicionales. Productos de temporada de calidad. Ver. Sentir. Disfrútala. Y déjate mimar.</p>

          <a href="" class="btn btn-primary">Conoce más</a>
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
                    <p class="wide">Hacienda Catrina</p>
                    <h2 class="display-3">Espacios ideales para crear</h2>
                </div>
        
                <ul class="list-unstyled list-attributes pe-5">
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Salas de conferencias modernizadas y ampliadas con luz natural, adecuadas para los expositores durante las conferencias y para la prestación de servicios de catering.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> 4 supercargadores rápidos Tesla</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Restaurante bonito, elegante y con estilo.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Menú de temporada sabroso y saludable.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Almacenamiento de su equipaje.</li>
                    <li><ion-icon name="checkmark-circle-outline" class="me-3"></ion-icon> Posibilidad de colocar en el salón de congresos un producto grande (por ejemplo, un coche).</li>
                </ul>
            </div>
        
            <div class="col-md-7 offset-md-1">
                <div class="owl-carousel gallery-carousel">
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spaces-1.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spaces-2.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spaces-1.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spaces-2.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spaces-1.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spaces-1.png') }}" alt="">
                      </div>
                    </div>
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/spaces-2.png') }}" alt="">
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
    items:3,
  });
</script>
@endpush
