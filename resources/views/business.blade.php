
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
                <img class="img-fluid parallax" data-relax-speed="4" src="{{ asset('img/business-box-1.png') }}" alt="">
            </div>
            <div class="col-md-6 ps-5">
                <div class="title-group btm-mr">
                    <h2 class="display-3">Hacienda Catrina</h2>
                    <p class="decorative display-3">es negocios</p>
                </div>

                <p class="title-p mb-5">Espacios diseñados para tener la mejor experiencia en tu evento empresarial, directivo, operativo o de integració.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 offset-md-3 ps-5">
                <p>Contamos con espacios diseñados para tener una experiencia completa en comodidad, eficiencia en comunicación y la mejor calidad de alimentos y bebidas para tus colaboradores.</p>
                <p>Contamos con una cava privada, salones empresariales con proyección, terraza y salones privados y un ruedo con capacidad de hasta 500 invitados. Seremos tus coanfitriones para dejar en tus invitados un recuerdo inolvidable.</p>
            </div>

            <div class="col-md-5 ps-5">
                <img src="{{ asset('img/business-box-2.png') }}" class="img-fluid parallax" data-relax-speed="-2" alt="">
            </div>
        </div>
    </div>
</section>

<section id="eventos" class="section section-enterprise std-p offset-mr-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-4 mt-5 pt-5">
                <div class="display-title btm-mr">
                    <p class="display-3 decorative">Eventos</p>
                    <h1 class="display-2">Empresariales</h1>
                </div>
            </div>

            <div class="col-md-5 offset-md-4">
                <p class="title-p">Nuestro servicio personalizado nos permite adaptarnos a las necesidades de tu evento. Contamos con un equipo profesional y humano que harán de tu evento la mejor presentación de tu marca.</p>
                <p>Con distintos escenarios y una oferta amplia de menú complementarás la experiencia completa para tus invitados. Por favor contáctanos al (477) 724 7705 o déjanos tus datos en el formulario de contacto y con gusto le daremos seguimiento a tu solicitud y cotización.</p>
            </div>
        </div>

        <img src="{{ asset('img/business-1.png') }}" class="business-image business-1 parallax" data-relax-speed="1" alt="imagen 1">
    </div>
</section>

<section class="section std-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel restaurant-carousel">
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/banner-business-1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/banner-business-2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/banner-business-4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/banner-business-5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <img src="{{ asset('img/banner-business-6.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row align-items-center mt-5">
            <div class="col-md-5 offset-md-1">
                <div class="title-group">
                    <p class="wide">Galería</p>
                    <h2 class="display-3">Eventos</h2>
                    <p class="decorative display-3">empresariales</p>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <p>Nuestra cocina nos permite servir desde un grupo de 15 personas, hasta un evento para 500 comensales. Verifica la disponibilidad de agenda con nuestras asesoras.</p>
                <a href="" class="btn-link">Agendar tu cita ></a>
            </div>
        </div>
    </div>
</section>

<section id="la-frida" class="section-terraza alt-terraza">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
            <p>Nuestra gastronomía es un honor a la tierra mexicana.</p>
            <p>Cocina tradicional y regional, cocina de autor y de temporada preparada desde nuestro horno y parilla para una experiencia inigualable. Extensos sabores y productos frescos para consentir y deleitar los paladares.</p>
        </div>

        <div class="col-md-6 offset-md-2">
          <div class="title-group text-end">
            <p class="wide">Hacienda Catrina es Sabor</p>
            <h2 class="display-3">La Frida</h2>
            <p class="decorative display-3">cocina creativa con tradición.</p>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="section section-social">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('img/wellness-1.png') }}" class="img-fluid social-1 parallax" data-relax-speed="-1" alt="">
            </div>

            <div class="col-md-5 offset-md-1 mt-5 ps-3">
                <div class="display-title btm-mr">
                    <p class="display-3 decorative">Wellness Center</p>
                    <h1 class="display-2">La Vida</h1>
                </div>

                <p class="title-p pe-5">La Vida Wellness Center by Hacienda Catrina Hotel Boutique & Spa es el espacio de bienestar que necesitas para recargar de energía, realiza tus rutinas de entrenamiento en nuestro gimnasio y enfrenta los retos del día a día con tu mejor versión.</p>
            </div>

            <div class="col-md-3 mt-auto">
                <img src="{{ asset('img/wellness-2.png') }}" class="img-fluid social-2 parallax" data-relax-speed="-3" alt="">
            </div>
        </div>

        <div class="row align-items-end std-p">
            <div class="col-md-3 offset-md-1" style="z-index: 2;">
                <p><strong>El trabajo no será jamás un pretexto para no estar en forma. Consulta nuestros horarios de servicio y reserva tu visita. </strong></p>
                <p>Conoce todos los servicios que La Vida Wellness Center by Hacienda Catrina Hotel Boutique & Spa tiene para ti.</p>

                <a href="{{ route('spa') }}" class="btn btn-primary" style="position: relative; right:-180px;">Más información</a>
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
    @include('layouts.utilities.cta_video_alt')
  </div>
@endsection

@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.restaurant-carousel').owlCarousel({
    loop:false,
    margin:30,
    nav:true,
    items:1,
  });
</script>
@endpush
