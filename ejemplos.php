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
</head>
<body>

    <?=$header;?>

    <div class="container">
        <div class="row">
            <div class="col p-5">
                <i class="bi bi-apple display-5"></i>
                <i class="bi bi-android2 display-5"></i>
                <i class="bi bi-arrow-left-right display-5"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <textarea id="summernote" name="" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col display-5">
                Filtro Isotope
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="filter-buttons py-2">
                    <button class="btn btn-info" data-filter="*">Todos</button>
                    <button class="btn btn-info" data-filter=".categoria1">Categoría 1</button>
                    <button class="btn btn-info" data-filter=".categoria2">Categoría 2</button>
                    <button class="btn btn-info" data-filter=".categoria3">Categoría 3</button>
                </div>

                <div class="grid row">
                    <div class="col-4 border border-dark p-5 elemento categoria1">Elemento 1</div>
                    <div class="col-4 border border-dark p-5 elemento categoria2">Elemento 2</div>
                    <div class="col-4 border border-dark p-5 elemento categoria1">Elemento 3</div>
                    <div class="col-4 border border-dark p-5 elemento categoria2">Elemento 4</div>
                    <div class="col-4 border border-dark p-5 elemento categoria3">Elemento 5</div>
                    <div class="col-4 border border-dark p-5 elemento categoria3">Elemento 6</div>
                    <div class="col-4 border border-dark p-5 elemento categoria1">Elemento 7</div>
                    <div class="col-4 border border-dark p-5 elemento categoria2">Elemento 8</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container " data-aos="fade-up">
        <div class="row">
            <div class="carru">
                <div class="col-4 p-5 fs-1 border border-dark m-5">sa</div>
                <div class="col-4 p-5 fs-1 border border-dark m-5">assa</div>
                <div class="col-4 p-5 fs-1 border border-dark m-5">dsds</div>
                <div class="col-4 p-5 fs-1 border border-dark m-5">sdds</div>
                <div class="col-4 p-5 fs-1 border border-dark m-5">fdf</div>
                <div class="col-4 p-5 fs-1 border border-dark m-5">fdf</div>
            </div>
        </div>
    </div>

    <!-- Define un contenedor para el mapa -->
    <div id="mapa" style="height: 500px;" data-aos="zoom-in"></div>

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
    <!-- Filtrado con Isotope.js -->
    <script src="js/isotope.js"></script>
    <script>
        $('.carru').slick({
            dots: true,
            slidesToShow: 4,
        });
    </script>
    <script>
        AOS.init(); // Inicializar libreria aos
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
    <script>
        $(document).ready(function() {
            // Inicializa Isotope en el contenedor de la cuadrícula
            var $grid = $('.grid').isotope({
                itemSelector: '.elemento',
                layoutMode: 'fitRows'
            });

            // Agrega el manejo de eventos a los botones de filtro
            $('.filter-buttons').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                // Filtra los elementos de acuerdo con la categoría seleccionada
                $grid.isotope({ filter: filterValue });
            });
        });
    </script>
    <script>
        var mapa = L.map('mapa').setView([23.6345, -102.5528], 5);

        // Capa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(mapa);

        // GeoJSON de los estados mexicanos (Fuente: https://geojson-maps.ash.ms/)
        var geojsonEstados = {
            "type": "FeatureCollection",
            "features": [
                // Aquí van los datos GeoJSON de cada estado
                // Puedes encontrar GeoJSON de los estados mexicanos en varios recursos en línea
                // Ejemplo para un estado ficticio:
                {
                    "type": "Feature",
                    "properties": { "estado": "Ejemplo" },
                    "geometry": {
                        "type": "Polygon",
                        "coordinates": [
                            [
                                [-120, 15],
                                [-120, 20],
                                [-85, 20],
                                [-85, 15],
                                [-90, 15]
                            ]
                        ]
                    }
                },
                // Agrega más estados según sea necesario
            ]
        };

        // Agrega la capa GeoJSON de los estados
        L.geoJSON(geojsonEstados).addTo(mapa);

        // Puntos de ejemplo para algunos estados mexicanos
        var puntos = [
            { estado: 'Aguascalientes', coordenadas: [21.8853, -102.2916] },
            { estado: 'Baja California', coordenadas: [30.8406, -115.2838] },
            { estado: 'Campeche', coordenadas: [19.8301, -90.5349] },
            // Agrega más estados según sea necesario
        ];

        // Agrega marcadores para cada punto
        puntos.forEach(function(punto) {
            L.marker(punto.coordenadas).addTo(mapa)
                .bindPopup('<b>' + punto.estado + '</b>'); // Puedes personalizar el contenido del popup si es necesario
        });
    </script>


</body>
</html>