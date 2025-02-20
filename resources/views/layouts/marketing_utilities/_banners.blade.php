@php
    use GuzzleHttp\Client;

    $client = new Client();
    $banner_response = $client->request('GET', 'http://127.0.0.1:8000/api/banners/company/2');
    $banners = json_decode($banner_response->getBody(), true);
@endphp

<section class="section-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(!empty($banners))
                    <div class="owl-carousel owl-theme main-carousel">
                        @foreach($banners as $banner)
                        <div class="item main-banner banner-{{ $banner['id'] }}">
                            <style>
                                .banner-{{ $banner['id'] }} {
                                    background: url('http://127.0.0.1:8000/img/banners/{{ $banner['image'] }}') !important;
                                    background-position: center center !important;
                                    background-size: cover !important;
                                    background-repeat: no-repeat !important;
                                }
                            </style>

                            <div class="overlay"></div>
                            <div class="content-block">
                                <p class="p mb-4">{{ $banner['title'] }}</p>
                                <p class="p">{{ $banner['subtitle'] }}</p>
                            </div>
        
                            <h1 class="scroll-title">Celebremos Juntos - Celebremos Juntos</h1>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="main-banner">
                        <div class="overlay"></div>
                        <div class="content-block">
                            <p class="p mb-4">Descubre una experiencia de lujo y emoción desde el primer momento del diseño de tu evento de la mano de nuestras asesoras.</p>
                            <p class="p">Con nuestro Catering de eventos tienes distintas opciones de espacios para celebrar ese día especial. Conócelos todos:</p>
                        </div>

                        <h1 class="scroll-title">Celebremos Juntos - Celebremos Juntos</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>

<script>
  $('.main-carousel').owlCarousel({
    loop:false,
    margin:0,
    nav:true,
    dots:false,
    items:1,
  });
</script>
@endpush