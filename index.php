<?php
    require_once "conexion.php";
    require_once "header.php";
    require_once "footer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITULO</title>
    <link rel="stylesheet" href="vendor/bootstrap-5.3.2/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-6.5.1/css/all.css">
    <link rel="stylesheet" href="vendor/bootstrap-icons-1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="vendor/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="vendor/slick-1.8.1/slick/slick-theme.css">
    <style>
        .header-sec_1 {
            background-color: #FAFAFA;
        }

        .header-sec_2 {
            background-color: #FFFFFF;
        }

        .alerta-descuentos {
            color: #FFFFFF;
            background-color: #000000;
        }

        .alert-custom {
            border-radius: 0; /* Quita los bordes redondeados */
            width: 100%; /* Ocupa todo el ancho del contenedor padre (col) */
            margin: 0; /* Elimina el margen por defecto */
        }

        .medalla-color {
            background-color: #000000;
        }

        .medalla-color:hover {
            background-color: #FFFFFF;
            color: #000000;
            border: 1px solid #000000;
        }

        .navbar-nav .nav-link:hover {
            background-color: #000000;
            color: #FFFFFF;
        }

        .link-grande {
            text-decoration: none;
            color: #000000;
        }

        .nav-grande:hover {
            background-color: #000000;
        }

        .nav-grande:hover > .link-grande {
            background-color: #000000;
            color: #FFFFFF;
        }
        
        @media (min-width: 1800px) {
            .header-sec_1--texto {

            }

            .header-sec_2--texto {

            }
        }

        @media (min-width: 1400px) and (max-width: 1799px) {
            
        }

        @media (min-width: 1200px) and (max-width: 1399px) {
            
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            
        }

        @media (min-width: 768px) and (max-width: 991px) {
            
        }

        @media (min-width: 576px) and (max-width: 767px) {
            
        }

        @media (min-width: 320px) and (max-width: 480px) {
            
        }

        @media (min-width: 0px) and (max-width: 319px) {
            
        }



    </style>
</head>
<body>

  

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xxl-block d-xl-block d-lg-block d-md-block d-sm-none d-none">
                    <div class="row header-sec_1">
                        <div class="col-11 mx-auto py-2">
                            <div class="row">
                                <div class="col-xxl-8 col-xl-8 col-lg-6"></div>
                                <div class="col-xxl-4 col-xl-4 col-lg-6">
                                    <div class="row">
                                        <div class="col-4 text-center header-sec_1--texto">
                                            Buscar
                                        </div>
                                        <div class="col-4 text-center header-sec_1--texto border-start border-end border-dark">
                                            Ayuda
                                        </div>
                                        <div class="col-4 text-center header-sec_1--texto">
                                            Iniciar sesión
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
                                    <img src="img/index/logo.png" alt="" class="img-fluid">
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
                                            <a href="">
                                                <div class="row">
                                                    <div class="col position-relative">
                                                        <img src="img/carrito/002-008.png" alt="" class="img-fluid">
                                                        <div class="col position-absolute top-0 start-100 translate-middle-y">
                                                            <span class="badge rounded-circle medalla-color p-2">+9</span>
                                                        </div>
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
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-xxl-none d-xl-none d-lg-none d-md-none d-sm-block d-block">
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
                                    <li class="nav-item mt-4 mb-2">
                                        <a class="mt-4 mb-4" aria-current="page" href="#">
                                            <div class="row">
                                                <div class="col position-relative text-center">
                                                    <img src="img/carrito/002-008.png" alt="" class="img-fluid">
                                                    <div class="col position-absolute top-0 start-50 ms-3 translate-middle-y">
                                                        <span class="badge rounded-circle medalla-color p-2">+9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col px-0">
                    <div class="alert alert-dismissible fs-5 fade show alerta-descuentos alert-custom" role="alert">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 text-center">
                                30 % DE DESCUENTO CUPÓN: VERANO45 + ENVIO GRATIS
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 text-center">
                                30 % DE DESCUENTO CUPÓN: VERANO45 + ENVIO GRATIS
                            </div>
                        </div>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    

    <script src="js/jquery.js"></script>
    <script src="vendor/bootstrap-5.3.2/js/bootstrap.bundle.js"></script>
    <script src="vendor/fontawesome-free-6.5.1/js/all.js"></script>
    <script src="vendor/slick-1.8.1/slick/slick.js"></script>
</body>
</html>