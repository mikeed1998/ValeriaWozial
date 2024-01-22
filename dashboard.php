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
    <link rel="stylesheet" href="css/front/dashboard.css">
</head>
<body>

    <?=$header;?>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-4 border border-dark">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6 mx-auto">
                                <div class="row mt-5">
                                    <div class="col text-center py-2 fs-2" style="background-color: #ECECEC;">
                                        ¡Hola AnaPAU!
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col" style="height: 24rem; background-color: #F5F5F5;">
                                        <div class="row pt-5">
                                            <div class="col-9 mx-auto">
                                                <div class="row">
                                                    <div class="col-9 mx-auto"><a href="#/" class="btn btn-outline fs-3 border-0 dashboard-link" id="opc-pedidos">Pedidos</a></div>
                                                    <div class="col-12"><hr class="m-0"></div>
                                                    <div class="col-9 mx-auto"><a href="#/" class="btn btn-outline fs-3 border-0 dashboard-link" id="opc-cuenta">Mi cuenta</a></div>
                                                    <div class="col-12"><hr class="m-0"></div>
                                                    <div class="col-9 mx-auto"><a href="#/" class="btn btn-outline fs-3 border-0 dashboard-link" id="opc-direcciones">Direcciones</a></div>
                                                    <div class="col-12"><hr class="m-0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 px-0">
                                        <a href="#/" class="btn btn-ooutline w-100 fs-5 rounded-0 py-3 dashboard-boton">CERRAR SESIÓN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 border border-dark" id="dashboard-pedidos">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <div class="row">
                                    <div class="col-9 border">
                                        <div class="row mt-5">
                                            <div class="col py-2 px-5 fs-2">
                                                PEDIDOS
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 border border-dark" id="dashboard-cuenta">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <div class="row">
                                    <div class="col-9 border">
                                        <div class="row mt-5">
                                            <div class="col py-2 px-5 fs-2">
                                                MI CUENTA
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 border border-dark" id="dashboard-direcciones">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <div class="row">
                                    <div class="col-9  border">
                                        <div class="row mt-5">
                                            <div class="col py-2 px-5 fs-2">
                                                DIRECCIONES
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6 px-5">
                                                <div class="card card-direccion p-3 rounded-0">
                                                    <div class="row">
                                                        <div class="col card-prederteminada text-end">
                                                            Predeterminada
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col card-nombre text-start">
                                                            Ana Paula Covarrubias
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col py-2" style="text-align: justify;">
                                                            Real acueducto 335 piso 6, Puerta de Hierro, Zapopan, Jalisco 45116
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col py-2">
                                                            +52 3338096501
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col py-2">
                                                            anapaula@wozial.com
                                                        </div>
                                                    </div>
                                                    <div class="row card-acciones">
                                                        <div class="col-4"></div>
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <div class="col-6 text-end">
                                                                    <a href="#/" class="card-acciones_link">editar</a>
                                                                </div>
                                                                <div class="col-6 card-acciones_link">
                                                                    <a href="#/" class="card-acciones_link">eliminar</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 px-5">
                                                <div class="card card-direccion p-3 rounded-0">
                                                    <div class="row">
                                                        <div class="col card-prederteminada text-end">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col card-nombre text-start">
                                                            Ana Paula Covarrubias
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col py-2" style="text-align: justify;">
                                                            Real acueducto 335 piso 6, Puerta de Hierro, Zapopan, Jalisco 45116
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col py-2">
                                                            +52 3338096501
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col py-2">
                                                            anapaula@wozial.com
                                                        </div>
                                                    </div>
                                                    <div class="row card-acciones">
                                                        <div class="col-4"></div>
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <div class="col-6 text-end">
                                                                    <a href="#/" class="card-acciones_link">editar</a>
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
                                        <div class="row mt-4">
                                            <div class="col-6 px-5">
                                                <div class="card position-relative rounded-0" style="height: 24rem;">
                                                    <div class="col-6 position-absolute top-50 start-50 translate-middle">
                                                        <a href="#/" class="card-acciones_link">
                                                            <div class="row">
                                                                <div class="col text-center">
                                                                    <i class="bi bi-plus-circle display-5"></i>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 text-center card-nombre">
                                                                    Añadir nueva solución
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
</body>
</html>