<style>
    @font-face {
        font-family: 'Sackers Gothic Light AT Regular';
        src: url('../../vendor/fonts/Sackers_Gothic_Light_AT_Regular.otf') format('opentype');
    }

    @font-face {
        font-family: 'Futura Std Book';
        src: url('../../vendor/fonts/Futura_Std_Book.otf') format('opentype');
    }

    .col, .row, .container-fluid, .container {
        font-family: 'Futura Std Book', sans-serif;
        font-weight: 400;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('css/front/header.css') }}">

<header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xxl-block d-xl-block d-lg-block d-md-block d-sm-none d-none">
                <div class="row header-sec_1">
                    <div class="col-11 mx-auto py-3">
                        <div class="row">
                            <div class="col-xxl-7 col-xl-8 col-lg-6"></div>
                            <div class="col-xxl-5 col-xl-4 col-lg-6">
                                <div class="row">
                                    <div class="col-6 text-end header-sec_1--texto">
                                        <div class="row">
                                            <div class="col-9 mx-auto">
                                                <a href="#/" id="link-buscar" class="link-header" style="font-family: 'Futura Std Book', sans-serif;">Buscar</a>
                                                <div class="row" id="barra-busqueda" style="display: none;">
                                                    <div class="col-10 position-relative">
                                                        <form action="" method="POST">
                                                            @csrf
                                                            <input type="text" class="form-control shadow-none w-100" placeholder="Buscar...">
                                                            <div class="col-3 position-absolute top-50 start-100 translate-middle">
                                                                <button type="submit" class="btn btn-outline shadow-none form-control w-100 text-white bg-dark rounded-0">
                                                                    <i class="bi bi-search"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <script>
                                                    $('#link-buscar').click(function() {
                                                        $('#barra-busqueda').show();
                                                        $('#link-buscar').hide();
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-3 text-center header-sec_1--texto border-start border-end border-dark">
                                        <a href="ayuda.php" class="link-header" style="font-family: 'Futura Std Book', sans-serif;">Ayuda</a>
                                    </div>
                                    <div class="col-3 text-center header-sec_1--texto">
                                        <a href="{{ url('login') }}" class="link-header" style="font-family: 'Futura Std Book', sans-serif;">
                                            @if(auth()->check())
                                                {{ auth()->user()->name }}
                                            @else
                                                Usuario
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row header-sec_2">
                    <div class="col">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 py-1 text-xxl-start text-xl-start text-lg-start text-md-center">
                                <div class="col-11 mx-auto">
                                    <a href="{{ route('front.index') }}"><img src="{{ asset('img/photos/index/logo.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="row">
                                    <div class="col nav-grande py-3 d-flex justify-content-center align-items-center text-center header-sec_2--texto fw-bolder">
                                        <a href="#/" class="link-grande">Calzado</a>
                                    </div>
                                    <div class="col nav-grande py-3 d-flex justify-content-center align-items-center text-center header-sec_2--texto fw-bolder">
                                        <a href="#/" class="link-grande">Colección</a>
                                    </div>
                                    <div class="col nav-grande py-3 d-flex justify-content-center align-items-center text-center header-sec_2--texto fw-bolder">
                                        <a href="#/" class="link-grande">Lanzamientos</a>
                                    </div>
                                    <div class="col nav-grande py-3 d-flex justify-content-center align-items-center text-center header-sec_2--texto fw-bolder">
                                        <a href="#/" class="link-grande">Rebajas</a>
                                    </div>
                                    <div class="col py-3 d-flex justify-content-start align-items-center text-start header-sec_2--texto fw-bolder">
                                        <button class="btn btn-outline" onclick="activarModal()">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <img src="{{ asset('img/photos/carrito/002-008.png') }}" alt="" class="img-fluid text-start">
                                                    <div class="col-6 position-absolute top-0 start-100 translate-middle text-white text-center bg-dark rounded-circle" style="font-family: 'Futura Std Book', sans-serif;">
                                                        @if(session('carrito'))
                                                            @php
                                                                $cuenta = count(session('carrito'));
                                                            @endphp
                                                            @if($cuenta > 9)
                                                                +9
                                                            @else
                                                                {{ $cuenta }}
                                                            @endif
                                                        @else
                                                            <small style="font-family: 'Futura Std Book', sans-serif;">+9</small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </button>
                                        {{-- <a href="{{url('miCarrito')}}">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <img src="{{ asset('img/photos/carrito/002-008.png') }}" alt="" class="img-fluid text-start">
                                                    <div class="col-6 position-absolute top-0 start-100 translate-middle text-white text-center bg-dark rounded-circle">
                                                        @if(session('carrito'))
                                                            @php
                                                                $cuenta = count(session('carrito'));
                                                            @endphp
                                                            @if($cuenta > 9)
                                                                +9
                                                            @else
                                                                {{ $cuenta }}
                                                            @endif
                                                        @else
                                                            <small>+9</small>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </a> --}}
                                        {{-- <button class="btn" onclick="activarModal()">
                                            <div class="row">
                                                <div class="col position-relative">
                                                    <img src="{{ asset('img/photos/carrito/002-008.png') }}" alt="" class="img-fluid">
                                                    <div class="col position-absolute top-0 start-100 translate-middle-y">
                                                        <span class="badge rounded-circle medalla-color p-2">+9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12 position-absolute top-0 end-0 shadow-lg menu-modal z-3" style="background-color: #F0F0F0; display: none;">
                    <div class="row">
                        <div class="col mx-auto py-2 text-end">
                            <button class="btn btn-outline border-none" onclick="cerrarModal()"><i class="bi bi-x-lg fs-3"></i></button>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-10 mx-auto">
                            <div class="row">

                                <div class="col-12 py-2 art-carrito" id="art-carrito-1">
                                    <div class="row">
                                        <div class="col-6 fs-3 text-start">
                                            Calzado #01
                                        </div>
                                        <div class="col-6 fs-3 text-end">
                                            <button class="btn btn-outline" onclick="quitarCarrito(1)">
                                                <i class="bi bi-x-circle fs-4"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col">
                                            <div class="col mx-auto border-top"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row py-2">
                                                <div class="col-3 py-1">
                                                    <div style="
                                                        background-image: url('{{ asset('img/photos/store_detalle/producto.png') }}');
                                                        background-size: cover;
                                                        background-position: center center;
                                                        background-repeat: no-repeat;
                                                        width: 100%;
                                                        height: 7rem;
                                                    "></div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="row">
                                                        <div class="col fs-5 py-0">
                                                            Neque porro quisquam est qui dolorem, consectetur, adipisci velit..."
                                                        </div>
                                                    </div>
                                                    <div class="row py-2">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                        23mx
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                        cant. 1
                                                                    </div>
                                                                </div>
                                                                <div class="col-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row fs-5">
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 text-center text-decoration-line-through">
                                                            $4,800
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 text-center">
                                                            $4,320
                                                        </div>
                                                        <div class="col-xxl-6 col-xl-6 col-lg-9">
                                                            %10 de descuento
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 py-2 art-carrito" id="art-carrito-2">
                                    <div class="row">
                                        <div class="col-6 fs-3 text-start">
                                            Calzado #02
                                        </div>
                                        <div class="col-6 fs-3 text-end">
                                            <button class="btn btn-outline" onclick="quitarCarrito(2)">
                                                <i class="bi bi-x-circle fs-4"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col">
                                            <div class="col mx-auto border-top"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row py-2">
                                                <div class="col-3 py-1">
                                                    <div style="
                                                        background-image: url('{{ asset('img/photos/store_detalle/producto.png') }}');
                                                        background-size: cover;
                                                        background-position: center center;
                                                        background-repeat: no-repeat;
                                                        width: 100%;
                                                        height: 7rem;
                                                    "></div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="row">
                                                        <div class="col fs-5 py-0">
                                                            Neque porro quisquam est qui dolorem, consectetur, adipisci velit..."
                                                        </div>
                                                    </div>
                                                    <div class="row py-2">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                        23mx
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                        cant. 1
                                                                    </div>
                                                                </div>
                                                                <div class="col-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row fs-5">
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3 text-decoration-line-through">
                                                            $4,800
                                                        </div>
                                                        <div class="col-xxl-3 col-xl-3 col-lg-3">
                                                            $4,320
                                                        </div>
                                                        <div class="col-xxl-6 col-xl-6 col-lg-9">
                                                            %10 de descuento
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col">
                                    <div class="row py-1">
                                        <div class="form-group input-cupon">
                                            <div class="col position-relative">
                                                <input type="text" class="form-control border border-dark shadow-none fs-4 text-dark input-cupon" placeholder="¡Tengo un cupón!">
                                                <div class="col position-absolute top-50 end-0 translate-middle">
                                                    <button class="btn btn-outline border-none" onclick="cancelarCupon()">
                                                        <i class="bi bi-x-circle fs-4"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col input-black">
                                            <label class="form-control border border-dark shadow-none fs-4 text-white bg-black">
                                                subtotal: $8,640
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col">
                                            <label class="form-control border border-dark shadow-none fs-4 text-dark bg-white">
                                                envio:
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col">
                                            <label class="form-control border border-dark shadow-none fs-4 text-white bg-black">
                                                Total: $8,640
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            {{-- <button id="comprar" class="btn w-100 border border-dark shadow-none fs-5 py-2 text-white bg-black text-center">
                                                COMPRAR
                                            </button> --}}
                                            <a href="{{ route('miCarrito') }}" class="btn w-100 border border-dark shadow-none fs-5 py-2 text-white bg-black text-center">
                                                COMPRAR
                                            </a>
                                        </div>
                                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                            <button id="comprar_invitado" class="btn w-100 border border-dark shadow-none fs-5 py-2 text-white bg-black text-center">
                                                COMPRAR COMO INVITADO
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xxl-none d-xl-none d-lg-none d-md-none d-sm-block d-block position-relative">
                <div class="col-md-12 col-sm-12 col-12 bg-white position-absolute top-0 end-0 shadow-lg menu-modal-sm z-3" style="background-color: #FAFAFA; display: none;">
                    <div class="row">
                        <div class="col mx-auto py-2 text-end">
                            <button class="btn btn-outline border-none" onclick="cerrarModalsm()"><i class="bi bi-x-lg fs-3"></i></button>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-10 mx-auto">
                            <div class="row">
                                <div class="col-12 py-2 art-carrito-sm" id="art-carrito-sm-1">
                                    <div class="row">
                                        <div class="col-6 fs-3 text-start">
                                            Calzado #01
                                        </div>
                                        <div class="col-6 fs-3 text-end">
                                            <button class="btn btn-outline" onclick="quitarCarritosm(1)">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col">
                                            <div class="col mx-auto border-top"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row py-2">
                                                <div class="col-md-3 col-sm-12 col-12 py-1">
                                                    <div style="
                                                        background-image: url('{{ asset('img/photos/store_detalle/producto.png') }}');
                                                        background-size: cover;
                                                        background-position: center center;
                                                        background-repeat: no-repeat;
                                                        width: 100%;
                                                        height: 7rem;
                                                    "></div>
                                                </div>
                                                <div class="col-md-9 col-sm-12 col-12">
                                                    <div class="row">
                                                        <div class="col fs-5 py-0">
                                                            Neque porro quisquam est qui dolorem, consectetur, adipisci velit..."
                                                        </div>
                                                    </div>
                                                    <div class="row py-2">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6 col-12">
                                                                    <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                        23mx
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-12">
                                                                    <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                        cant. 1
                                                                    </div>
                                                                </div>
                                                                <div class="col-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row fs-5">
                                                        <div class="col-md-2 col-sm-2 col-12 text-decoration-line-through">
                                                            $4,800
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-12">
                                                            $4,320
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-12">
                                                            %10 de descuento
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 py-2 art-carrito-sm" id="art-carrito-sm-2">
                                    <div class="row">
                                        <div class="col-6 fs-3 text-start">
                                            Calzado #02
                                        </div>
                                        <div class="col-6 fs-3 text-end">
                                            <button class="btn btn-outline" onclick="quitarCarritosm(2)">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col">
                                            <div class="col mx-auto border-top"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row py-2">
                                                <div class="col-md-3 col-sm-12 col-12 py-1">
                                                    <div style="
                                                        background-image: url('{{ asset('img/photos/store_detalle/producto.png') }}');
                                                        background-size: cover;
                                                        background-position: center center;
                                                        background-repeat: no-repeat;
                                                        width: 100%;
                                                        height: 7rem;
                                                    "></div>
                                                </div>
                                                <div class="col-md-9 col-sm-12 col-12">
                                                    <div class="row">
                                                        <div class="col fs-5 py-0">
                                                            Neque porro quisquam est qui dolorem, consectetur, adipisci velit..."
                                                        </div>
                                                    </div>
                                                    <div class="row py-2">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6 col-12">
                                                                    <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                        23mx
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-6 col-12">
                                                                    <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                        cant. 1
                                                                    </div>
                                                                </div>
                                                                <div class="col-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row fs-5">
                                                        <div class="col-md-2 col-sm-2 col-12 text-decoration-line-through">
                                                            $4,800
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-12">
                                                            $4,320
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-12">
                                                            %10 de descuento
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col">
                                    <div class="row py-1">
                                        <div class="form-group input-cupon-sm">
                                            <div class="col position-relative">
                                                <input type="text" class="form-control border border-dark shadow-none fs-4 text-dark" placeholder="¡Tengo un cupón!">
                                                <div class="col position-absolute top-50 end-0 translate-middle">
                                                    <button class="btn btn-outline border-none" onclick="cancelarCuponsm()">
                                                        <i class="bi bi-x-circle fs-4"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col input-black">
                                            <label class="form-control border border-dark shadow-none fs-4 text-white bg-black">
                                                subtotal: $8,640
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col">
                                            <label class="form-control border border-dark shadow-none fs-4 text-dark bg-white">
                                                envio:
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col">
                                            <label class="form-control border border-dark shadow-none fs-4 text-white bg-black">
                                                Total: $8,640
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col">
                                            <button id="comprar" class="btn w-100 border border-dark shadow-none fs-5 py-2 text-white bg-black text-center">
                                                COMPRAR
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row py-1">
                                        <div class="col">
                                            <button id="comprar_invitado" class="btn w-100 border border-dark shadow-none fs-5 py-2 text-white bg-black text-center">
                                                COMPRAR COMO INVITADO
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col py-2 text-center">
                                <a class="navbar-brand" href="#"><img src="{{ asset('img/photos/index/logo.png') }}" alt="" class="img-fluid"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mt-3">
                                <li class="nav-item">
                                    <a class="nav-link text-center fs-5 active" aria-current="page" href="#">Buscar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center fs-5 active" aria-current="page" href="#">Ayuda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center fs-5 active" aria-current="page" href="#">Iniciar sesión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center fs-5 active" aria-current="page" href="#">Calzado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center fs-5 active" aria-current="page" href="#">Colección</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center fs-5 active" aria-current="page" href="#">Lanzamientos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center fs-5 active" aria-current="page" href="#">Rebajas</a>
                                </li>
                                <li class="nav-item mt-4 mb-2 text-center">
                                    <button class="btn mt-4 mb-4" aria-current="page" onclick="activarModalsm()">
                                        <div class="row">
                                            <div class="col position-relative text-center">
                                                <img src="{{ asset('img/photos/carrito/002-008.png') }}" alt="" class="img-fluid">
                                                <div class="col position-absolute top-0 start-50 ms-3 translate-middle-y">
                                                    <span class="badge rounded-circle medalla-color p-2">+9</span>
                                                </div>
                                            </div>
                                        </div>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col px-0" data-aos="zoom-out">
                <div class="alert alert-dismissible fs-5 fade show alerta-descuentos alert-custom" role="alert" >
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center fs-5" style="font-family: 'Futura Std Book', sans-serif;">
                            30 % DE DESCUENTO CUPÓN: VERANO45 + ENVIO GRATIS
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center fs-5" style="font-family: 'Futura Std Book', sans-serif;">
                            30 % DE DESCUENTO CUPÓN: VERANO45 + ENVIO GRATIS
                        </div>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
</header>















{{--
        @if ($pagina == 'tienda')
            <header class="menu-grande py-3" data-aos="fade-left" style="background-color: #E7E7E7;">
        @elseif ($pagina == 'home' || $pagina == 'subdistribuidor' || $pagina == 'contacto' || $pagina == 'nosotros')
            <header class="menu-grande pt-3" data-aos="fade-left" style="background-color: #E7E7E7;">
        @else
            <header class="menu-grande py-3" data-aos="fade-left" style="background-color: white;">
        @endif
            <div class="row mt-0">
                <div class="col-2 fs-5 mt-xxl-0 mt-xl-4 mt-lg-0 text-center ps-5 pe-3">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/design/home/logo.png') }}" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="col-10 bg-white mt-4 shadow" style="border-top-left-radius: 36px; border-bottom-left-radius: 36px;">
                    <div class="row">
                        <div class="col header-btn d-flex align-content-center justify-content-center h6 m-0 fw-bolder text-center">
                            <a href="{{ route('front.index') }}" class="py-4" style="text-decoration: none;">
                                Inicio
                            </a>
                        </div>
                        <div class="col header-btn d-flex align-content-center justify-content-center h6 m-0 fw-bolder text-center">
                            <a href="{{ route('front.tienda') }}" class="py-4" style="text-decoration: none;">
                                Tienda
                            </a>
                        </div>
                        <div class="col header-btn d-flex align-content-center justify-content-center h6 m-0 fw-bolder text-center">
                            <a href="{{ route('front.soluciones') }}" class="py-4" style="text-decoration: none;">
                                Soluciones
                            </a>
                        </div>
                        <div class="col-2 header-btn d-flex align-content-center justify-content-center h6 m-0 fw-bolder text-center">
                            <a href="{{ route('front.punto_venta') }}" class="py-4" style="text-decoration: none;">
                                Punto de venta
                            </a>
                        </div>
                        <div class="col header-btn d-flex align-content-center justify-content-center h6 m-0 fw-bolder text-center">
                            <a href="{{ route('front.subdistribuidor') }}" class="py-4" style="text-decoration: none;">
                                Distribuidor
                            </a>
                        </div>
                        <div class="col header-btn d-flex align-content-center justify-content-center h6 m-0 fw-bolder text-center">
                            <a href="{{ route('front.aboutus') }}" class="py-4" style="text-decoration: none;">
                                Nosotros
                            </a>
                        </div>
                        <div class="col header-btn d-flex align-content-center justify-content-center h6 m-0 fw-bolder text-center">
                            <a href="{{ route('front.contact') }}" class="py-4" style="text-decoration: none;">
                                Contacto
                            </a>
                        </div>
                        <div class="col bg-white h6 m-0 fw-normal d-flex align-content-center justify-content-center text-success text-center">
                            <a class="navbar-brand mt-1" href="{{ url('login') }}" style="color: #E30920; font-size: 14px; font-weight: 700;">
                                <i class="fa-solid mt-3 fa-user me-3 icon-use" style="font-size: 20px; color: #E30920;"></i>
                                @if(auth()->check())
                                    {{ auth()->user()->name }}
                                @else
                                    Usuario
                                @endif
                            </a>
                        </div>
                        <div class="col bg-white py-3 d-flex align-content-center justify-content-center fs-5 fw-normal text-success text-center">
                            <a href="{{url('miCarrito')}}">
                            <div class="row">
                                <div class="col position-relative">
                                    <img src="{{ asset('img/design/header/carrito.png') }}" alt="" class="img-fluid text-start">
                                    <div class="col position-absolute top-0 end-0 translate-middle bg-white text-danger rounded-circle">
                                        @if(session('carrito'))
                                          @php
                                              $cuenta = count(session('carrito'));
                                          @endphp
                                          @if($cuenta > 9)
                                          9+
                                          @else
                                          {{ $cuenta }}
                                          @endif
                                        @endif
                                    </div>



                                </div>
                            </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <header class="menu-movil">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-12 fs-3 text-center">
                    <div class="boton-md">
                        <img src="{{ asset('img/design/home/logo.png') }}" class="img-fluid"/>
                    </div>
                    <div class="boton-xs">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 col-12 text-center">
                    <!-- Botón para colapsar/mostrar las columnas -->
                    <div class="boton-md">
                        <button class="btn btn-outline border-dark mt-md-4 mt-sm-4 mt-xs-4 mt-0" data-bs-toggle="collapse" data-bs-target="#miColapso"><span uk-icon="icon: menu; ratio: 2;"></span></button>
                    </div>
                    <div class="boton-xs">
                        <button class="btn-link btn-outline border-0 mt-md-4 mt-sm-4 mt-xs-4 mt-0 py-3" data-bs-toggle="collapse" data-bs-target="#miColapso" style="text-decoration: none;"><img src="{{ asset('img/design/home/logo.png') }}" class="img-fluid w-100"/></button>
                    </div>
                    <!-- <button class="btn-link w-100 btn-outline border-0 bg-white m-0 btn-p-0" data-bs-toggle="collapse" data-bs-target="#miColapso"><img src="img/logo.png" class="img-fluid" style=""/></button> -->
                </div>
                <div class="col-12">
                    <!-- Elemento colapsable que contiene las columnas -->
                    <div id="miColapso" class="collapse">
                        <div class="row mt-2 mb-2">
                            <div class="col-md-3 col-sm-2 col-xs-2 col-2"></div>
                            <div class="col-md-9 col-sm-10 col-xs-10 col-10 bg-white" style="border-top-left-radius: 36px; border-bottom-left-radius: 36px;">
                                <div class="row">
                                <div class="col-12 header-btn_movil fs-3 fw-bolder py-3 text-center">
                                <a href="{{ route('front.index') }}" style="text-decoration: none;">
                                    Inicio
                                </a>
                            </div>
                            <div class="col-12 header-btn_movil fs-3 fw-bolder py-3 text-center">
                                <a href="{{ route('front.tienda') }}" style="text-decoration: none;">
                                    Tienda
                                </a>
                            </div>
                            <div class="col-12 header-btn_movil fs-3 fw-bolder py-3 text-center">
                                <a href="{{ route('front.soluciones') }}" style="text-decoration: none;">
                                    Soluciones
                                </a>
                            </div>
                            <div class="col-12 header-btn_movil fs-3 fw-bolder py-3 text-center">
                                <a href="{{ route('front.punto_venta') }}" style="text-decoration: none;">
                                    Punto de venta
                                </a>
                            </div>
                            <div class="col-12 header-btn_movil fs-3 fw-bolder py-3 text-center">
                                <a href="{{ route('front.subdistribuidor') }}" style="text-decoration: none;">
                                    Distribuidor
                                </a>
                            </div>
                            <div class="col-12 header-btn_movil fs-3 fw-bolder py-3 text-center">
                                <a href="{{ route('front.aboutus') }}" style="text-decoration: none;">
                                    Nosotros
                                </a>
                            </div>
                            <div class="col-12 header-btn_movil fs-3 fw-bolder py-3 text-center">
                                <a href="{{ route('front.contact') }}" style="text-decoration: none;">
                                    Contacto
                                </a>
                            </div>
                            <div class="col fs-5 fw-normal py-3 text-success text-end">
                                <a class="navbar-brand mt-1" href="{{ url('login') }}" style="color: #E30920; font-size: 14px; font-weight: 700;">
                                <i class="fa-solid mt-3 fa-user me-3 icon-use" style="font-size: 20px; color: #E30920;"></i>
                                @if(auth()->check())
                                    {{ auth()->user()->name }}
                                @else
                                    Usuario
                                @endif
                            </a>
                            </div>
                            <div class="col fs-5 fw-normal py-3 text-success text-center">
                                <a href="{{url('miCarrito')}}" style="position: relative;">
                                    <img src="{{ asset('img/design/header/carrito.png') }}" alt="" class="img-fluid">
                                    @if(session('carrito'))
                                    <i class="fa-solid fa-circle" style="position: absolute; top: -10px; left: 20px; color: red; font-size: 12px;"></i>
                                      @php
                                          $cuenta = count(session('carrito'));
                                      @endphp
                                      @if($cuenta > 9)
                                      <p style="position: absolute; top: -2px; left: 8px; color: white; font-size: 11px;">9+</p>
                                      @else
                                        <p style="position: absolute; top: -1px; left: 11px; color: white; font-size: 11px;">{{$cuenta}}</p>
                                      @endif
                                    @endif
                                  </a>

                            </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>   --}}



