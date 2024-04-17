@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">
@endpush

@section('content')

<section class="section section-boutique-detail intro-section">
    <img class="decorative-root root-1 parallax" data-rellax-speed="-2" src="{{ asset('img/root-1.svg') }}" alt="">
    <img class="decorative-root root-2 parallax" data-rellax-speed="-2" src="{{ asset('img/root-2.svg') }}" alt="">

    <div class="container">
        <div class="row">
            <div class="col-md-2 offset-md-1">
                <div class="info-data mb-5">
                    <h4 class="h1">{{ $capacity }}</h4>
                    <p>personas</p>
                </div>

                <div class="info-data">
                    <h4 class="h1">14º</h4>
                    <p>despejado</p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <h1 class="display-2 px-5 mb-0" style="line-height: 1;">{{ $room_name }}</h1>
                <p class="p">{{ $description }}</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <div class="owl-carousel room-carousel">
                    @foreach($room_images as $room_img)
                    <div class="item">
                      <div class="gallery-card">
                          <img src="{{ asset('img/rooms/' . $slug .'/' . $room_img['img']) }}" alt="">
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-3">
                <ul class="list-unstyled">
                    @foreach($characteristics as $char)
                    <li>{{ $char }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <p class="special-welcome decorative parallax" data-rellax-speed="-1">Permítenos consentirte con nuestra hospitalidad para una estancia excepcional. Todas las amenidades fueron seleccionadas para darte una magnífica experiencia de descaso con un toque de auténtico lujo mexicano.</p>
    </div>
</section>

<section class="section std-p">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="title-group text-center btm-mr">
                    <h2 class="display-3">{{ $content_title }}</h2>
                    <p class="decorative display-3">{{ $content_subtitle }}</p>
                </div>
        
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            @foreach($main_p as $p)
                            <li><p class="title-p"><strong>{{ $p }}</strong></p></li>
                            @endforeach
                        </ul>
                    </div>
        
                    <div class="col-md-6">
                        <p>{{ $descriptive_p }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-gallery position-relative std-p">
    <div class="owl-carousel gallery-carousel">
        @foreach($gallery as $g_img)
        <div class="item">
            <div class="gallery-card">
                <img src="{{ asset('img/rooms/' . $slug . '/' . $g_img['img']) }}" alt="">
                <p>{{ $g_img['title'] }}</p>
            </div>
        </div>
        @endforeach
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

  $('.room-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    items:1,
  });
</script>
@endpush
