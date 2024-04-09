<nav>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <a href="javascript:void(0)" onclick="toggleMenu()" class="btn btn-menu"><ion-icon name="menu-outline"></ion-icon> Menú</a>
            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('nosotros') }}">Acerca de nosotros</a>

                    <a href="{{ route('index') }}"><img class="logo" src="{{ asset('img/logo.svg') }}" alt="Logo"></a>
                    <a href="{{ route('index') }}"><img class="logo-sm" src="{{ asset('img/logo-sm.svg') }}" alt="Logo"></a>

                    <a href=""><ion-icon name="card-outline"></ion-icon> Catrina Insiders</a>
                </div>
            </div>
            <div class="col-md-2">
                <a href="" class="booking-btn">Reserva</a>
            </div>
        </div>
    </div>
</nav>

@include('layouts.utilities.main_nav')