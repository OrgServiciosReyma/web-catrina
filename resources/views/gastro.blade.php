@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')
<section class="section section-gastro intro-section">
    <img class="decorative-root root-1" src="{{ asset('img/root-1.svg') }}" alt="">
    <img class="gastro-plate plate-1 parallax" data-rellax-speed="5" src="{{ asset('img/gastro-1.png') }}" alt="">
    <img class="gastro-plate plate-2 parallax" data-rellax-speed="-4" src="{{ asset('img/gastro-2.png') }}" alt="">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="display-title btm-mr text-center">
            <h1 class="display-1">Sabor</h1>
            <p class="display-3 decorative">propuesta gastronómica</p>
          </div>
        </div>

        <div class="col-md-3 offset-md-6 position-relative">
          <p><strong>Nuestra gastronomía es un honor a la tierra mexicana.</strong></p>
          <p>Cocina tradicional y regional, cocina de autor y de temporada preparada desde nuestro horno y parilla para una experiencia inigualable. Extensos sabores y productos frescos para consentir y deleitar los paladares.</p>
          <p>La virtud de nuestro menú se distingue por la calidad, donde cuidamos la combinación perfecta entre olores, texturas, colores y sabores junto con una presentación excepcional.</p>

          <a href="" class="btn btn-primary">Conoce más</a>
        </div>
      </div>
    </div>
</section>

<div class="full-image-wrap business-banner" style="margin-top: -100px; z-index:2;"></div>

<section id="la-frida" class="section std-p">
  <div class="container">
      <div class="row btm-mr">
          <div class="col-md-6">
              <div class="title-group">
                  <p class="wide">Cocina de nuestro México</p>
                  <h2 class="display-3">Cocina creativa con tradición</h2>
              </div>
          </div>
      </div>
  </div>
  
  <div class="container std-p pb-0">
      <div class="row">
          <div class="col-md-3 offset-md-4">
              <p>Si eres vegetariano, podremos deleitarte con platillos asombrosos de autor hechos cuidadosamente para que vivas al igual una experiencia de altura.</p>
              <p>Incluimos platillos desarrollados especialmente para recibir y consentir a las personas que viven con diabetes, ofreciendo platillos cuidados y sorprendentes, avalados por nutrición clínica.</p>
          </div>

          <div class="col-md-3 offset-md-1">
            <div class="table-details">
                <div class="d-flex align-items-center justify-content-between">
                  <p>Desayunos</p>
                  <p class="h6">Ver Menú</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <p>Bebidas</p>
                  <p class="h6">Ver Menú</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <p>Comidas y Cenas</p>
                  <p class="h6">Ver Menú</p>
                </div>
                <a href="" class="btn btn-block btn-box">Más Información +</a>
            </div>
          </div>
      </div>
  </div>
</section>

<section id="bar-kahlo" class="section std-p">
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
                  <p class="wide">Hacienda Catrina</p>
                  <h2 class="display-3">Bar Kahlo</h2>
                  <p class="decorative display-3">es sabor</p>
              </div>
          </div>
          <div class="col-md-4 offset-md-1">
              <p>Nuestra carta de bebidas y destilados nacionales e importados harán de tu estancia un momento especial. Prueba nuestra mixología de casa para disfrutar de la vista en la terraza del motor lobby.</p>
              <a href="" class="btn-link">Descarga el Menú ></a>
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
  $('.restaurant-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    items:1,
  });
</script>
@endpush
