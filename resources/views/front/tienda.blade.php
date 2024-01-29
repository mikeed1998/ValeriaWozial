@extends('layouts.front')

@section('title', 'Tienda')

@section('cssExtras')
    <link rel="stylesheet" href="{{ asset('css/front/store.css') }}">
@endsection

@section('styleExtras')

@endsection

@section('content')


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
                            <button class="btn py-3 px-5 bg-black text-white fs-4 rounded-0">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="row">
                                            <div class="col-10 text-start">
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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
                                    background-image: url('{{ asset('img/photos/index/01_.png') }}');
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


@endsection

@section('jqueryExtra')

<script>
    $(document).ready(function() {
        var $grid = $('.js-filter').isotope({
            itemSelector: '.categoria',
            layoutMode: 'fitRows'
        });

        $('.filter-option').on('click', function(e) {
            e.preventDefault();
            var filterValue = $(this).data('filter');
            // console.log(filterValue);
            $grid.isotope({ filter: filterValue });
            // Captura el nombre de la categoría desde el enlace clicado
            var categoriaNombre = $(this).find('.texto-circulo').text();

            // Actualiza el contenido de la etiqueta div con el nombre de la categoría
            $('#categoria-titulo').text(categoriaNombre);
        });
    });

</script>


@endsection
