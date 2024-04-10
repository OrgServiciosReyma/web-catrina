@extends('layouts.main')

@push('styles')

@endpush

@section('content')
<section class="section section-gastro intro-section">
    <img class="decorative-root root-1" src="{{ asset('img/root-1.svg') }}" alt="">
    <img class="gastro-plate plate-1" src="{{ asset('img/gastro-1.png') }}" alt="">
    <img class="gastro-plate plate-2" src="{{ asset('img/gastro-2.png') }}" alt="">
    <img class="gastro-plate plate-3" src="{{ asset('img/gastro-3.png') }}" alt="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="display-title btm-mr text-center">
            <h1 class="display-1">Gastronomía</h1>
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

<div class="section">
    @include('layouts.utilities.scroll_text')
    @include('layouts.utilities.cta_video')
  </div>
@endsection

@push('scripts')

@endpush
