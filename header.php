<?php

    $header = '
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xxl-block d-xl-block d-lg-block d-md-block d-sm-none d-none">
                        <div class="row header-sec_1">
                            <div class="col-11 mx-auto py-3">
                                <div class="row">
                                    <div class="col-xxl-8 col-xl-8 col-lg-6"></div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6">
                                        <div class="row">
                                            <div class="col-4 text-center header-sec_1--texto">
                                                <a href="buscar.php" class="link-header">Buscar</a>
                                            </div>
                                            <div class="col-4 text-center header-sec_1--texto border-start border-end border-dark">
                                                <a href="ayuda.php" class="link-header">Ayuda</a>
                                            </div>
                                            <div class="col-4 text-center header-sec_1--texto">
                                                <a href="iniciar_sesion.php" class="link-header">Iniciar Sesión</a>
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
                                        <img src="img/index/logo.png" alt="" class="img-fluid">
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
                                                <button class="btn" onclick="activarModal()">
                                                    <div class="row">
                                                        <div class="col position-relative">
                                                            <img src="img/carrito/002-008.png" alt="" class="img-fluid">
                                                            <div class="col position-absolute top-0 start-100 translate-middle-y">
                                                                <span class="badge rounded-circle medalla-color p-2">+9</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </button>
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
                                                        <div class="col-3 py-1">
                                                            <div style="
                                                                background-image: url(\'img/store_detalle/producto.png\');
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
                                                                <div class="col-xxl-2 col-xl-2 col-lg-3 text-center text-decoration-line-through">
                                                                    $4,800 
                                                                </div>
                                                                <div class="col-xxl-2 col-xl-2 col-lg-3 text-center">
                                                                    $4,320 
                                                                </div>
                                                                <div class="col-xxl-8 col-xl-8 col-lg-9">
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
                                                        <div class="col-3 py-1">
                                                            <div style="
                                                                background-image: url(\'img/store_detalle/producto.png\');
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
                                                                <div class="col-xxl-2 col-xl-2 col-lg-3 text-decoration-line-through">
                                                                    $4,800 
                                                                </div>
                                                                <div class="col-xxl-2 col-xl-2 col-lg-3">
                                                                    $4,320 
                                                                </div>
                                                                <div class="col-xxl-8 col-xl-8 col-lg-9">
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
                                                    <button id="comprar" class="btn w-100 border border-dark shadow-none fs-5 py-2 text-white bg-black text-center">
                                                        COMPRAR
                                                    </button>
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
                                                                background-image: url(\'img/store_detalle/producto.png\');
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
                                                                background-image: url(\'img/store_detalle/producto.png\');
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
                                        <a class="navbar-brand" href="#"><img src="img/index/logo.png" alt="" class="img-fluid"></a>
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
                                                        <img src="img/carrito/002-008.png" alt="" class="img-fluid">
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
                        <div class="alert alert-dismissible fs-5 fade show alerta-descuentos alert-custom" role="alert">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center fs-5">
                                    30 % DE DESCUENTO CUPÓN: VERANO45 + ENVIO GRATIS
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center fs-5">
                                    30 % DE DESCUENTO CUPÓN: VERANO45 + ENVIO GRATIS
                                </div>
                            </div>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    ';

