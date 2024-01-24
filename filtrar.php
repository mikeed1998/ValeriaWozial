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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap-5.3.2/css/bootstrap.css">
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free-6.5.1/css/all.css">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap-icons-1.11.3/font/bootstrap-icons.css">
    <!-- Sliders de Slick -->
    <link rel="stylesheet" href="vendor/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="vendor/slick-1.8.1/slick/slick-theme.css">
    <!-- Animaciones de AOS -->
    <link rel="stylesheet" href="vendor/aos-2.0/dist/aos.css">
    <!-- Libreria de mapas Leaflet -->
    <link rel="stylesheet" href="vendor/leaflet/leaflet.css">
    <!-- Summernote Editor WYSIWYG  -->
    <link rel="stylesheet" href="vendor/summernote/summernote-lite.css">
    <link rel="stylesheet" href="css/front/header.css">
    <link rel="stylesheet" href="css/front/footer.css">
    <style>

        .page-link_link, .page-link_icon {
            font-size: 1.8rem;
            border: 0;
            color: #000000;
        }

        .page-link_link:hover {
            text-decoration: underline;
            background-color: #FFFFFF;
        }

        .card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s; /* Transición para suavizar el efecto */
        }

        .card:hover {
            transform: scale(1.05); /* Efecto de escala al hacer hover */
        }

        @media (min-width: 1800px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 24rem;
            }
        }

        @media (min-width: 1400px) and (max-width: 1799px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 18rem;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 20rem;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 16rem;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 19rem;
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 21rem;
            }
        }

        @media (min-width: 320px) and (max-width: 480px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 21rem;
            }
        }

        @media (min-width: 0px) and (max-width: 319px) {
            .img-lanzamientos {
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 0.2rem;
                width: 100%;
                height: 13rem;
            }
        }

    </style>
</head>
<body>

    <?=$header;?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-11 mx-auto">
                <div class="row py-3">
                    <div class="col">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-9 col-11 mx-auto py-2 fs-2 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                CALZADO / CATEGORÍA
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-9 col-11 mx-auto text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                <button class="btn py-2 px-5 bg-black text-white fs-4 rounded-0">
                                    <div class="row">
                                        <div class="col text-center">
                                            <div class="row">
                                                <div class="col-10">
                                                    F I L T R A R
                                                </div>
                                                <div class="col-2">
                                                    <i class="bi bi-sliders"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" data-aos="zoom-in-up">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                                <div class="card bg-transparent border-0 px-2">
                                    <div class="img-lanzamientos" style="
                                        background-image: url('img/index/01_.png');
                                    "></div>
                                    <div class="card-body border-0">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-center">
                                                Calzado #01
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-center">
                                                $2,800
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-5">
                            <div class="col py-3 d-flex justify-content-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link page-link_icon" href="#" aria-label="Previous">
                                                <i class="bi bi-chevron-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link page-link_link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link page-link_link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link page-link_link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link page-link_icon" href="#" aria-label="Next">
                                                <i class="bi bi-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?=$footer;?>

    <!-- JQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="vendor/bootstrap-5.3.2/js/bootstrap.bundle.js"></script>
    <!-- Iconos de Font Awesome -->
    <script src="vendor/fontawesome-free-6.5.1/js/all.js"></script>
    <!-- Sliders de Slick -->
    <script src="vendor/slick-1.8.1/slick/slick.js"></script>
    <!-- Animaciones de AOS -->
    <script src="vendor/aos-2.0/dist/aos.js"></script>
    <!-- Libreria de mapas Leaflet -->
    <script src="vendor/leaflet/leaflet.js"></script>
    <!-- Summernote Editor WYSIWYG  -->
    <script src="vendor/summernote/summernote-lite.js"></script>
    <script>
        AOS.init(); // Inicializar libreria aos
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
</body>
</html>