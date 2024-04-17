<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('index') }}"><img class="logo-footer" src="{{ asset('img/logo-footer.png') }}" alt="Logo"></a>
                <p class="address">Blvd. Mineral de Peñafiel Sur #600, Col, Guanajuato Puerto Interior, 36275 Silao, Gto. 472 145 0510</p>
            </div>

            <div class="col-md-6 text-end">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <img height="70" class="me-3" src="{{ asset('img/logo-header-1.png') }}" alt="logo tesoros de méxico">
                    </li>
                    <li class="list-inline-item">
                        <img height="70" class="me-3" src="{{ asset('img/logo-header-2.png') }}" alt="logo gastro & resorts">
                    </li>
                    <li class="list-inline-item">
                        <img height="70" class="me-3" src="{{ asset('img/logo-header-3.png') }}" alt="logo gastro & resorts">
                    </li>
                    <li class="list-inline-item">
                        <img height="70" class="me-3" src="{{ asset('img/logo-header-4.png') }}" alt="logo gastro & resorts">
                    </li>
                    <li class="list-inline-item">
                        <img height="70" class="me-3" src="{{ asset('img/logo-header-5.png') }}" alt="logo gastro & resorts">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="post-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0" style="opacity: .5">Todos los derechos reservados  {{ Carbon\Carbon::now()->format('Y') }}. Prohibida su reproducción total o parcial sin autorización.</p>
                </div>
                <div class="col-md-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="{{ route('privacy') }}">Aviso de Privacidad</a></li>
                        {{--  <li class="list-inline-item"><a href="{{ route('cookies') }}">Uso de Cookies</a></li> --}}
                        <li class="list-inline-item"><a href="{{ route('terms') }}">Términos y Condiciones</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>