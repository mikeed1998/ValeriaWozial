@extends('layouts.front')

@section('title', 'Contacto')

@section('cssExtras')

@endsection

@section('styleExtras')

@endsection

@section('content')

<style>

    /* Estilo personalizado para Toastr */
    .toast {
        background-color: #1e571e; /* Cambia el color de fondo según tus preferencias */
        color: #fff; /* Cambia el color del texto según tus preferencias */
        font-weight: 700;
        font-size: 1rem;
    }

    @font-face {
        font-family: 'Sackers Gothic Light AT Regular';
        src: url('../../vendor/fonts/Sackers_Gothic_Light_AT_Regular.otf') format('opentype');
    }

    @font-face {
        font-family: 'Futura Std Book';
        src: url('../../vendor/fonts/Futura_Std_Book.otf') format('opentype');
    }

    body {
        font-family: 'Futura Std Book', sans-serif;
        font-weight: 400;
    }

    div {
        font-family: 'Futura Std Book', sans-serif;
    }

    .card-acciones_link {
        text-decoration: none;
        color: #000000;
    }

    .card-acciones_link:hover {
        color:blue;
    }

    .dashboard-boton {
        color: #000000;
        border-color: #000000;
    }

    .dashboard-boton:hover {
        color: blue;
        border-color: blue;
    }

    .dashboard-link {
        color: #000000;
    }

    .dashboard-link:hover {
        color: blue;
    }

    .form-control {
        border-radius: 0;
        box-shadow: none;
    }

    input.form-control {
        border-top: none;
        border-left: none;
        border-right: none;
    }

    @media (min-width: 1800px) {
        .dashboard-link {
            font-size: 1.1rem;
        }

        .dashboard-link2 {
            font-size: 0.9rem;
        }

        .card-nav {
            height: 22rem;
            background-color: #F5F5F5;
        }

        .card-nav_titulo {
            background-color: #ECECEC;
            font-size: 2rem;
            height: 4rem;
        }

        iframe {
            height: 600px;
            width: 100%;
        }
    }

    @media (min-width: 1400px) and (max-width: 1799px) {
        .dashboard-link {
            font-size: 1rem;
        }

        .dashboard-link2 {
            font-size: 0.8rem;
        }

        .card-nav {
            height: 22rem;
            background-color: #F5F5F5;
        }

        .card-nav_titulo {
            background-color: #ECECEC;
            font-size: 1.5rem;
            height: 4rem;
        }

        iframe {
            height: 400px;
            width: 100%;
        }
    }

    @media (min-width: 1200px) and (max-width: 1399px) {
        .dashboard-link {
            font-size: 1.1rem;
        }

        .dashboard-link2 {
            font-size:  0.9rem;
        }

        .card-nav {
            height: 21rem;
            background-color: #F5F5F5;
        }

        .card-nav_titulo {
            background-color: #ECECEC;
            font-size: 1.2rem;
            height: 4rem;
        }

        iframe {
            height: 300px;
            width: 100%;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .dashboard-link {
            font-size: 1.1rem;
        }

        .dashboard-link2 {
            font-size:  0.9rem;
        }

        .card-nav {
            height: 21rem;
            background-color: #F5F5F5;
        }

        .card-nav_titulo {
            background-color: #ECECEC;
            font-size: 1.2rem;
            height: 4rem;
        }

        iframe {
            height: 300px;
            width: 100%;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .dashboard-link {
            font-size: 1.1rem;
        }

        .dashboard-link2 {
            font-size:  0.9rem;
        }

        .card-nav {
            height: 21rem;
            background-color: #F5F5F5;
        }

        .card-nav_titulo {
            background-color: #ECECEC;
            font-size: 1.2rem;
            height: 4rem;
        }

        iframe {
            height: 300px;
            width: 100%;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .dashboard-link {
            font-size: 1.1rem;
        }

        .dashboard-link2 {
            font-size: 0.9rem;
        }

        .card-nav {
            height: 21rem;
            background-color: #F5F5F5;
        }

        .card-nav_titulo {
            background-color: #ECECEC;
            font-size: 1.2rem;
            height: 4rem;
        }

        iframe {
            height: 300px;
            width: 100%;
        }
    }

    @media (min-width: 320px) and (max-width: 480px) {
        .dashboard-link {
            font-size: 1.1rem;
        }

        .dashboard-link2 {
            font-size: 0.9rem;
        }

        .card-nav {
            height: 21rem;
            background-color: #F5F5F5;
        }

        .card-nav_titulo {
            background-color: #ECECEC;
            font-size: 1.2rem;
            height: 4rem;
        }

        iframe {
            height: 300px;
            width: 100%;
        }
    }

    @media (min-width: 0px) and (max-width: 319px) {
        .dashboard-link {
            font-size: 1.1rem;
        }

        .dashboard-link2 {
            font-size: 0.9rem;
        }

        .card-nav {
            height: 21rem;
            background-color: #F5F5F5;
        }

        .card-nav_titulo {
            background-color: #ECECEC;
            font-size: 1.2rem;
            height: 4rem;
        }

        iframe {
            height: 300px;
            width: 100%;
        }
    }

</style>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-11 col-11 mx-auto">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-12"></div>
                        <div class="col-xxl-6 col-xl-6 col-lg-11 mx-auto">
                            <div class="row mt-5">
                                <div class="col card-nav_titulo text-center py-2" style="overflow: hidden;">
                                    Contacto
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col card-nav">
                                    <div class="row pt-5">
                                        <div class="col-xxl-9 col-xl-9 col-lg-10 col-md-11 col-sm-12 col-12 mx-auto">
                                            <div class="row">
                                                <div class="col-11 mx-auto dashboard-link2 text-center">33 33 33 33 33</div>
                                                <div class="col-12 py-2"><hr class="m-0"></div>
                                                <div class="col-11 mx-auto dashboard-link2">contacto@valeria.com</div>
                                                <div class="col-12 py-2"><hr class="m-0"></div>
                                                <div class="col-11 mx-auto dashboard-link2" style="text-align: justify;">Real acueducto 335 piso 6, Puerta de Hierro, Zapopan, Jalisco 45116</div>
                                                {{-- <div class="col-12"><hr class="m-0"></div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-11 col-sm-11 col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 mx-auto" id="dashboard-cuenta">
                    <div class="row">
                        <div class="col-11 mt-5 mx-auto">
                            <div class="row">
                                <div class="col-12">
                                    <form action="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                                <input type="text" class="form-control shadow-none mb-4" placeholder="Nombre">
                                            </div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                                <input type="text" class="form-control shadow-none mb-4" placeholder="Teléfono">
                                            </div>

                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                                <input type="text" class="form-control shadow-none mb-4" placeholder="Correo">
                                            </div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                                <input type="text" class="form-control shadow-none mb-4" placeholder="Asunto">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12">
                                                <label for="mensaje" class="mb-2">Mensaje</label>
                                                <textarea name="mensaje" id="mensaje" cols="30" rows="6" class="form-control shadow-none"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-auto mx-sm-auto mx-auto">
                                                <form method="POST" action="{{ route('logout') }}" id="cerrar-sesion">
                                                    @csrf
                                                    <button type="submit" class="btn btn-ooutline w-100 rounded-0 py-3 dashboard-boton">CERRAR SESIÓN</button>
                                                </form>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-xxl-9 col-xl-9 col-lg-11 col-md-11 col-sm-11 col-11 px-0 mx-auto border">
                    {{-- <iframe src="" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    <iframe class="mapa w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.6744194801922!2d-103.39920042400844!3d20.642123600944444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0ed241a9bb%3A0xbb4c3906c38265fd!2sWozial%20Marketing%20Lovers!5e0!3m2!1sen!2smx!4v1708034343281!5m2!1sen!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('jqueryExtra')
<script>

</script>
@endsection
