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
</head>
<body>

    <?=$header;?>

    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-xxl-6 col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 mx-auto">
                
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
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12 py-1">
                                                <div style="
                                                    background-image: url('img/store_detalle/producto.png');
                                                    background-size: cover;
                                                    background-position: center center;
                                                    background-repeat: no-repeat;
                                                    width: 100%;
                                                    height: 7rem;
                                                "></div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
                                                <div class="row">
                                                    <div class="col fs-5 py-0">
                                                        Neque porro quisquam est qui dolorem, consectetur, adipisci velit..."
                                                    </div>
                                                </div>
                                                <div class="row py-2">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                                                <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                    23mx
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                                                <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                    cant. 1
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row fs-5">
                                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 text-center text-decoration-line-through">
                                                        $4,800 
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 text-center">
                                                        $4,320 
                                                    </div>
                                                    <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-9 col-sm-12 col-12 col-md-9">
                                                        %10 de descuento 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-2 art-carrito" id="art-carrito-1">
                                <div class="row">
                                    <div class="col-6 fs-3 text-start">
                                        Calzado #02
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
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-12 py-1">
                                                <div style="
                                                    background-image: url('img/store_detalle/producto.png');
                                                    background-size: cover;
                                                    background-position: center center;
                                                    background-repeat: no-repeat;
                                                    width: 100%;
                                                    height: 7rem;
                                                "></div>
                                            </div>
                                            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-8 col-12">
                                                <div class="row">
                                                    <div class="col fs-5 py-0">
                                                        Neque porro quisquam est qui dolorem, consectetur, adipisci velit..."
                                                    </div>
                                                </div>
                                                <div class="row py-2">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                                                <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                    23mx
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                                                <div class="card py-2 border border-dark rounded-0 text-center fs-5">
                                                                    cant. 1
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row fs-5">
                                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 text-center text-decoration-line-through">
                                                        $4,800 
                                                    </div>
                                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 text-center">
                                                        $4,320 
                                                    </div>
                                                    <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-9 col-sm-12 col-12 col-md-9">
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
                                    <div class="col">
                                        <button id="comprar" class="btn w-100 border border-dark shadow-none fs-5 py-2 text-white bg-black text-center">
                                            COMPRAR
                                        </button>
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






