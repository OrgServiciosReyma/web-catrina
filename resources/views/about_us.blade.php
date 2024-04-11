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
            <div class="display-title btm-mr text-center parallax" data-rellax-speed="-2">
              <h1 class="display-1" style="line-height: 1;"><span class="line-detail"></span> Acerca de Nosotros</h1>
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

    <p class="special-welcome decorative parallax" data-rellax-speed="-1">Con un diseno elegante y atemporal, el salon ofrece un ambiente acogedor y relajado, lo que lo convierte en el lugar pespecial.</p>
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

    <div class="container std-p pb-0">
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

<section class="section section-places position-relative std-p">
    <div class="container">
        <p class="special-welcome decorative parallax" data-rellax-speed="-4">Bienvenido querido amigo. Preparate para el mejor momento de tu semana.</p>

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
