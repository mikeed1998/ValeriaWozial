@extends('layouts.front')

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
                                <div class="col card-nav_titulo text-center py-2">
                                    ¡Hola AnaPAU!
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
                                                        <input type="text" id="nombre" class="form-control shadow-none">
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="apellido" class="form-control-label">Apellido(s)</label>
                                                        <input type="text" id="apellido" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 col-12">
                                                        <label for="telefono" class="form-control-label">Telefono</label>
                                                        <input type="text" id="telefono" class="form-control shadow-none">
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
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-9 col-11 mx-auto px-xxl-4 px-xl-3 px-lg-3 mb-4">
                                            <div class="card card-direccion p-3 rounded-0">
                                                <div class="row">
                                                    <div class="col card-prederteminada text-end" id="pre-1">
                                                        Predeterminada
                                                    </div>
                                                    <div class="col-9 mx-auto card-prederteminada text-center switchpreg" id="switchpre-1">
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault">Dejar como predeterminada</label>
                                                            <input class="form-check-input fs-5" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col card-nombre text-start">
                                                        Ana Paula Covarrubias
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col py-2 card-direccion_direccion" id="textod-1">
                                                        Real acueducto 335 piso 6, Puerta de Hierro, Zapopan, Jalisco 45116
                                                    </div>
                                                    <div class="col py-1 card-direccion_direccion editart">
                                                        <input type="text" class="form-control shadow-none" id="inputd-1">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col py-2" id="textot-1">
                                                        +52 3338096501
                                                    </div>
                                                    <div class="col py-1 editart">
                                                        <input type="text" class="form-control shadow-none" id="inputt-1">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col py-2" id="textoc-1">
                                                        anapaula@wozial.com
                                                    </div>
                                                    <div class="col py-1 editart">
                                                        <input type="text" class="form-control shadow-none" id="inputc-1">
                                                    </div>
                                                </div>
                                                <div class="row card-acciones">
                                                    <div class="col-xxl-4 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12"></div>
                                                    <div class="col-xxl-8 col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                                                        <div class="row">
                                                            <div class="col-6 text-end">
                                                                <a href="#/" class="card-acciones_link editarg" onclick="editar(1)" id="editarl-1">editar</a>
                                                                <a href="#/" class="card-acciones_link volverg" onclick="terminar(1)" id="volverl-1">Volver</a>
                                                            </div>
                                                            <div class="col-6 card-acciones_link">
                                                                <a href="#/" class="card-acciones_link">eliminar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7 col-sm-9 col-11 mx-auto px-xxl-4 px-xl-3 px-lg-3 mb-4">
                                            <div class="card card-direccion p-3 rounded-0">
                                                <div class="row">
                                                    <div class="col card-prederteminada text-end" id="pre-2">
                                                        
                                                    </div>
                                                    <div class="col-9 mx-auto card-prederteminada text-center switchpreg" id="switchpre-2">
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault2">Dejar como predeterminada</label>
                                                            <input class="form-check-input fs-5" type="checkbox" role="switch" id="flexSwitchCheckDefault2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col card-nombre text-start">
                                                        Ana Paula Covarrubias
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col py-2 card-direccion_direccion" id="textod-2">
                                                        Real acueducto 335 piso 6, Puerta de Hierro, Zapopan, Jalisco 45116
                                                    </div>
                                                    <div class="col py-1 card-direccion_direccion editart">
                                                        <input type="text" class="form-control shadow-none" id="inputd-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col py-2" id="textot-2">
                                                        +52 3338096501
                                                    </div>
                                                    <div class="col py-1 editart">
                                                        <input type="text" class="form-control shadow-none" id="inputt-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col py-2" id="textoc-2">
                                                        anapaula@wozial.com
                                                    </div>
                                                    <div class="col py-1 editart">
                                                        <input type="text" class="form-control shadow-none" id="inputc-2">
                                                    </div>
                                                </div>
                                                <div class="row card-acciones">
                                                    <div class="col-xxl-4 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12"></div>
                                                    <div class="col-xxl-8 col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                                                        <div class="row">
                                                            <div class="col-6 text-end">
                                                                <a href="#/" class="card-acciones_link editarg" onclick="editar(2)" id="editarl-2">editar</a>
                                                                <a href="#/" class="card-acciones_link volverg" onclick="terminar(2)" id="volverl-2">Volver</a>
                                                            </div>
                                                            <div class="col-6 card-acciones_link">
                                                                <a href="#/" class="card-acciones_link">eliminar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="staticBackdropLabel-direccion">Nueva dirección de envio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-11 mx-auto">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="nombre_user">Nombre de quien recibe</label>
                                    <input required type="text" id="nombre_user" value="Nombre de Usuario" class="form-control shadow-none" disabled>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="calle_user">Calle</label>
                                    <input required type="text" id="calle_user" class="form-control shadow-none">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="numext_user">Número exterior</label>
                                    <input required type="number" id="numext_user" class="form-control shadow-none">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="numint_user">Número interior</label>
                                    <input required type="number" id="numint_user" class="form-control shadow-none">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="calles_user">Entre calles</label>
                                    <input required type="text" id="calles_user" class="form-control shadow-none">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="colonia_user">Colonia</label>
                                    <input required type="text" id="colonia_user" class="form-control shadow-none">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="codiogp_user">Código Postal</label>
                                    <input required type="number" id="codiogp_user" class="form-control shadow-none">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="municipio_user">Municipio</label>
                                    <input required type="text" id="municipio_user" class="form-control shadow-none">
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="estado_user">Estado</label>
                                    <input required type="text" id="estado_user" class="form-control shadow-none">
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 py-2">
                                    <label for="pais_user">País</label>
                                    <input required type="text" id="estado_user" class="form-control shadow-none" value="México" disabled>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 d-flex align-items-center py-2">
                                    <div class="row mt-3">
                                        <div class="col-3 text-end">
                                            <input class="form-check-input" type="checkbox" value="" id="chkPred">
                                        </div>
                                        <div class="col-9 text-start">
                                            <label class="form-check-label " for="chkPred">
                                                Dejar como mi dirección prederteminada
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100">Agregar nueva dirección</button>
                   <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Cancelar</button>
                </div>
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



