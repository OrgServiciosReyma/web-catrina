@extends('layouts.main')

@push('styles')
<style>
    body{
        background-color: #1E1E1E !important;
        color: #fff !important;
    }

    .section{
        background-color: #1E1E1E !important;
    }

    nav .logo{
        mix-blend-mode:difference;
    }

    nav a{
        color: #fff;
    }

    nav.scroll{
        background-color: #1E1E1E !important;
    }

    footer{
        position: relative;
        z-index: 99;
    }
</style>
@endpush

@section('content')
<section class="section section-experiences">
    <p class="special-welcome decorative">Con un diseno elegante y atemporal, el salon ofrece un ambiente acogedor y relajado, lo que lo convierte en el lugar pespecial.</p>

    <div class="display-title text-center">
        <h1 class="display-2">Experiencia SPA</h1>
    </div>
</section>

<section class="section intro-section" style="height: 1100vh">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Con un diseno elegante y atemporal, el salon ofrece un ambiente acogedor y relajado, lo que lo convierte en el lugar pespecial</p>
            </div>
        </div>
    </div>
</section>

<div class="section white-scroll-text">
    @include('layouts.utilities.scroll_text')
</div>
@endsection

@push('scripts')

@endpush
