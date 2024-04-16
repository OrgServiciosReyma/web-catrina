<div class="main-nav">
    <div class="left-nav">
        <div class="overlay"></div>

        <a href="javascript:void(0)" class="close-btn"><ion-icon name="close-outline"></ion-icon></a>

        <div class="sidebar-menu">
            <div class="sidebar-element">
                <a href="{{ route('boutique') }}"><h4><span>I</span> Boutique</h4></a>

                <div class="hover-card">
                    <div class="hover-line">
                        <a href="">Master Suite 101</a>
                        <a href="">Master Suite 201</a>
                        <a href="">Grand Class King</a>
                        <a href="">Grand Class Queen</a>
                        <a href="">Villa Catrina</a>
                    </div>
                </div>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('spa') }}"><h4><span>II</span> Hospitalidad</h4></a>

                <div class="hover-card">
                    <div class="hover-line">
                        <a href="">Amenidades</a>
                        <a href="">Gimnasio</a>
                        <a href="">Servicio Pick Up</a>
                    </div>
                </div>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('gastro') }}"><h4><span>III</span> La Vida</h4></a>

                <div class="hover-card">
                    <div class="hover-line">
                        <a href="">Travesías</a>
                        <a href="">Gimnasio</a>
                        <a href="">Temazcal</a>
                        <a href="">Productos</a>
                    </div>
                </div>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('gastro') }}"><h4><span>IV</span> Sabor</h4></a>

                <div class="hover-card">
                    <div class="hover-line">
                        <a href="">Gastronomía y Coctelería</a>
                        <a href="">La Frida Restaurante</a>
                        <a href="">Bar Kahlo</a>
                    </div>
                </div>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('events') }}"><h4><span>V</span> Celebración</h4></a>

                <div class="hover-card">
                    <div class="hover-line">
                        <a href="">Empresariales</a>
                        <a href="">Sociales</a>
                        <a href="">Agenda una Cita</a>
                    </div>
                </div>
            </div>

            <div class="sidebar-element">
                <a href="{{ route('business') }}"><h4><span>VI</span> Negocios</h4></a>

                <div class="hover-card">
                    <div class="hover-line">
                        <a href="">Convenios</a>
                        <a href="">Eventos</a>
                        <a href="">La Frida Restaurante</a>
                        <a href="">Bar Kahlo</a>
                        <a href="">Gimnasio</a>
                        <a href="">La Vida Wellness Center</a>
                    </div>
                </div>
            </div>

            {{--  
            <div class="sidebar-element">
                <a href="{{ route('bodas') }}"><h4><span>IV</span> Bodas</h4></a>

                <div class="hover-card">
                    <div class="hover-line">
                        <a href="">Elemento 1</a>
                        <a href="">Elemento 1</a>
                        <a href="">Elemento 1</a>
                        <a href="">Elemento 1</a>
                        <a href="">Elemento 1</a>
                    </div>
                </div>
            </div>
            --}}
        </div>
    </div>

    <div class="right-nav">
        <div class="d-flex flex-column align-content-around flex-wrap text-center">
            <img class="logo-nav" src="{{ asset('img/logo-white.svg') }}" alt="">

            <div class="mt-auto mb-auto">
                <h4>Hacienda Catrina <br>Hotel Boutique & Spa</h4>
                <p>Blvd. Mineral de Peñafiel Sur #600, Col, Guanajuato Puerto Interior, 36275 Silao, Gto.</p>
    
                <ul class="list-unstyled">
                    <li><a href="tel:4721450510">472 145 0510</a></li>
                    <li><a href="mailto:contacto@haciendacatrina.com.mx">contacto@haciendacatrina.com.mx</a></li>
                    <li><a href="mailto:recepcion@haciendacatrina.com.mx">recepcion@haciendacatrina.com.mx</a></li>
                </ul>
    
                <ul class="list-inline social-icons">
                    <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/haciendacatrina/"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/haciendacatrina/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.tiktok.com/@haciendacatrina"><ion-icon name="logo-tiktok"></ion-icon></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.booking.com/Share-cew7pZ"><ion-icon name="airplane-outline"></ion-icon></a></li>
                    <li class="list-inline-item"><a target="_blank" href="https://www.expedia.mx/en/Silao-Hotels-HC-HACIENDA-CATRINA-HOTEL-BOUTIQUE.h82871460.Hotel-Information?recommendations-overlay=recommendations-overlay"><ion-icon name="airplane-outline"></ion-icon></a></li>
                </ul>
            </div>
            
            <ul class="list-unstyled legal-list mt-auto">
                <li><a href="{{ route('privacy') }}">Aviso de Privacidad</a></li>
                <li><a href="{{ route('terms') }}">Términos y Condiciones</a></li>
                <li><a href="{{ route('terms') }}">Facturación</a></li>
            </ul>
        </div>
    </div>
</div>