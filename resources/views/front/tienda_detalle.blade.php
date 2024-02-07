@extends('layouts.front')

@section('title', 'Detalle')

@section('cssExtras')
    <link rel="stylesheet" href="{{ asset('css/front/store_detalle.css') }}">
@endsection

@section('styleExtras')

@endsection

@section('content')

@php
    $slides = 5;
@endphp

<div class="container-fluid" data-aos="zoom-in">
    <div class="row">
        <div class="col-10 py-5 mx-auto">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-12 col-12 mx-auto">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="slider-container">
                                <div class="slider">
                                    <div class="slide">
                                        <div class="imagen-galeria" style="background-image: url('{{ asset('img/photos/store_detalle/producto.png') }}');"></div>
                                    </div>
                                    <div class="slide">
                                        <div class="imagen-galeria" style="background-image: url('{{ asset('img/photos/index/01_.png') }}');"></div>
                                    </div>
                                    <div class="slide">
                                        <div class="imagen-galeria" style="background-image: url('{{ asset('img/photos/index/02_.png') }}');"></div>
                                    </div>
                                    <div class="slide">
                                        <div class="imagen-galeria" style="background-image: url('{{ asset('img/photos/index/03_.png') }}');"></div>
                                    </div>
                                    <div class="slide">
                                        <div class="imagen-galeria" style="background-image: url('{{ asset('img/photos/index/04_.png') }}');"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-11 mx-auto text-end fs-5">
                            @for ($i = 0; $i < $slides; $i++)
                                <a href="#/" class="slide-link text-dark puntos" data-slide-index="{{ $i }}"><i class="bi bi-dash-lg"></i></a> 
                            @endfor
                            <a href="#/" class="prev-btn text-dark anterior"><i class="bi bi-chevron-left"></i></a>
                            <a href="#/" class="next-btn text-dark siguiente"><i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto mt-5">
                    <div class="row mt-5">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
                            <div class="row">
                                <div class="col fs-1">
                                    Calzado #01
                                </div>
                            </div>
                            <div class="row">
                                <div class="col border-bottom border-dark"></div>
                            </div>
                            <div class="row">
                                <div class="col fs-4">
                                    Lanzamiento de verano
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-4 col-4 text-start fs-5">
                                    $4,800
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-sm-4 col-4 text-start fs-5">
                                    $4,320
                                </div>
                                <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-start fs-5">
                                    10% de Descuento
                                </div>
                            </div>
                            <div class="row">
                                <div class="col py-3 text-decoration-justify fs-5 prod-desc">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur iste odit natus quae dolorem tempora ipsam quasi neque ipsum aperiam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla facilis at doloremque illum recusandae impedit similique in, consequuntur officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, nemo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo facilis eum! Recusandae, eos. Deleniti officia facere dicta ipsam ea!
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6 p-1">
                                    <div class="card px-1 carta">
                                        <button class="btn btn-outline toggle-button talla border-0 fs-5 w-100" value="1">
                                            22mx
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6 p-1">
                                    <div class="card px-1">
                                        <button class="btn btn-outline toggle-button talla border-0 fs-5 w-100" value="2">
                                            23.5mx
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6 p-1">
                                    <div class="card px-1">
                                        <button class="btn btn-outline toggle-button talla border-0 fs-5 w-100" value="3">
                                            22mx
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6 p-1">
                                    <div class="card px-1">
                                        <button class="btn btn-outline toggle-button talla border-0 fs-5 w-100" value="4">
                                            23.5mx
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6 p-1">
                                    <div class="card px-1">
                                        <button class="btn btn-outline toggle-button talla border-0 fs-5 w-100" value="5">
                                            22mx
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6 p-1">
                                    <div class="card px-1">
                                        <button class="btn btn-outline toggle-button talla border-0 fs-5 w-100" value="6">
                                            23.5mx
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6 p-1">
                                    <div class="card px-1">
                                        <button class="btn btn-outline toggle-button talla border-0 fs-5 w-100" value="7">
                                            22mx
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6 p-1">
                                    <div class="card px-1">
                                        <button class="btn btn-outline toggle-button talla border-0 fs-5 w-100" value="8">
                                            23.5mx
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-12 p-1">
                                    <button class="btn btn-outline bg-black text-white w-100 py-3">
                                        AÑADIR AL CARRITO
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" data-aos="zoom-out">
        <div class="col-11 mx-auto fs-1">
            PREFERENCIAS
        </div>
    </div>
    <div class="row py-3" data-aos="zoom-out">
        <div class="col-11 mx-auto">
            <div class="row">
                <div class="slider-preferencias">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                        <a href="{{ route('front.producto', ['id' => 0]) }}" class="text-decoration-none">
                            <div class="card bg-transparent border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-start">
                                            Calzado #01
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-end">
                                            $2,800
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                        <a href="{{ route('front.producto', ['id' => 0]) }}" class="text-decoration-none">
                            <div class="card bg-transparent border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('{{ asset('img/photos/index/02_.png') }}');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-start">
                                            Calzado #02
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-end">
                                            $2,800
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                        <a href="{{ route('front.producto', ['id' => 0]) }}" class="text-decoration-none">
                            <div class="card bg-transparent border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('{{ asset('img/photos/index/03_.png') }}');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-start">
                                            Calzado #03
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-end">
                                            $2,800
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                        <a href="{{ route('front.producto', ['id' => 0]) }}" class="text-decoration-none">
                            <div class="card bg-transparent border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('{{ asset('img/photos/index/04_.png') }}');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-start">
                                            Calzado #04
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-end">
                                            $2,800
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-9 col-11 py-4 mx-auto">
                        <a href="{{ route('front.producto', ['id' => 0]) }}" class="text-decoration-none">
                            <div class="card bg-transparent border-0 px-2">
                                <div class="img-lanzamientos" style="
                                    background-image: url('{{ asset('img/photos/index/04_.png') }}');
                                "></div>
                                <div class="card-body border-0">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-start">
                                            Calzado #05
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto fs-5 text-end">
                                            $2,800
                                        </div>
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


@endsection

@section('jqueryExtra')
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
    $('.slider-preferencias').slick({
        autoplay: true,
        dots: false,
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
                    dots: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
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
document.addEventListener('DOMContentLoaded', function () {
    const toggleButtons = document.querySelectorAll('.toggle-button');
    const cards = document.querySelectorAll('.card');

    toggleButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const valorDelBoton = button.value;
            console.log('Valor del botón: ' + valorDelBoton);

            const group = button.getAttribute('data-group');
            const buttonsInGroup = document.querySelectorAll('.toggle-button[data-group="' + group + '"]');
            
            buttonsInGroup.forEach(function (otherButton) {
                if (otherButton !== button) {
                    otherButton.classList.remove('active');
                }
            });

            toggleButtons.forEach(function (otherToggleButton) {
                if (otherToggleButton !== button) {
                    otherToggleButton.disabled = false;
                }
            });

            button.classList.toggle('active');
            button.disabled = true;

            cards.forEach(function (card) {
                card.classList.remove('border-black');
            });

            const carta = button.closest('.card');
            carta.classList.toggle('border-black');
        });

        button.addEventListener('mouseup', function (event) {
            if (!button.contains(event.target)) {
                toggleButtons.forEach(function (otherToggleButton) {
                    otherToggleButton.disabled = false;
                });
            }
        });
    });
});
</script>




<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        const slideLinks = document.querySelectorAll('.slide-link');

        let currentIndex = 0;

        function updateSlider() {
            const translateValue = -currentIndex * 100 + '%';
            slider.style.transform = 'translateX(' + translateValue + ')';
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlider();
            removeActiveClass(); // Elimina clases activas al cambiar de slide
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlider();
            removeActiveClass(); // Elimina clases activas al cambiar de slide
        }

        function goToSlide(index) {
            currentIndex = index;
            updateSlider();
            removeActiveClass(); // Elimina clases activas al cambiar de slide
        }

        function removeActiveClass() {
            // Elimina las clases activas de todos los elementos
            document.querySelectorAll('.puntos, .anterior, .siguiente').forEach(function (el) {
                el.classList.remove('active');
            });
        }

        document.querySelector('.next-btn').addEventListener('click', function () {
            nextSlide();
            // Agrega la clase activa al elemento siguiente
            document.querySelector('.siguiente').classList.add('active');
        });

        document.querySelector('.prev-btn').addEventListener('click', function () {
            prevSlide();
            // Agrega la clase activa al elemento anterior
            document.querySelector('.anterior').classList.add('active');
        });

        slideLinks.forEach(function (link, index) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                goToSlide(index);
                // Agrega la clase activa al elemento actual
                link.classList.add('active');
            });
        });
    });
</script>
@endsection
