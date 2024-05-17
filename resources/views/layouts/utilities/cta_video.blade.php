<section class="video-cta">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-center">
                    <div class="title-group">
                        {{--  <p class="decorative display-3">mejor momento de tu semana</p> --}}
                        <h2 class="display-3">{{ $video_title }}</h2>
                    </div>

                    <p class="description">{{ $video_subtitle }}</p>
                </div>
            </div>
        </div>
    </div>

    <video muted loop autoplay poster="https://www.haciendacatrina.com.mx/assets/img/hc_r_room3.jpg">
        <source src="{{ asset('video/' . $video_link) }}" type="video/mp4">
    </video> 
</section>