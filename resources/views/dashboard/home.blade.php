@extends('layouts.front')

@section('title', 'Dashboard')

@section('cssExtras')
    <link rel="stylesheet" href="{{ asset('css/front/dashboard.css') }}">
@endsection




@section('content')
<style>
    .textog {
        display: block;
    }

    .editart {
        display: none;
    }

    .volverg {
        display: none;
    }

    .switchpreg {
        display: none;
    }

    #dashboard-pedidos {
        display: none;
    }

    #dashboard-direcciones {
        display: none;
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

@media (min-width: 1800px) {
    .card-direccion {
        font-size: 1rem;
        height: 24rem;
    }

    .card-prederteminada {
        font-weight: 500;
        height: 3.6rem;
    }

    .card-nombre {
        font-weight: 500;
    }

    .card-acciones {
        margin-top: 6rem;
        font-weight: 500;
    }

    .dashboard-link {
        font-size: 1.1rem;
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

    .card-titulo {
        font-size: 2rem;
        height: 4rem;
    }

    .card-direccion_direccion {
        max-height: 4rem;
        overflow: hidden;
        text-align: justify;
    }
}

@media (min-width: 1400px) and (max-width: 1799px) {
    .card-direccion {
        font-size: 0.9rem;
        height: 22rem;
    }

    .card-prederteminada {
        font-weight: 500;
        height: 3.6rem;
    }

    .card-nombre {
        font-weight: 500;
    }

    .card-acciones {
        margin-top: 5.8rem;
        font-weight: 500;
    }

    .dashboard-link {
        font-size: 1.1rem;
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

    .card-titulo {
        font-size: 1.5rem;
        height: 4rem;
    }

    .card-direccion_direccion {
        max-height: 4rem;
        overflow: hidden;
        text-align: justify;
    }
}

@media (min-width: 1200px) and (max-width: 1399px) {
    .card-direccion {
        font-size: 0.9rem;
        height: 21rem;
    }

    .card-prederteminada {
        font-weight: 500;
        height: 3.6rem;
    }

    .card-nombre {
        font-weight: 500;
    }

    .card-acciones {
        margin-top: 4.8rem;
        font-weight: 500;
    }

    .dashboard-link {
        font-size: 1.1rem;
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

    .card-titulo {
        font-size: 2rem;
        height: 4rem;
    }

    .card-direccion_direccion {
        max-height: 3rem;
        overflow: hidden;
        text-align: justify;
    }
}

@media (min-width: 992px) and (max-width: 1199px) {
    .card-direccion {
        font-size: 0.9rem;
        height: 21rem;
    }

    .card-prederteminada {
        font-weight: 500;
        height: 3.6rem;
    }

    .card-nombre {
        font-weight: 500;
    }

    .card-acciones {
        margin-top: 4.8rem;
        font-weight: 500;
    }

    .dashboard-link {
        font-size: 1.1rem;
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

    .card-titulo {
        font-size: 2rem;
        height: 4rem;
    }

    .card-direccion_direccion {
        max-height: 3rem;
        overflow: hidden;
        text-align: justify;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .card-direccion {
        font-size: 0.9rem;
        height: 21rem;
    }

    .card-prederteminada {
        font-weight: 500;
        height: 3.6rem;
    }

    .card-nombre {
        font-weight: 500;
    }

    .card-acciones {
        margin-top: 4.8rem;
        font-weight: 500;
    }

    .dashboard-link {
        font-size: 1.1rem;
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

    .card-titulo {
        font-size: 2rem;
        height: 4rem;
    }

    .card-direccion_direccion {
        max-height: 4rem;
        overflow: hidden;
        text-align: justify;
    }
}

@media (min-width: 576px) and (max-width: 767px) {
    .card-direccion {
        font-size: 0.9rem;
        height: 21rem;
    }

    .card-prederteminada {
        font-weight: 500;
        height: 3.6rem;
    }

    .card-nombre {
        font-weight: 500;
    }

    .card-acciones {
        margin-top: 4.8rem;
        font-weight: 500;
    }

    .dashboard-link {
        font-size: 1.1rem;
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

    .card-titulo {
        font-size: 2rem;
        height: 4rem;
    }

    .card-direccion_direccion {
        max-height: 4rem;
        overflow: hidden;
        text-align: justify;
    }
}

@media (min-width: 320px) and (max-width: 480px) {
    .card-direccion {
        font-size: 0.9rem;
        height: 21rem;
    }

    .card-prederteminada {
        font-weight: 500;
        height: 3.6rem;
    }

    .card-nombre {
        font-weight: 500;
    }

    .card-acciones {
        margin-top: 4.8rem;
        font-weight: 500;
    }

    .dashboard-link {
        font-size: 1.1rem;
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

    .card-titulo {
        font-size: 2rem;
        height: 4rem;
    }

    .card-direccion_direccion {
        max-height: 4rem;
        overflow: hidden;
        text-align: justify;
    }
}

@media (min-width: 0px) and (max-width: 319px) {
    .card-direccion {
        font-size: 0.9rem;
        height: 21rem;
    }

    .card-prederteminada {
        font-weight: 500;
        height: 3.6rem;
    }

    .card-nombre {
        font-weight: 500;
    }

    .card-acciones {
        margin-top: 4.8rem;
        font-weight: 500;
    }

    .dashboard-link {
        font-size: 1.1rem;
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

    .card-titulo {
        font-size: 2rem;
        height: 4rem;
    }

    .card-direccion_direccion {
        max-height: 4rem;
        overflow: hidden;
        text-align: justify;
    }
}

    @media (min-width: 1800px) {
        .miniatura-producto {
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            width: 5rem;
            height: 2rem;
        }
    }

    @media (min-width: 1400px) and (max-width: 1799px) {
        .miniatura-producto {
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            width: 5rem;
            height: 2rem;
        }
    }

    @media (min-width: 1200px) and (max-width: 1399px) {
        .miniatura-producto {
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            width: 5rem;
            height: 2rem;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .miniatura-producto {
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            width: 5rem;
            height: 2rem;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .miniatura-producto {
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            width: 5rem;
            height: 2rem;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .miniatura-producto {
            margin-top: 1rem;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            border-radius: 100%;
            width: 20rem;
            height: 10rem;
        }
    }

    @media (min-width: 320px) and (max-width: 480px) {
        .miniatura-producto {
            margin-top: 1rem;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            border-radius: 100%;
            width: 12rem;
            height: 6rem;
        }
    }

    @media (min-width: 0px) and (max-width: 319px) {
        .miniatura-producto {
            margin-top: 1rem;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            border-radius: 100%;
            width: 7rem;
            height: 3.5rem;
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
                                    Hola {{ $usuario->name }}!
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col card-nav">
                                    <div class="row pt-5">
                                        <div class="col-xxl-9 col-xl-9 col-lg-10 col-md-11 col-sm-12 col-12 mx-auto">
                                            <div class="row">
                                                <div class="col-11 mx-auto"><a href="#/" class="btn btn-outline border-0 dashboard-link" id="opc-pedidos">Pedidos</a></div>
                                                <div class="col-12"><hr class="m-0"></div>
                                                <div class="col-11 mx-auto"><a href="#/" class="btn btn-outline border-0 dashboard-link" id="opc-cuenta">Mi cuenta</a></div>
                                                <div class="col-12"><hr class="m-0"></div>
                                                <div class="col-11 mx-auto"><a href="#/" class="btn btn-outline border-0 dashboard-link" id="opc-direcciones">Direcciones</a></div>
                                                <div class="col-12"><hr class="m-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 px-0">
                                    <form action="{{ route('logout') }}" method="POST" id="cerrar-sesion">
                                        <button type="submit" class="btn btn-ooutline w-100 fs-5 rounded-0 py-3 dashboard-boton">CERRAR SESIÓN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-11 col-sm-11 col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 mx-auto" id="dashboard-pedidos">
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row mt-5">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-7 col-sm-9 col-11 mx-auto card-titulo py-2 px-xxl-4 px-xl-2 px-lg-3">
                                            PEDIDOS
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col px-0">
                                            <div class="card py-2" style="background-color: #F5F7FF;">
                                                <div class="row">
                                                    <div class="col-11 mx-auto py-xxl-1 py-xl-1 py-lg-4 py-md-4 py-sm-4 py-4 border rounded-pill bg-white">
                                                        <div class="row">
                                                            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-5 col-sm-11 col-11 mx-auto">
                                                                <div class="card">
                                                                    <small class="py-1 px-3" style="background-color: #F5F7FF;">
                                                                        Num.p: ord_2usQgqe8yg2U9FmY4
                                                                    </small>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-2 col-sm-11 col-11 mx-auto py-1">
                                                                <small>Total: $230.00</small>
                                                            </div>
                                                            <div class="col-xxl-5 col-xl-5 col-lg-12 col-md-5 col-sm-11 col-11 mx-auto py-1">
                                                                <div class="row">
                                                                    <div class="col mx-auto">
                                                                        <div class="row">
                                                                            <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-6 col-sm-8 col-8 text-end">
                                                                                <small>Aprobado y en proceso</small>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <i class="fa-solid fa-circle ms-3 my-auto aprobado"></i>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <div style="color: black;" data-bs-toggle="modal" data-bs-target="#staticBackdrop-1"><i class="fa-solid fa-eye mx-3 botonopacity"  onclick="verPediso(1)"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Detalles de la compra</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row p-2">
                                                            <div class="col-12 py-1">
                                                                <div class="card shadow border-0 p-2 rounded-pill">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-12">
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-9 mx-auto text-center">
                                                                                    <div class="miniatura-producto" style="
                                                                                        background-image: url('img/index/american_express.png');
                                                                                    "></div>
                                                                                </div>
                                                                                <div class="col-md-6 col-12 text-xxl-start text-xl-start text-lg-start text-md-start text-sm-center text-center">
                                                                                    Producto 1
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-12 text-center">
                                                                            <div class="row">
                                                                                <div class="col text-xxl-end text-xl-end text-lg-end text-md-end text-sm-center text-center">
                                                                                    Cantidad: 1
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-12 text-center">
                                                                            Precio Unidad: 130
                                                                        </div>
                                                                        <div class="col-md-3 col-12 text-xxl-end text-xl-end text-lg-end text-md-end text-sm-center text-center">
                                                                            <a href="#/"><i class="fa-solid fa-eye mx-3 botonopacity"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 py-1">
                                                                <div class="card shadow border-0 p-2 rounded-pill">
                                                                    <div class="row">
                                                                    <div class="col-md-3 col-12">
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-9 mx-auto text-center">
                                                                                    <div class="miniatura-producto" style="
                                                                                        background-image: url('img/index/logo.png');
                                                                                    "></div>
                                                                                </div>
                                                                                <div class="col-md-6 col-12 text-xxl-start text-xl-start text-lg-start text-md-start text-sm-center text-center">
                                                                                    Producto 1
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-12 text-center">
                                                                            <div class="row">
                                                                                <div class="col text-xxl-end text-xl-end text-lg-end text-md-end text-sm-center text-center">
                                                                                    Cantidad: 1
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 col-12 text-center">
                                                                            Precio Unidad: 130
                                                                        </div>
                                                                        <div class="col-md-3 col-12 text-xxl-end text-xl-end text-lg-end text-md-end text-sm-center text-center">
                                                                            <a href="#/"><i class="fa-solid fa-eye mx-3 botonopacity"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 p-2">
                                                            <div class="col">
                                                                <div class="card shadow border-0 p-4" style="border-top-left-radius: 32px; border-bottom-left-radius: 32px; border-top-right-radius: 32px; border-bottom-right-radius: 32px;">
                                                                    <div class="row">
                                                                        <div class="col py-2 fs-5">
                                                                            Resumen de la compra
                                                                        </div>
                                                                    </div>
                                                                    <div class="row my-3">
                                                                        <div class="col">
                                                                            <div class="card border-0 py-3" style="border-top-left-radius: 32px; border-bottom-left-radius: 32px; border-top-right-radius: 32px; border-bottom-right-radius: 32px; background-color: #F5F7FF;">
                                                                                <div class="row px-5">
                                                                                    <div class="col-md-4 col-12 fw-bolder text-start">
                                                                                        Nombre
                                                                                    </div>
                                                                                    <div class="col-md-4 col-12 fw-bolder text-end">
                                                                                        Cantidad
                                                                                    </div>
                                                                                    <div class="col-md-4 col-12 fw-bolder text-end">
                                                                                        Precio
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row px-5 py-1">
                                                                                    <div class="col-12 border-top border-dark border-2"></div>
                                                                                    <div class="col-md-4 col-12 text-start">
                                                                                        Producto 1
                                                                                    </div>
                                                                                    <div class="col-md-4 col-12 text-end">
                                                                                        1
                                                                                    </div>
                                                                                    <div class="col-md-4 col-12 text-end">
                                                                                        $1200
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row px-5 py-1">
                                                                                    <div class="col-12 border-top border-dark border-2"></div>
                                                                                    <div class="col-md-4 col-12 text-start">
                                                                                        Producto 1
                                                                                    </div>
                                                                                    <div class="col-md-4 col-12 text-end">
                                                                                        1
                                                                                    </div>
                                                                                    <div class="col-md-4 col-12 text-end">
                                                                                        $1200
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col fs-5">
                                                                        <div class="row">
                                                                                <div class="col-6 text-start">
                                                                                    Envio
                                                                                </div>
                                                                                <div class="col-6 text-end">
                                                                                    $100
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col fs-4 fw-bolder">
                                                                            <div class="row">
                                                                                <div class="col-6 text-start">
                                                                                    Total
                                                                                </div>
                                                                                <div class="col-6 text-end">
                                                                                    $230
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Salir</button>
                                                    </div>
                                                </div>
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
                        <div class="col-10 mx-auto">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row mt-5">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-7 col-sm-9 col-11 mx-auto card-titulo py-2 px-xxl-4 px-xl-2 px-lg-3">
                                            MI CUENTA
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col px-0">
                                            <div class="card p-3">
                                                <div class="row">
                                                    <div class="col py-2 text-center">
                                                        Información básica
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <label for="nombre" class="form-control-label">Nombre(s)</label>
                                                        <input type="text" id="nombres" class="form-control shadow-none editar_text_seccion_global editarajax" data-url="{{ route('config.seccion.textglobalseccion') }}" data-id="{{ $usuario->id }}" data-table="User" data-campo="name" value="{{ $usuario->name }}">
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="apellido" class="form-control-label">Apellido(s)</label>
                                                        <input type="text" id="apellido" class="form-control shadow-none editar_text_seccion_global editarajax" data-url="{{ route('config.seccion.textglobalseccion') }}" data-id="{{ $usuario->id }}" data-table="User" data-campo="lastname" value="{{ $usuario->lastname }}">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 col-12">
                                                        <label for="telefono" class="form-control-label">Telefono</label>
                                                        <input type="text" id="telefono" class="form-control shadow-none editar_text_seccion_global editarajax" data-url="{{ route('config.seccion.textglobalseccion') }}" data-id="{{ $usuario->id }}" data-table="User" data-campo="telefono" value="{{ $usuario->telefono }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-11 col-sm-11 col-12 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 mx-auto" id="dashboard-direcciones">
                    <div class="row">
                        <div class="col-xxl-10 col-xl-10 col-lg-11 mx-auto">
                            <div class="row">
                                <div class="col-xxl-10 col-xl-10 col-lg-11">
                                    <div class="row mt-5">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-7 col-sm-9 col-11 mx-auto card-titulo py-2 px-xxl-4 px-xl-2 px-lg-3">
                                            DIRECCIONES
                                        </div>
                                    </div>
                                    <div class="row mt-3">

                                        @foreach ($direcciones as $direccion)
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-9 col-11 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-auto mx-sm-auto mx-auto px-xxl-4 px-xl-3 px-lg-3 mb-4">
                                                <div class="card card-direccion p-3 rounded-0">
                                                    <div class="row">
                                                        <div class="col card-prederteminada text-end" id="pre-{{ $direccion->id }}">
                                                            @if ($direccion->predeterminado == 1)
                                                                Predeterminada
                                                            @endif
                                                        </div>
                                                        <div class="col-9 mx-auto card-prederteminada text-center switchpreg" id="switchpre-{{ $direccion->id }}">
                                                            <div class="form-check form-switch">
                                                                <label class="form-check-label" for="flexSwitchCheckDefault">Dejar como predeterminada</label>
                                                                <input class="form-check-input fs-5" role="switch" id="checkIni_{{$direccion->id}}" data-id="{{$direccion->id}}" data-campo="predeterminado" type="checkbox" @if($direccion->predeterminado == 1) checked @endif>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col card-nombre text-start">
                                                            {{ $usuario->name }} {{ $usuario->lastname }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col py-2 card-direccion_direccion" id="textod-{{ $direccion->id }}">
                                                            {{ $direccion->direccion }}
                                                        </div>
                                                        <div class="col py-1 card-direccion_direccion editart">
                                                            <input type="text" class="form-control shadow-none editar_text_seccion_global editarajax" id="inputd-{{ $direccion->id }}" data-url="{{ route('config.seccion.textglobalseccion') }}" data-id="{{ $direccion->id }}" data-table="ValeriaDireccionUsuario" data-campo="direccion" value="{{ $direccion->direccion }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col py-2" id="textot-{{ $direccion->id }}">
                                                            {{ $direccion->telefono_loc }}
                                                        </div>
                                                        <div class="col py-1 editart">
                                                            <input type="text" class="form-control shadow-none editar_text_seccion_global editarajax" id="inputt-{{ $direccion->id }}" data-url="{{ route('config.seccion.textglobalseccion') }}" data-id="{{ $direccion->id }}" data-table="ValeriaDireccionUsuario" data-campo="telefono_loc" value="{{ $direccion->telefono_loc }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col py-2" id="textoc-{{ $direccion->id }}">
                                                            {{ $direccion->correo_loc }}
                                                        </div>
                                                        <div class="col py-1 editart">
                                                            <input type="text" class="form-control shadow-none editar_text_seccion_global editarajax" id="inputc-{{ $direccion->id }}" data-url="{{ route('config.seccion.textglobalseccion') }}" data-id="{{ $direccion->id }}" data-table="ValeriaDireccionUsuario" data-campo="correo_loc" value="{{ $direccion->correo_loc }}">
                                                        </div>
                                                    </div>
                                                    <div class="row card-acciones">
                                                        <div class="col-xxl-4 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12"></div>
                                                        <div class="col-xxl-8 col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                                                            <div class="row">
                                                                <div class="col-6 text-end">
                                                                    <a href="#/" class="card-acciones_link editarg" onclick="editar({{ $direccion->id }})" id="editarl-{{ $direccion->id }}">editar</a>
                                                                    <a href="#/" class="card-acciones_link volverg" onclick="terminar({{ $direccion->id }})" id="volverl-{{ $direccion->id }}">Volver</a>
                                                                </div>
                                                                <div class="col-6 card-acciones_link">
                                                                    <a href="#/" class="card-acciones_link">eliminar</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $('#checkIni_'+{{$direccion->id}}).change(function (e){
                                                    var checkbox = $(this); // Almacenar una referencia al elemento
                                                    console.log('checkIni_'+{{$direccion->id}});
                                                    var check = 0;
                                                    if (checkbox.prop('checked')) {
                                                        check = 1;
                                                    } else {
                                                        check = 2;
                                                    }
                                                    console.log(check);
                                                    var id = checkbox.attr("data-id");
                                                    var tcsrf = $('meta[name="csrf-token"]').attr('content');
                                                    var valor = check;
                                                    var URL = "{{route('front.updateDireccion')}}";

                                                    $.ajax({
                                                        url: URL,
                                                        type: 'post',
                                                        dataType: 'json',
                                                        data: {
                                                            "_method": 'post',
                                                            "_token": tcsrf,
                                                            "id": id,
                                                            "valor": valor
                                                        }
                                                    })
                                                    .done(function(msg) {
                                                        console.log(msg);
                                                        if (msg.success) {
                                                            toastr["success"](msg.mensaje);
                                                            if (msg.mensaje.valor == 1) {
                                                                checkbox.prop('checked', true);
                                                            } else if (msg.mensaje.valor == 2) {
                                                                checkbox.prop('checked', false);
                                                            }
                                                        } else {
                                                            toastr["error"](msg.mensaje);
                                                        }
                                                    })
                                                    .fail(function(msg) {
                                                        toastr["error"]('Error al agregar el producto al inicio');
                                                    });
                                                });
                                            </script>
                                        @endforeach

                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-9 col-11 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-auto mx-sm-auto mx-auto px-xxl-4 px-xl-1 px-lg-3">
                                            <div class="card position-relative rounded-0" style="height: 24rem;">
                                                <div class="col-6 position-absolute top-50 start-50 translate-middle">
                                                    <a href="#/" class="card-acciones_link" data-bs-toggle="modal" data-bs-target="#staticBackdrop-direccion">
                                                        <div class="row">
                                                            <div class="col text-center">
                                                                <i class="bi bi-plus-circle display-5"></i>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 text-center card-nombre">
                                                                Añadir nueva dirección
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
    <div class="modal fade" id="staticBackdrop-direccion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-direccion" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form action="{{ route('front.createDireccion') }}" method="POST" id="formu-direccion">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-4" id="staticBackdropLabel-direccion">Nueva dirección de envio</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-11 mx-auto">
                                <div class="row">
                                    <input type="hidden" name="usuario" value="{{ $usuario->id }}">
                                    <input type="hidden" name="nombre_usuario" value="{{ $usuario->name }} {{ $usuario->lastname }}">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="nombre_atte">Tu nombre o quien recibirá a tu nombre</label>
                                        <input required type="text" id="nombre_atte" name="nombre_atte" class="form-control shadow-none" value="{{ $usuario->name }} {{ $usuario->lastname }}">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="calle_user">Calle</label>
                                        <input required type="text" id="calle_user" name="calle_user" class="form-control shadow-none">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="numext_user">Número exterior</label>
                                        <input required type="number" id="numext_user" name="numext_user" class="form-control shadow-none">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="numint_user">Número interior</label>
                                        <input required type="number" id="numint_user" name="numint_user" class="form-control shadow-none">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="calles_user">Entre calles</label>
                                        <input required type="text" id="calles_user" name="calles_user" class="form-control shadow-none">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="colonia_user">Colonia</label>
                                        <input required type="text" id="colonia_user" name="colonia_user" class="form-control shadow-none">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="codiogp_user">Código Postal</label>
                                        <input required type="number" id="codiogp_user" name="codiogp_user" class="form-control shadow-none">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="municipio_user">Municipio</label>
                                        <input required type="text" id="municipio_user" name="municipio_user" class="form-control shadow-none">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="telefono_loc">Telefono (o usar el de tu cuenta por defecto)</label>
                                        <input required type="text" id="telefono_loc" name="telefono_loc" class="form-control shadow-none" value="{{ $usuario->telefono }}">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="correo_loc">Correo (o usar el de tu cuenta por defecto)</label>
                                        <input required type="email" id="correo_loc" name="correo_loc" class="form-control shadow-none" value="{{ $usuario->email }}">
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="estado_user">Estado</label>
                                        <input required type="text" id="estado_user" name="estado_user" class="form-control shadow-none">
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 py-2">
                                        <label for="pais_user">País</label>
                                        <input required type="text" id="pais_user" name="pais_user" class="form-control shadow-none" value="México">
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 d-flex align-items-center py-2">
                                        <div class="row mt-3">
                                            <div class="col-3 text-end">
                                                <input type="hidden" name="chkPred" value="0"> <!-- Campo oculto -->
                                                <input class="form-check-input" type="checkbox" id="chkPred" name="chkPred" value="1">
                                            </div>
                                            <div class="col-9 text-start">
                                                <label class="form-check-label" for="chkPred">
                                                    Dejar como mi dirección predeterminada
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary w-100">Agregar nueva dirección</button>
                    <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('jsLibExtras2')

<script>

        function editar(indice) {
            document.getElementById(`pre-${indice}`).style.display = 'none';
            document.getElementById(`switchpre-${indice}`).style.display = 'block';

            document.getElementById(`editarl-${indice}`).style.display = 'none';
            document.getElementById(`volverl-${indice}`).style.display = 'block';

            document.getElementById(`textod-${indice}`).style.display = 'none';
            document.getElementById(`textot-${indice}`).style.display = 'none';
            document.getElementById(`textoc-${indice}`).style.display = 'none';

            document.getElementById(`inputd-${indice}`).parentNode.style.display = 'block';
            document.getElementById(`inputt-${indice}`).parentNode.style.display = 'block';
            document.getElementById(`inputc-${indice}`).parentNode.style.display = 'block';
            // document.getElementById(`input-${indice}`).value = document.getElementById(`texto-${indice}`).innerText;
            // document.getElementById(`input-${indice}`).parentNode.style.display = 'block';
        }

        function terminar(indice) {
            document.getElementById(`pre-${indice}`).style.display = 'block';
            document.getElementById(`switchpre-${indice}`).style.display = 'none';

            document.getElementById(`editarl-${indice}`).style.display = 'block';
            document.getElementById(`volverl-${indice}`).style.display = 'none';

            document.getElementById(`textod-${indice}`).style.display = 'block';
            document.getElementById(`textot-${indice}`).style.display = 'block';
            document.getElementById(`textoc-${indice}`).style.display = 'block';

            document.getElementById(`inputd-${indice}`).parentNode.style.display = 'none';
            document.getElementById(`inputt-${indice}`).parentNode.style.display = 'none';
            document.getElementById(`inputc-${indice}`).parentNode.style.display = 'none';
        }

    </script>
    <script>
        // Espera a que el DOM esté completamente cargado
        $(document).ready(function () {
            // Obtiene los enlaces y los divs por sus ids usando jQuery
            var enlacePedidos = $("#opc-pedidos");
            var enlaceCuenta = $("#opc-cuenta");
            var enlaceDirecciones = $("#opc-direcciones");

            var divPedidos = $("#dashboard-pedidos");
            var divCuenta = $("#dashboard-cuenta");
            var divDirecciones = $("#dashboard-direcciones");

            // Función para ocultar todos los divs y restablecer estilos de enlaces
            function ocultarTodos() {
                divPedidos.hide();
                divCuenta.hide();
                divDirecciones.hide();

                // Restablece los estilos de los enlaces
                enlacePedidos.removeClass("activo");
                enlaceCuenta.removeClass("activo");
                enlaceDirecciones.removeClass("activo");
            }

            // Oculta por defecto los divs que no quieres mostrar al cargar la página
            ocultarTodos();
            divCuenta.show(); // Muestra por defecto el contenido de dashboard-cuenta
            enlaceCuenta.addClass("activo"); // Establece el enlace como activo por defecto

            // Agrega un event listener a cada enlace
            enlacePedidos.on("click", function () {
                ocultarTodos();
                divPedidos.show();
                enlacePedidos.addClass("activo");
            });

            enlaceCuenta.on("click", function () {
                ocultarTodos();
                divCuenta.show();
                enlaceCuenta.addClass("activo");
            });

            enlaceDirecciones.on("click", function () {
                ocultarTodos();
                divDirecciones.show();
                enlaceDirecciones.addClass("activo");
            });
        });
    </script>
    <script>

        var modal = document.querySelector('.menu-modal');
        modal.style.display = "none";
        var inputCupon = document.querySelector('.input-cupon');
        inputCupon.style.display = "block";

        function activarModal() {
            modal.style.display = "block";
        }

        function cerrarModal() {
            modal.style.display = "none";
        }

        function cancelarCupon() {
            inputCupon.style.display = "none";
        }

        function quitarCarrito(id) {
            // Obtén el elemento con el ID específico
            var elementoCarrito = document.getElementById("art-carrito-" + id);

            // Oculta el elemento
            if (elementoCarrito) {
                elementoCarrito.style.display = "none";
            }
        }

    </script>
    <script>

        var modal_sm = document.querySelector('.menu-modal-sm');
        modal_sm.style.display = "none";
        var inputCuponsm = document.querySelector('.input-cupon-sm');
        inputCuponsm.style.display = "block";

        function activarModalsm() {
            modal_sm.style.display = "block";
        }

        function cerrarModalsm() {
            modal_sm.style.display = "none";
        }

        function cancelarCuponsm() {
            inputCuponsm.style.display = "none";
        }


        function quitarCarritosm(id) {
            // Obtén el elemento con el ID específico
            var elementoCarritosm = document.getElementById("art-carrito-sm-" + id);

            // Oculta el elemento
            if (elementoCarritosm) {
                elementoCarritosm.style.display = "none";
            }
        }

    </script>
    <script>
     $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
    </script>
@endsection





{{-- @extends('layouts.app')

@section('title','Home')
@section('content')
<div class="col-12 px-3 mt-3 d-flex justify-content-center  align-items-center">
    <div class="col-4 d-flex justify-content-center align-items-center" style="">
        <div class="" style="width: 100px; height: 100px; background: ; border-radius: 50%;">
            <img src="{{asset('img/design/userIcon.png')}}" style="width: 100%;" alt="">
        </div>
    </div>
    <div class="col-8 d-flex flex-column" style="background: ; height: 100%;">
        <h1>{{$usuario->name." ".$usuario->lastname}}</h1>
        <h5>Email: {{$usuario->email}}</h5>
    </div>
</div>
<div class="container">
    <hr>
    <div class="col-12 py-3 px-3">
        <h6 class="col-12 text-center">Información básica</h6>
        <div class="col-12 ">
                <div class="col-12 my-3 d-flex px-4">
                    <div class="col-6 px-5">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control usuario_txt_change" data-id-cliente="{{$usuario->id}}" data-campo="name" id="" aria-describedby="" value="{{$usuario->name}}">
                    </div>
                    <div class="col-6 px-5">
                      <label for="" class="form-label">Apellido</label>
                      <input type="text" class="form-control usuario_txt_change" data-id-cliente="{{$usuario->id}}" data-campo="lastname" id="" aria-describedby="" value="{{$usuario->lastname}}">
                    </div>
                </div>
                <div class="col-12 px-4">
                    <div class="mb-3 col-6 px-5">
                        <label for="" class="form-label">Telefono</label>
                        <input type="text" class="form-control usuario_txt_change" data-id-cliente="{{$usuario->id}}" data-campo="telefono" id="" value="{{$usuario->telefono}}">
                    </div>
                </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
        $('.usuario_txt_change').change(function (e){

        var valor = $(this).val();
        var campo = $(this).data('campo');
        var id_u = $(this).data('id-cliente');

        console.log(valor, campo, id_u);

        var csrf = $('meta[name="csrf-token"]').attr('content');
        var URL = "{{route('update_perfil')}}";
        $.ajax({
            method: "POST",
            url: URL,
            data: {
                "_method": 'post',
                "_token": csrf,
                id: id_u,
                campo: campo,
                valor: valor
            }
        })
        .done(function(msg) {
            if (msg.success) {
                toastr["success"](msg.mensaje);
            }else{
                toastr["error"](msg.mensaje);
            }
        });

        });
</script>
@endsection --}}
