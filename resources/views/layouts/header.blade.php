<nav>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <a href="javascript:void(0)" onclick="toggleMenu()" class="btn btn-menu"><ion-icon name="menu-outline"></ion-icon> Menú</a>
            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-center align-items-center">
                    <a class="hide-res" href="{{ route('nosotros') }}">Acerca de nosotros</a>

                    <a href="{{ route('index') }}"><img class="logo" src="{{ asset('img/logo.svg') }}" alt="Logo"></a>
                    <a href="{{ route('index') }}"><img class="logo-sm" src="{{ asset('img/logo-sm.svg') }}" alt="Logo"></a>

                    <a class="hide-res" href="{{ route('social.club') }}"><ion-icon name="star"></ion-icon> Social Club</a>
                </div>
            </div>
            <div class="col-md-2">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#bookingModal" class="booking-btn"><ion-icon name="bookmark-outline"></ion-icon> Reserva</a>
            </div>
        </div>
    </div>
</nav>

@include('layouts.utilities.main_nav')

<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sistema de Reservaciones</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
        <img src="{{ asset('img/placeholder.svg') }}" class="img-fluid ms-auto me-auto mt-5 mb-5" width="80%" alt="">
        <h2>En construcción</h2>
        <p>Esta funcionalidad todavía no es accesible.</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-secondary">Continuar</button>
    </div>
    </div>
</div>
</div>
