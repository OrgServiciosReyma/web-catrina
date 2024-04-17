<section class="video-cta video-cta-alt">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 offset-md-1">
                <div class="title-group">
                    {{-- <p class="decorative display-3">Nuestra habitaciones</p> --}}
                    <h2 class="display-3">Hacienda Catrina <br>es México</h2>
                </div>

                <p class="mb-0">Es boutique, es sabor, es descanso, es celebración… Hacienda Catrina es México.</p>
            </div>

            <div class="col-md-2 offset-md-2">
                <a href="{{ route('boutique') }}" class="btn btn-primary">Conoce más</a>
            </div>
        </div>
    </div>

    <video muted loop autoplay poster="https://www.haciendacatrina.com.mx/assets/img/hc_r_room3.jpg">
        <source src="{{ asset('video/footer-video.mp4') }}" type="video/mp4">
    </video> 
</section>