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
    <link rel="stylesheet" href="css/front/iniciar_sesion.css">
</head>
<body>

    <?=$header;?>

    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col position-relative fondo-contenedor" style="background-image: url('img/index/slider.png');">
                <div class="col-9 py-5 carta-sesion position-absolute mt-4 top-50 start-50 translate-middle">
                    <div class="row">
                        <div class="col-6 py-1">
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col mt-5 text-center carta-sesion_titulo">
                                            INICIA SESIÓN
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center fs-5" style="height: 5rem;">
                                            Registrarse para comprar hace que se más sencillo comprobar y ver los pedidos
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col py-2">
                                            <input type="email" class="form-control fs-4 input-sesion shadow-none" placeholder="Email * *">
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-12 mx-auto">
                                            <input type="submit" class="btn btn-outline py-3 w-100 fs-5 bg-black text-white rounded-0" value="INICIAR SESIÓN">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-12 mx-auto">
                                            <a href="#/" class="btn btn-outline py-3 w-100 fs-5 bg-transparent text-dark rounded-0">REGISTRO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 py-1">
                            <div class="row">
                                
                                <div class="col-9 mx-auto">
                                    <div class="row">
                                        <div class="col mt-5 text-center carta-sesion_titulo">
                                            CONTINUA COMO INVITADO
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center fs-5" style="height: 1rem;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col py-3">
                                            <input type="email" class="form-control fs-4 input-sesion shadow-none" placeholder="Email * *">
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-12 mx-auto">
                                            <input type="submit" class="btn btn-outline py-3 w-100 fs-5 bg-black text-white rounded-0" value="CONTINUAR">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col position-relative fondo-contenedor shadow-lg" style="background-image: url('img/index/slider.png');">
                <div class="col-xxl-9 col-xl-10 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto py-5 carta-sesion position-absolute mt-4 top-50 start-50 translate-middle">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-10 col-11 mx-auto">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 "></div>
                                <div class="col-xxl-9 col-xl-9 col-lg-9">
                                    <div class="row">
                                        <div class="col mt-5 text-center carta-sesion_titulo">
                                            INICIA SESIÓN
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center fs-5 carta-sesion_texto">
                                            Registrarse para comprar hace que se más sencillo comprobar y ver los pedidos
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col py-3">
                                            <input type="email" class="form-control fs-4 input-sesion shadow-none" placeholder="Email * *">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
                                            <input type="submit" class="btn btn-outline py-3 w-100 fs-5 bg-black text-white rounded-0" value="INICIAR SESIÓN">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
                                            <a href="#/" class="btn btn-outline py-3 w-100 fs-5 bg-transparent text-dark rounded-0">REGISTRO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-10 col-11 mx-auto">
                            <div class="row">
                                <div class="col-xxl-9 col-xl-9 col-lg-9 mx-auto">
                                    <div class="row">
                                        <div class="col mt-5 text-center carta-sesion_titulo">
                                            CONTINUA COMO INVITADO
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center fs-5 carta-sesion_texto">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col py-3">
                                            <input type="email" class="form-control fs-4 input-sesion shadow-none" placeholder="Email * *">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
                                            <input type="submit" class="btn btn-outline py-3 w-100 fs-5 bg-black text-white rounded-0" value="CONTINUAR">
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
</body>
</html>