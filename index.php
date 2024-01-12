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
    <link rel="stylesheet" href="css/front/header.css">
    <link rel="stylesheet" href="css/front/footer.css">
    <style>
        .slick-dots li {
            margin: 0 2rem;
        }

        .slick-dots {
            margin-top: 50px;
        }

        .slick-dots li button:before, .slick-dots li.slick-active button:before {
            color: transparent;
            opacity: 1;
        }

        .slick-dots li button:before {
            margin-top: 5px;
            background-color: black;
            border: 1px solid black;
            border-radius: 20%;
            display: inline-block;
            height: 0.3rem;
            width: 3.8rem;
        }

        .slick-dots li.slick-active button:before {
            background-color: white;
            border: 1px solid black;
        }

        .formulario-home > .form-control {
            background-color: #F5F5F5;
            box-shadow: none;
            border: 0;
        }

        .formulario-home > .form-control::placeholder {
            color: #000000;
        }
                
        @media (min-width: 1800px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 24.6875rem;
            }

            .seccion-fotos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 34rem;
            }

            .circulo-colaborador {
                background-color: #000000;
                border-radius: 100%;
                font-size: 1rem;
                width: 11rem;
                height: 11rem;
                color: #FFFFFF;
            }

            .titulo-colaboradores {
                font-size: 5rem;
            }

            .texto-colaboradores {
                font-size: 1rem;
                font-weight: 500;
            }
        }

        @media (min-width: 1400px) and (max-width: 1799px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 18.125rem;
            }

            .seccion-fotos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 28rem;
            }

            .circulo-colaborador {
                background-color: #000000;
                border-radius: 100%;
                font-size: 0.9rem;
                width: 10rem;
                height: 10rem;
                color: #FFFFFF;
            }

            .titulo-colaboradores {
                font-size: 4.5rem;
            }

            .texto-colaboradores {
                font-size: 1rem;
                font-weight: 500;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 20.625rem;
            }

            .seccion-fotos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 20rem;
            }

            .circulo-colaborador {
                background-color: #000000;
                border-radius: 100%;
                font-size: 0.7rem;
                width: 9rem;
                height: 9rem;
                color: #FFFFFF;
            }

            .titulo-colaboradores {
                font-size: 4rem;
            }

            .texto-colaboradores {
                font-size: 1rem;
                font-weight: 500;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 16.75rem;
            }

            .seccion-fotos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 18rem;
            }

            .circulo-colaborador {
                background-color: #000000;
                border-radius: 100%;
                font-size: 0.7rem;
                width: 9rem;
                height: 9rem;
                color: #FFFFFF;
            }

            .titulo-colaboradores {
                font-size: 3.5rem;
            }

            .texto-colaboradores {
                font-size: 1rem;
                font-weight: 500;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 19.375rem;
            }

            .seccion-fotos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 22rem;
            }

            .circulo-colaborador {
                background-color: #000000;
                border-radius: 100%;
                font-size: 0.8rem;
                width: 10rem;
                height: 10rem;
                color: #FFFFFF;
            }

            .titulo-colaboradores {
                font-size: 3rem;
            }

            .texto-colaboradores {
                font-size: 0.9rem;
                font-weight: 500;
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 14rem;
            }

            .seccion-fotos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 28rem;
            }

            .circulo-colaborador {
                background-color: #000000;
                border-radius: 100%;
                font-size: 1.2rem;
                width: 18rem;
                height: 18rem;
                color: #FFFFFF;
            }

            .titulo-colaboradores {
                font-size: 2.5rem;
            }

            .texto-colaboradores {
                font-size: 0.9rem;
                font-weight: 500;
            }
        }

        @media (min-width: 320px) and (max-width: 480px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 20rem;
            }

            .seccion-fotos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 20rem;
            }

            .circulo-colaborador {
                background-color: #000000;
                border-radius: 100%;
                font-size: 1rem;
                width: 14rem;
                height: 14rem;
                color: #FFFFFF;
            }

            .titulo-colaboradores {
                font-size: 1.6rem;
            }

            .texto-colaboradores {
                font-size: 0.9rem;
                font-weight: 500;
            }
        }

        @media (min-width: 0px) and (max-width: 319px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 14.5rem;
            }

            .seccion-fotos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 14rem;
            }

            .circulo-colaborador {
                background-color: #000000;
                border-radius: 100%;
                font-size: 1rem;
                width: 10rem;
                height: 10rem;
                color: #FFFFFF;
            }

            .titulo-colaboradores {
                font-size: 1.2rem;
            }

            .texto-colaboradores {
                font-size: 0.9rem;
                font-weight: 500;
            }
        }

    </style>
</head>
<body>

    <?=$header;?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button style="width: 3.8rem; height: 0.3rem; margin-left: 0.5rem; margin-right: 0.5rem;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button style="width: 3.8rem; height: 0.3rem; margin-left: 0.5rem; margin-right: 0.5rem;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button style="width: 3.8rem; height: 0.3rem; margin-left: 0.5rem; margin-right: 0.5rem;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button style="width: 3.8rem; height: 0.3rem; margin-left: 0.5rem; margin-right: 0.5rem;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/index/slider.png" class="d-block w-100" alt="slider">
                            <div class="carousel-caption mb-3">
                                <a href="#/" class="btn btn-lg btn-outline px-4 bg-white text-dark fs-3">SABER MÁS</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/index/slider.png" class="d-block w-100" alt="slider">
                            <div class="carousel-caption mb-3">
                                <a href="#/" class="btn btn-lg btn-outline px-4 bg-white text-dark fs-3">SABER MÁS</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/index/slider.png" class="d-block w-100" alt="slider">
                            <div class="carousel-caption mb-3">
                                <a href="#/" class="btn btn-lg btn-outline px-4 bg-white text-dark fs-3">SABER MÁS</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/index/slider.png" class="d-block w-100" alt="slider">
                            <div class="carousel-caption mb-3">
                                <a href="#/" class="btn btn-lg btn-outline px-4 bg-white text-dark fs-3">SABER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col display-2 text-center">
                LANZAMIENTOS
            </div>
        </div>
        <div class="row">
            <div class="col-11 py-5 mx-auto">
                <div class="row">
                    <div class="slider-lanzamientos">
                        <div class="col-3">
                            <div class="card border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('img/index/01_.png');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-6 fs-5 text-start">
                                            Calzado #01
                                        </div>
                                        <div class="col-6 fs-5 text-end">
                                            $2,800
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('img/index/02_.png');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-6 fs-5 text-start">
                                            Calzado #02
                                        </div>
                                        <div class="col-6 fs-5 text-end">
                                            $2,800
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('img/index/03_.png');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-6 fs-5 text-start">
                                            Calzado #03
                                        </div>
                                        <div class="col-6 fs-5 text-end">
                                            $2,800
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('img/index/04_.png');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-6 fs-5 text-start">
                                            Calzado #04
                                        </div>
                                        <div class="col-6 fs-5 text-end">
                                            $2,800
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('img/index/logo.png');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-6 fs-5 text-start">
                                            Calzado #04
                                        </div>
                                        <div class="col-6 fs-5 text-end">
                                            $2,800
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-11 p-4 mx-auto" style="background-color: #F0F0F0;">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col text-start fs-4">
                                COMPRA SEGURA
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nisi incidunt rerum impedit magnam, praesentium ab. Perspiciatis quaerat dolore ad!
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 py-xxl-0 py-xl-0 py-lg-3 py-md-3 py-sm-3 py-3 d-flex align-items-center">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 d-flex align-items-center mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-0 mt-3">
                                <img src="img/index/openpay.png" alt="" class="img-fluid mx-auto">
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 d-flex align-items-center mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-0 mt-3">
                                <img src="img/index/visa.png" alt="" class="img-fluid mx-auto">
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 d-flex align-items-center mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-0 mt-3">
                                <img src="img/index/mastercard.png" alt="" class="img-fluid mx-auto">
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 d-flex align-items-center mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-0 mt-3">
                                <img src="img/index/american_express.png" alt="" class="img-fluid mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-11 mx-auto">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-11 col-11 mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                        <div class="card">
                            <div class="seccion-fotos" style="
                                background-image: url('img/index/fot1.png');
                            "></div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-11 col-11 mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                        <div class="card">
                            <div class="seccion-fotos" style="
                                background-image: url('img/index/fot2.png');
                            "></div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-11 col-11 mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                        <div class="card">
                            <div class="seccion-fotos" style="
                                background-image: url('img/index/fot3.png');
                            "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5 py-3">
        <form action="datos.php" class="needs-validation" method="POST" id="form-home" enctype="multipart/form-data">
            <input type="hidden" name="tipoForm" value="home">    
            <div class="row">
                <div class="col py-3 text-center">
                    <img src="img/index/icono.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col py-2 display-1 text-center">
                    NEWSLETTER
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-9 col-sm-11 col-11 py-2 mx-auto fw-bolder text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nisi. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-9 col-md-11 col-sm-11 col-11 py-3 mx-auto">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-11 col-11 formulario-home mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                            <input type="text" id="home_nombre" name="home_nombre" class="form-control py-3 fs-5" placeholder="Nombre:" required>
                            <div class="datos-ok text-success"></div>
                            <div class="datos-error text-danger"></div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-11 col-11 formulario-home mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                            <input type="email" id="home_correo" name="home_correo" class="form-control py-3 fs-5" placeholder="Correo:" title="Formato de correo: nombre@dominio.com" required>
                            <div class="datos-ok text-success"></div>
                            <div class="datos-error text-danger"></div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-11 col-11 formulario-home mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                            <input type="number" id="home_whatsapp" name="home_whatsapp" class="form-control py-3 fs-5" placeholder="Whatsapp:" required>
                            <div class="datos-ok text-success"></div>
                            <div class="datos-error text-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-9 col-md-11 col-sm-11 col-11 py-2 mx-auto">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-11 col-11 mx-auto text-center">
                            <button type="submit" id="home-enviar" class="btn btn-outline w-75 py-3 fs-5 bg-black text-white">ENVIAR</button>
                            <div class="text-danger" id="error-enviar_home">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid mt-5" style="background-color: #F0F0F0;">
        <div class="row py-5">
            <div class="col-9 py-5 mx-auto">
                <div class="row">
                    <div class="col py-2 text-center titulo-colaboradores">
                        COLABORADORES
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-11 col-sm-11 col-11 py-2 text-center mx-auto texto-colaboradores">
                        Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, odio. consectetur adipisicing elit. Consequuntur officia veniam voluptatibus in sunt. Amet sapiente accusantium incidunt molestias ut.
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-9 col-sm-9 col-11 mt-5 mx-auto">
                        <div class="row">
                            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-5 col-sm-11 col-11 mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                                <div class="row">
                                    <div class="circulo-colaborador position-relative text-center d-flex align-items-center justify-content-center">
                                        <div class="col-12 border border-danger text-center">
                                            Michael Eduardo Sandoval Perez
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-5 col-sm-11 col-11 mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                                <div class="row">
                                    <div class="circulo-colaborador position-relative d-flex align-items-center justify-content-center">
                                        <div class="col-12 border border-danger text-center">
                                            Michael Eduardo Sandoval Perez
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-5 col-sm-11 col-11 mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                                <div class="row">
                                    <div class="circulo-colaborador position-relative d-flex align-items-center justify-content-center">
                                        <div class="col-12 border border-danger text-center">
                                            Michael Eduardo Sandoval Perez
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-5 col-sm-11 col-11 mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                                <div class="row">
                                    <div class="circulo-colaborador position-relative d-flex align-items-center justify-content-center">
                                        <div class="col-12 border border-danger text-center">
                                            Michael Eduardo Sandoval Perez
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-5 col-sm-11 col-11 mx-auto mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                                <div class="row">
                                    <div class="circulo-colaborador position-relative d-flex align-items-center justify-content-center">
                                        <div class="col-12 border border-danger text-center">
                                            Michael Eduardo Sandoval Perez
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

    <?=$footer;?>

    <script src="js/jquery.js"></script>
    <script src="vendor/bootstrap-5.3.2/js/bootstrap.bundle.js"></script>
    <script src="vendor/fontawesome-free-6.5.1/js/all.js"></script>
    <script src="vendor/slick-1.8.1/slick/slick.js"></script>
    <script src="js/front/header.js"></script>
    <script src="js/front/footer.js" type="text/javascript"></script>
    <script>
        $('.slider-lanzamientos').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        autoplay: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 0,
                    settings: {
                        autoplay: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }
            ]
            });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Obtén referencias a los elementos del formulario
        var form = document.getElementById("form-home");
        var nombreInput = document.getElementById("home_nombre");
        var correoInput = document.getElementById("home_correo");
        var whatsappInput = document.getElementById("home_whatsapp");
        var enviarBtn = document.getElementById("home-enviar");

        // Agrega un evento de entrada a cada campo para validar en tiempo real
        nombreInput.addEventListener("input", validarCampos);
        correoInput.addEventListener("input", validarCampos);
        whatsappInput.addEventListener("input", validarCampos);

         // Agrega un evento de envío para realizar la validación final
         form.addEventListener("submit", function (event) {
            if (!validarCampos()) {
                event.preventDefault();
                document.getElementById("error-enviar_home").textContent = "Ingresa datos válidos.";
                document.getElementById("error-enviar_home").style.display = "block";
            }
        });

        // Función para validar campos en tiempo real
        function validarCampos() {
            var nombreValor = nombreInput.value.trim();
            var correoValor = correoInput.value.trim();
            var whatsappValor = whatsappInput.value.trim();

            var nombreValido = validarNombre(nombreValor);
            var correoValido = validarCorreo(correoValor);
            var whatsappValido = validarWhatsapp(whatsappValor);

            // Muestra u oculta mensajes de error
            mostrarMensajeError(nombreInput, !nombreValido);
            mostrarMensajeError(correoInput, !correoValido);
            mostrarMensajeError(whatsappInput, !whatsappValido);

            // Habilita o deshabilita el botón de envío
            enviarBtn.disabled = !(nombreValido && correoValido && whatsappValido);

            return nombreValido && correoValido && whatsappValido;

            document.getElementById("error-enviar_home").style.display = "none";

        }

        // Función para mostrar o ocultar mensajes de error
        function mostrarMensajeError(input, mostrar) {
            var errorDiv = input.nextElementSibling.nextElementSibling; // Selecciona el div de error
            var okDiv = input.nextElementSibling; // Selecciona el div de éxito

            if (mostrar) {
                input.classList.add("is-invalid");
                errorDiv.textContent = "Campo vacio o formato incorrecto";
                okDiv.textContent = ""; // Limpia el mensaje de éxito si hay un error
            } else {
                input.classList.remove("is-invalid");
                errorDiv.textContent = "";
                okDiv.textContent = "¡Campo válido!"; // Puedes personalizar este mensaje de éxito
            }
        }

        // Funciones para validar formatos específicos
        function validarNombre(nombre) {
            return nombre !== "";
        }

        function validarCorreo(correo) {
             // Utiliza una expresión regular para validar el formato de correo electrónico
            var regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return correo.trim() !== "" && regexCorreo.test(correo);
        }

        function validarWhatsapp(whatsapp) {
            // Utiliza una expresión regular para validar que tenga al menos 10 dígitos
            var regexWhatsapp = /^\d{10,}$/;
            return whatsapp.trim() !== "" && regexWhatsapp.test(whatsapp);
        }
    });
</script>
</body>
</html>