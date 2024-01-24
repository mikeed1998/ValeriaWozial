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
    <link rel="stylesheet" href="css/front/pagos.css">
    <style>

        @media (min-width: 1800px) {
            
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

    <?=$header;?>
    
    <div class="container my-5">
        <div class="row py-3">
            <div class="col-9 mx-auto text-center display-2">
                PAGOS
            </div>
        </div>
        <div class="row">
            <div class="col-6 py-3 mx-auto text-center">
                Lorem optio vero recusandae ducimus sapiente ad ea a sed. Voluptatem ipsa temporibus doloribus, dignissimos quam recusandae vero ea iure.
            </div>
        </div>
        <div class="row">
            <div class="col-10 py-3 mx-auto" style="text-align: justify;">
                <p>Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem porro deserunt in temporibus. Fuga dolor ducimus quae ut quidem cum, illum sit ad, reiciendis, rerum quos omnis labore. Temporibus, dignissimos. ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio numquam, vel maxime in adipisci nam quas consectetur cupiditate iusto obcaecati! Ab ipsum sunt odio ipsam perferendis, a tempora nobis deserunt vel iure! dolor sit amet consectetur adipisicing elit. Rem, et beatae omnis esse praesentium reprehenderit? Labore illo a in ratione iusto nemo totam quibusdam sint, porro ducimus? Recusandae, vitae voluptate.</p>
                <p>Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem porro deserunt in temporibus. Fuga dolor ducimus quae ut quidem cum, illum sit ad, reiciendis, rerum quos omnis labore. Temporibus, dignissimos. ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio numquam, vel maxime in adipisci nam quas consectetur cupiditate iusto obcaecati! Ab ipsum sunt odio ipsam perferendis, a tempora nobis deserunt vel iure! dolor sit amet consectetur adipisicing elit. Rem, et beatae omnis esse praesentium reprehenderit? Labore illo a in ratione iusto nemo totam quibusdam sint, porro ducimus? Recusandae, vitae voluptate.</p>
                <p>Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem porro deserunt in temporibus. Fuga dolor ducimus quae ut quidem cum, illum sit ad, reiciendis, rerum quos omnis labore. Temporibus, dignissimos. ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio numquam, vel maxime in adipisci nam quas consectetur cupiditate iusto obcaecati! Ab ipsum sunt odio ipsam perferendis, a tempora nobis deserunt vel iure! dolor sit amet consectetur adipisicing elit. Rem, et beatae omnis esse praesentium reprehenderit? Labore illo a in ratione iusto nemo totam quibusdam sint, porro ducimus? Recusandae, vitae voluptate.</p>
                <p>Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem porro deserunt in temporibus. Fuga dolor ducimus quae ut quidem cum, illum sit ad, reiciendis, rerum quos omnis labore. Temporibus, dignissimos. ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio numquam, vel maxime in adipisci nam quas consectetur cupiditate iusto obcaecati! Ab ipsum sunt odio ipsam perferendis, a tempora nobis deserunt vel iure! dolor sit amet consectetur adipisicing elit. Rem, et beatae omnis esse praesentium reprehenderit? Labore illo a in ratione iusto nemo totam quibusdam sint, porro ducimus? Recusandae, vitae voluptate.</p>
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