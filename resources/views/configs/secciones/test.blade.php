@extends('layouts.admin')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<!-- One of the following themes -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/> <!-- 'classic' theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/monolith.min.css"/> <!-- 'monolith' theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css"/> <!-- 'nano' theme -->

@endsection
@section('jsLibExtras')
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
@section('styleExtras')
	<style>
	    /* @font-face {
			font-family: 'Neusharp Bold';
			font-style: normal;
			font-weight: normal;
			src: local('Neusharp Bold'), url({{ asset('fonts/Neusharp-Bold/NeusharpBold-7B8RV.woff') }}) format('woff');
    	} */

        @font-face {
			font-family: 'Sackers Gothic Light AT Regular';
			src: url('../../vendor/fonts/Sackers_Gothic_Light_AT_Regular.otf') format('opentype');
		}

        @font-face {
			font-family: 'Futura Std Book';
			src: url('../../vendor/fonts/Futura_Std_Book.otf') format('opentype');
		}

		body {
			font-family: 'Sackers Gothic Light AT Regular', sans-serif;
			font-weight: 400;
		}

        .form-control {
            border: 1px solid #000000;
            border-radius: 0;
            box-shadow: none;
        }

		body {
			background-color: #e5e8eb  !important;
		}

		.card-header {
			background-color: #b0c1d1  !important;
		}

		.black-skin .btn-primary {
			background-color: #b0c1d1  !important;
		}

        .form-select {
            box-shadow: none;
        }

        .btn-cerrar {
            box-shadow: none;
            background-color: #FFFFFF;
            border: 1px solid #000000;
            border-radius: 0;
            color: #000000;
        }

        .btn-agregar {
            box-shadow: none;
            background-color: #000000;
            border: 1px solid #000000;
            border-radius: 0;
            color: #FFFFFF;
        }

		.card-slick{
			background: white;
			color: black;
			transform: scaleY(1);
			height: 307px;
			transition: all 0.5s;
		}

		.card-slick:hover{

			background: #9bb938;
			color: white;
			margin-top: -60px;
			height: 367px;
			position: relative;
			z-index: 1000;
			transition: all 0.5s;
		}

		.camp_img{
			opacity: 0%;
			transition: all 0.5s;
		}

		.camp_img_cont:hover{

		}

		.camp_img_cont:hover .camp_img{
			opacity: 100%;
			background: #3a3a3a;
			transition: all 0.5s;
		}

		.edit-cuadro{
			background: rgba(72, 72, 72, 0.547);
			transition: all 0.2s;
		}

		.edit-cuadro:hover{
			background: rgba(72, 72, 72, 0.9);
			transition: all 0.2s;
		}

		.edit-n{
			opacity: 0%;
			transition: all 0.5s;
		}

		.edit-cuadro:hover .edit-n{
			opacity: 100%;
			transition: all 0.5s;
		}

		.switch {
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
		}

		.switch input {
			display:none;
		}

		/* Formateamos la caja del interruptor sobre la cual se deslizará la perilla de control o slider */
		.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			-webkit-transition: .4s;
			transition: .4s;
		}

		/* Pintamos la perilla de control o slider usando el selector before */
		.slider:before {
			position: absolute;
			content: "";
			height: 26px;
			width: 26px;
			left: 4px;
			bottom: 4px;
			background-color: white;
			-webkit-transition: .4s;
			transition: .4s;
		}

		/* Cambiamos el color de fondo cuando el checkbox esta activado */
		input:checked + .slider {
			background-color: #7aa2e2;
		}

		/* Deslizamos el slider a la derecha cuando el checkbox esta activado */
		input:checked + .slider:before {
			-webkit-transform: translateX(26px);
			-ms-transform: translateX(26px);
			transform: translateX(26px);
		}

		/* Aplicamos efecto de bordes redondeados en slider y en el fondo del slider */
		.slider.round {
			border-radius: 34px;
		}

		.slider.round:before {
			border-radius: 50%;
		}
		/* Formateamos el label que servirá de contenedor end */

		.containersc::-webkit-scrollbar {
			width: 8px;     /* Tamaño del scroll en vertical */
			height: 8px;    /* Tamaño del scroll en horizontal */
			display: none;  /* Ocultar scroll */
		}
		/* Ponemos un color de fondo y redondeamos las esquinas del thumb */
		.containersc::-webkit-scrollbar-thumb {
			background: #ccc;
			border-radius: 4px;
		}

		/* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
		.containersc::-webkit-scrollbar-thumb:hover {
			background: #b3b3b3;
			box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
		}

		/* Cambiamos el fondo cuando esté en active */
		.containersc::-webkit-scrollbar-thumb:active {
			background-color: #999999;
		}
		/* Ponemos un color de fondo y redondeamos las esquinas del track */
		.containersc::-webkit-scrollbar-track {
			background: #e1e1e1;
			border-radius: 4px;
		}

		/* Cambiamos el fondo cuando esté en active o hover */
		.containersc::-webkit-scrollbar-track:hover,
		.containersc::-webkit-scrollbar-track:active {
			background: #d4d4d4;
		}

		/* input con opacidad y sin boton de selecciond e archivo */
		.file-upload input[type="file"] {
			position: absolute;
			left: -9999px;
		}

		.file-upload label {
			display: inline-block;
			background-color: #00000031;
			color: #fff;
			padding: 6px 12px;
			cursor: pointer;
			border-radius: 4px;
			font-weight: normal;
			opacity: 0%;
		}

		.file-upload input[type="file"] + label:before {
			content: "\f07b";
			font-family: "Font Awesome 5 Free";
			font-size: 16px;
			margin-right: 5px;
			transition: all 0.5s;
		}

		.file-upload input[type="file"] + label {
			transition: all 0.5s;
		}



		.file-upload input[type="file"]:focus + label,
		.file-upload input[type="file"] + label:hover {
			backdrop-filter: blur(5px);
			background-color: #41464a37;
			opacity: 100%;
			transition: all 0.5s;
		}

		/* input con opacidad y sin boton de selecciond e archivo */

		.cargado{
			background: rgba(0, 128, 0, 0.715) !important;
		}
	</style>
	<style>
		.card{

		}

		@media only screen and (max-width: 768px){
			.cont_circle{
				bottom: -150px !important;
			}
			.circle_slider{
				width: 300px !important;
				height: 300px !important;
			}
			.img_circle{
				margin-top: -120px !important;
			}
		}
		@media only screen and (max-width: 390px){
			.cont_circle{
				bottom: -100px !important;
			}
			.circle_slider{
				width: 200px !important;
				height: 200px !important;
			}
			.img_circle{
				margin-top: -80px !important;
			}
			.img_product{
				margin-left: 0px !important;
			}
		}
	</style>
	<style>
		/* The switch - the box around the slider */
		.switch {
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
		}

		/* Hide default HTML checkbox */
		.switch input {
			opacity: 0;
			width: 0;
			height: 0;
		}

		/* The slider */
		.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			-webkit-transition: .4s;
			transition: .4s;
		}

		.slider:before {
			position: absolute;
			content: "";
			height: 26px;
			width: 26px;
			left: 4px;
			bottom: 4px;
			background-color: white;
			-webkit-transition: .4s;
			transition: .4s;
		}

		input:checked + .slider {
			background-color: #2196F3;
		}

		input:focus + .slider {
			box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
			-webkit-transform: translateX(26px);
			-ms-transform: translateX(26px);
			transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round {
			border-radius: 34px;
		}

		.slider.round:before {
			border-radius: 50%;
		}
	</style>

    <style>
        #form-general {
            display: none;
        }
    </style>
@endsection
@section('content')
	<div class="row mb-0 px-2">
		<a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>

    <div class="row">
        <div class="col-md-6 col-12 border">
            <div class="row">
                <div class="col-12">
                    <div class="col-12 my-0 text-center">
                        <p class="mt-5 text-center" style="font-size: 3.5rem;  color: #909986;">CATEGORIAS</p>
                    </div>
                </div>
                <div action="" method="POST" class="col-12 text-center d-flex justify-content-center flex-column">
                    @csrf
                    <input type="text" name="ver_si_llego" id="" value="1" hidden>
                    <h4 style="">Agregar categoria</h4>
                    <div>
                        <button type="submit" style="background: none !important; border:none;" data-bs-toggle="modal" data-bs-target="#modal-categorias"><i class="fa-solid fa-circle-plus" style="font-size: 2rem;"></i></button>
                    </div>
                </div>
                <div class="col-12 mx-auto mb-0 pt-5">
                    <div class="row mb-2">
                        <div class="slider-categorias">
                            @foreach($categorias as $c)
                                <div class="col-4 px-3 mb-3">
                                    <div class="card position-relative" style=" height: 200px; position: relative;">
                                        <img src="{{asset('img/photos/valeriabazante_categorias/'.$c->icono)}}" style=" height: 100%;" alt="">
                                        <div class="card d-flex justify-content-center align-items-center w-100 position-absolute bottom-0 start-50 translate-middle bg-transparent border-0">
                                            <form id="form_aux-{{ $c->id }}" action="image_input_ejemplo" method="POST" class="file-upload px-auto col-7" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id_elemento" value="{{ $c->id }}">
                                                <input type="hidden" name="tipo" value="categoria">
                                                <input id="img_aux-{{ $c->id }}" class="m-0 p-0" type="file" name="archivo">
                                                <label class="col-12 m-0 px-2 d-flex justify-content-center align-items-center" for="img_aux-{{ $c->id }}" style=" height: 100%; opacity: 100%; border-radius: 20px;">Actualizar Imagen</label>
                                            </form>
                                            <script>
                                                $('#img_aux-{{ $c->id }}').change(function(e) {
                                                    $('#form_aux-{{ $c->id }}').trigger('submit');
                                                });
                                            </script>
                                        </div>
                                        <style>
                                            .fa-trash:hover{
                                                opacity: 50%;
                                            }
                                        </style>
                                        <form class="col-12 d-flex justify-content-end" action="{{route('config.seccion.eliminarCategoria')}}" method="POST" style="position: absolute; top: 10px;">
                                            @csrf
                                            <input type="text" name="id_categoria" value="{{$c->id}}" hidden>
                                            <button type="submit" style="background: none; border:none;">
                                                <i class="fa-solid fa-trash text-danger" style="font-size: 32px;"></i>
                                            </button>
                                        </form>
                                        <script>
                                            $('#input_img_element'+{{$c->id}}).change(function(e) {
                                                $('#form_image_element'+{{$c->id}}).trigger('submit');
                                            });
                                        </script>
                                    </div>
                                    <div class="card my-2 p-1" style="background: ; border-radius: 10px;">
                                        <textarea class="p-2 col-12 editar_text_seccion_global editarajax" data-url="{{route('config.seccion.textglobalseccion')}}" style="border:none !important; outline: none;" data-id="{{$c->id}}" data-table="PFCategoriaPepes" data-campo="categoria" name="" id=""  rows="1">{{$c->categoria}}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 border">
            <div class="row">
                <div class="col-12">
                    <div class="col-12 my-0 text-center">
                        <p class="mt-5" style="font-size: 3.5rem;  color: #909986;">SUBCATEGORIAS</p>
                    </div>
                </div>
                <div action="" method="POST" class="col-12 text-center d-flex justify-content-center flex-column">
                    @csrf
                    <input type="text" name="ver_si_llego" id="" value="1" hidden>
                    <h4 style="">Agregar subcategoria</h4>
                    <div>
                        <button type="submit" style="background: none !important; border:none;" data-bs-toggle="modal" data-bs-target="#modal-subcategorias"><i class="fa-solid fa-circle-plus" style="font-size: 2rem;"></i></button>
                    </div>
                </div>
                <div class="col-12 mx-auto mb-0 pt-5">
                    <div class="row">
                        <div class="slider-subcategorias">
                            @foreach($subcategorias as $sc)
                                <div class="col-4 px-3 mb-3">
                                    <div class="card position-relative" style=" height: 200px; position: relative;">
                                        <img src="{{asset('img/photos/valeriabazante_subcategorias/'.$sc->icono)}}" style=" height: 100%;" alt="">
                                        <div class="card d-flex justify-content-center align-items-center w-100 position-absolute bottom-0 start-50 translate-middle bg-transparent border-0">
                                            <form id="form_auxsc-{{ $sc->id }}" action="image_input_ejemplo" method="POST" class="file-upload px-auto col-7" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id_elemento" value="{{ $sc->id }}">
                                                <input type="hidden" name="tipo" value="subcategoria">
                                                <input id="imgsc_aux-{{ $sc->id }}" class="m-0 p-0" type="file" name="archivo">
                                                <label class="col-12 m-0 px-2 d-flex justify-content-center align-items-center" for="imgsc_aux-{{ $sc->id }}" style=" height: 100%; opacity: 100%; border-radius: 20px;">Actualizar Imagen</label>
                                            </form>
                                            <script>
                                                $('#imgsc_aux-{{ $sc->id }}').change(function(e) {
                                                    $('#form_auxsc-{{ $sc->id }}').trigger('submit');
                                                });
                                            </script>
                                        </div>
                                        <style>
                                            .fa-trash:hover{
                                                opacity: 50%;
                                            }
                                        </style>
                                        <form class="col-12 d-flex justify-content-end" action="{{route('config.seccion.eliminarSubcategoria')}}" method="POST" style="position: absolute; top: 10px;">
                                            @csrf
                                            <input type="text" name="id_subcategoria" value="{{$sc->id}}" hidden>
                                            <button type="submit" style="background: none; border:none;">
                                                <i class="fa-solid fa-trash text-danger" style="font-size: 32px;"></i>
                                            </button>
                                        </form>
                                        <script>
                                            $('#input_img_element'+{{$sc->id}}).change(function(e) {
                                                $('#form_image_element'+{{$sc->id}}).trigger('submit');
                                            });
                                        </script>
                                    </div>
                                    <div class="card my-2 p-1" style="background: ; border-radius: 10px;">
                                        <label disabled class="col-12 text-center py-2" name="" id="" >
                                            @foreach ($categorias as $catforsub)
                                                @if ($catforsub->id == $sc->categoria)
                                                    {{ $catforsub->categoria }}
                                                @endif
                                            @endforeach
                                        </label>
                                    </div>
                                    <div class="card my-2 p-1" style="background: ; border-radius: 10px;">
                                        <textarea class="p-2 col-12 editar_text_seccion_global editarajax" data-url="{{route('config.seccion.textglobalseccion')}}" style="border:none !important; outline: none;" data-id="{{$sc->id}}" data-table="PFSubcategoriaPepes" data-campo="subcategoria" name="" id="" rows="1">{{$sc->subcategoria}}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 border">
            <div class="col-12">
                <div class="col-12 my-0 text-center">
                    <p class="mt-5" style="font-size: 3.5rem;  color: #909986;">LANZAMIENTOS</p>
                </div>
                <div action="" method="POST" class="col-12 text-center d-flex justify-content-center flex-column">
                    @csrf
                    <input type="text" name="ver_si_llego" id="" value="1" hidden>
                    <h4 style="">Administrar lanzamientos</h4>
                    <div>
                        <button type="submit" style="background: none !important; border:none;" data-bs-toggle="modal" data-bs-target="#modal-lanzamientos"><i class="fa-solid fa-circle-plus" style="font-size: 2rem;"></i></button>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <ul class="list-group">
                        <div class="slider-lanzamientos">
                            @foreach ($lanzamientos as $lanz)
                                <li class="list-group-item border border-dark">{{ $lanz->lanzamiento }}</li>
                            @endforeach
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 border">
            <div class="col-12">
                <div class="col-12 my-0 text-center">
                    <p class="mt-5" style="font-size: 3.5rem;  color: #909986;">CUPONES</p>
                </div>
                <div action="" method="POST" class="col-12 text-center d-flex justify-content-center flex-column">
                    @csrf
                    <input type="text" name="ver_si_llego" id="" value="1" hidden>
                    <h4 style="">Administrar Cupones</h4>
                    <div>
                        <button type="submit" style="background: none !important; border:none;" data-bs-toggle="modal" data-bs-target="#modal-cupones"><i class="fa-solid fa-circle-plus" style="font-size: 2rem;"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col--md12 col-12 border">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 my-0 mx-auto text-center">
                            <p class="mt-5 text-center" style="font-size: 3.5rem;  color: #909986;">PRODUCTOS</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center d-flex justify-content-center flex-column">
                    <h4 style="">Agregar producto</h4>
                        <button style="background: none !important; border:none;"  data-bs-toggle="modal" data-bs-target="#modalproductos"><i class="fa-solid fa-circle-plus" style="font-size: 2rem;"></i></button>
                </div>
                <div class="col-12 mb-5">
                    <div class="container mb-5 d-flex flex-wrap">
                        @foreach($productos as $p)
                        <div class="col-3 p-4">
                            <a href="{{route('config.seccion.viewProduct',$p->id)}}" class="col-12" style="text-decoration: none; color: black;">
                            <div class="card position-relative p-3 d-flex justify-content-center align-items-center" style="height: 300px; position: relative;">
                                <img src="{{asset('img/photos/valeriabazante_productos/'.$p->imagen)}}" style="max-width: 217px; max-height: 241px;"alt="">
                                <div class="card d-flex justify-content-center align-items-center w-100 position-absolute bottom-0 start-50 translate-middle bg-transparent border-0">
                                    <form id="form_aux-{{ $p->id }}" action="image_input_ejemplo" method="POST" class="file-upload px-auto col-7" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_elemento" value="{{ $p->id }}">
                                        <input type="hidden" name="tipo" value="producto">
                                        <input id="img_aux-{{ $p->id }}" class="m-0 p-0" type="file" name="archivo">
                                        <label class="col-12 m-0 px-2 d-flex justify-content-center align-items-center" for="img_aux-{{ $p->id }}" style=" height: 100%; opacity: 100%; border-radius: 20px;">Actualizar Imagen</label>
                                    </form>
                                    <script>
                                        $('#img_aux-{{ $p->id }}').change(function(e) {
                                            $('#form_aux-{{ $p->id }}').trigger('submit');
                                        });
                                    </script>
                                </div>
                                    <label class="switch" style="position: absolute; top:10px; right: 10px;">
                                        <input id="checkIni_{{$p->id}}" data-id="{{$p->id}}" data-table="ValeriaProducto" data-campo="inicio" type="checkbox" @if($p->inicio == 1) checked @endif >
                                        <span class="slider round"></span>
                                    </label>

                            </div>
                            <hr>
                            <div class="col-12 d-flex flex-column" style="text-align: justify;">
                                <h5 style="">{{$p->titulo}}</h5>
                                <p>${{ number_format($p->precio_original, 2, '.', ',') }}</p>
                            </div>
                        </a>
                        </div>
                        <script>
                            $('#checkIni_'+{{$p->id}}).change(function (e){
                                var checkbox = $(this); // Almacenar una referencia al elemento
                                console.log('checkIni_'+{{$p->id}});
                                var check = 0;
                                if (checkbox.prop('checked')) {
                                    check = 1;
                                } else {
                                    check = 2;
                                }
                                console.log(check);
                                var id = checkbox.attr("data-id");
                                var tcsrf = $('meta[name="csrf-token"]').attr('content');
                                var valor = check;
                                var URL = "{{route('config.seccion.checkb')}}";

                                $.ajax({
                                    url: URL,
                                    type: 'post',
                                    dataType: 'json',
                                    data: {
                                        "_method": 'post',
                                        "_token": tcsrf,
                                        "id": id,
                                        "valor": valor
                                    }
                                })
                                .done(function(msg) {
                                    console.log(msg);
                                    if (msg.success) {
                                        toastr["success"](msg.mensaje);
                                        // Cambiar el estado de la casilla de verificación
                                        if (msg.mensaje.valor == 1) {
                                            checkbox.prop('checked', true);
                                        } else if (msg.mensaje.valor == 2) {
                                            checkbox.prop('checked', false);
                                        }
                                    } else {
                                        toastr["error"](msg.mensaje);
                                    }
                                })
                                .fail(function(msg) {
                                    toastr["error"]('Error al agregar el producto al inicio');
                                });
                            });
                        </script>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>


	<form action="{{route('config.seccion.agregarCategoria')}}" method="POST" class="modal fade" id="modal-categorias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" enctype="multipart/form-data">
		<div class="modal-dialog modal-dialog-centered">
			<div  class="modal-content" style="border-radius: 16px;" >
				@csrf
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Agregar categoria</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<style>
						.backr{
							background: #000000 !important;
						}
					</style>
					<div class="col-12 mb-2" style="height: 100px; position: relative;">
						<div  class="file-upload col-12 p-0 m-0" style=" top: 0; bottom: 0; background: ; height: 100%;" >
							@csrf
							<input id="input_img_element1" class="m-0 p-0" type="file" name="archivo" required>
							<label id="label_form1" class="col-12 m-0 p-0 d-flex justify-content-center align-items-center" for="input_img_element1" style="opacity: 100%; height: 100%;  border-radius: 16px;">Seleccionar archivo</label>
						</div>
						<script>
							$('#input_img_element1').change(function(e) {
								$('#label_form1').addClass('backr');
								$('#label_form1').html('Imagen añadida');
							});
						</script>
					</div>
					<div class="col-12">
						<input class="form-control" type="text" name="categoria" placeholder="Nombre categoria" required>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn btn-cerrar" data-bs-dismiss="modal">Cerrar</div>
					<button type="submit" class="btn btn-agregar">Agregar</button>
				</div>
			</div>
		</div>
	</form>

	<form action="{{route('config.seccion.agregarSubcategoria')}}" method="POST" class="modal fade" id="modal-subcategorias" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true" enctype="multipart/form-data">
		<div class="modal-dialog modal-dialog-centered">
			<div  class="modal-content" style="border-radius: 16px;">
				@csrf
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel2">Agregar subcategoria</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<style>
						.backr{
							background: #000000 !important;
						}
					</style>
					<div class="col-12 mb-2" style="height: 100px; position: relative;">
						<div class="file-upload col-12 p-0 m-0" style=" top: 0; bottom: 0; background: ; height: 100%;" >
							@csrf
							<input id="input_img_element2" class="m-0 p-0" type="file" name="archivo" required>
							<label id="label_form2" class="col-12 m-0 p-0 d-flex justify-content-center align-items-center" for="input_img_element2" style="opacity: 100%; height: 100%;  border-radius: 16px;">Seleccionar archivo</label>
						</div>
						<script>
							$('#input_img_element2').change(function(e) {
								$('#label_form2').addClass('backr');
								$('#label_form2').html('Imagen añadida');
							});
						</script>
					</div>
					<div class="col-12 mt-2 mb-2">
						<label for="categoria">Categoría padre</label>
						<select name="categoria" id="categoria" class="form-control" required>
							@foreach ($categorias as $catee)
								<option value="{{ $catee->id }}">{{ $catee->categoria }}</option>
							@endforeach
						</select>
					</div>
					<div class="col-12">
						<input class="form-control" type="text" name="subcategoria" placeholder="Nombre de la subcategoria" required>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn btn-cerrar" data-bs-dismiss="modal">Cerrar</div>
					<button type="submit" class="btn btn-agregar">Agregar</button>
				</div>
			</div>
		</div>
	</form>

    <form action="{{route('config.seccion.agregarLanzamiento')}}" method="POST" class="modal fade" id="modal-lanzamientos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" enctype="multipart/form-data">
		<div class="modal-dialog modal-dialog-centered">
			<div  class="modal-content" style="border-radius: 16px;" >
				@csrf
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Lanzamientos</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="col-12">
						<input class="form-control" type="text" name="lanzamiento" placeholder="Ingresa el nuevo lanzamiento" required>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn btn-cerrar" data-bs-dismiss="modal">Cerrar</div>
					<button type="submit" class="btn btn-agregar">Agregar</button>
				</div>
			</div>
		</div>
	</form>

    <form action="{{ route('config.seccion.agregarCupon') }}" method="POST" class="modal fade" id="modal-cupones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" enctype="multipart/form-data">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div  class="modal-content" style="border-radius: 16px;" >
				@csrf
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo cupon</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                    <div class="row py-3">
                        <div class="col-12">
                            <button type="button" id="btn-opc_subcategoria" class="btn btn-outline text-center btn-agregar w-100 fs-5 border border-dark rounded-0">El cupón aplica a los productos de una subcategoria</button>
                        </div>
                        <div class="col-12">
                            <button type="button" id="btn-opc_lanzamiento" class="btn btn-outline text-center btn-agregar w-100 fs-5 border border-dark rounded-0">El cupón aplica a los productos de un lanzamiento</button>
                        </div>
                        <div class="col-12">
                            <button type="button" id="btn-opc_producto" class="btn btn-outline text-center btn-agregar w-100 fs-5 border border-dark rounded-0">El cupón aplica a un solo producto</button>
                        </div>
                        <div class="col-12">
                            <button type="button" id="btn-opc_tienda" class="btn btn-outline text-center btn-agregar w-100 fs-5 border border-dark rounded-0">El cupón aplica a toda la tienda</button>
                        </div>
                    </div>
                    <div class="row" id="form-general">
                        <input type="hidden" name="tipo_cupon">
                        <div class="col">
                            <div class="row py-1">
                                <div class="col">
                                    <label class="fs-5" for="cupon_codigo">Código del cupón (pueden ser nombres, números, etc.)</label>
                                    <input type="text" class="form-control" name="cupon_codigo" id="cupon_codigo" placeholder="Nombre o código del cupón">
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-6">
                                    <label class="fs-5 mb-5" for="descuento">Descuento aplicado (porcentaje)</label>
                                    <input type="number" max="100" min="1" class="form-control" name="descuento" id="descuento" placeholder="Porcentaje del 1 al 100">
                                </div>
                                <div class="col-6">
                                    <label class="fs-5" for="descuento_envio">Descuento aplicado al envio (porcentaje)</label>
                                    <br><small>En caso de elegir envios gratis esta opción se anulará, si se deja vacio este campo no se aplicará nada.</small>
                                    <input type="number" max="100" min="1" class="form-control" name="descuento_envio" id="descuento_envio" placeholder="Porcentaje del 1 al 100">
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col">
                                    <label class="fs-5" for="cupon_priv">Selecciona la privacidad del cupón</label> <br>
                                    <small><strong>Cupón público:</strong> Se mostrará al inicio de la página bajo del header (válido para invitados y usuarios registrados)</small>
                                    <br>
                                    <small><strong>Cupón privado:</strong> Este cupón solo será accesible por aquellos que lo hayan recibido por un mail privado (válido para usuarios registrados)</small>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_privacidad" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Cupón publico
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_privacidad" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Cupón privado
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col">
                                    <label class="fs-5" for="cupon_priv">¿El cupón habilita el envio gratuito?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_envio" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Si
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio_envio" id="flexRadioDefault4" checked>
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="modal-footer">
					<div class="btn btn-cerrar" data-bs-dismiss="modal">Cerrar</div>
					<button type="submit" class="btn btn-agregar">Agregar</button>
				</div>
			</div>
		</div>
	</form>

	<div class="modal fade" id="modalproductos" data-bs-backdrop="static"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div  class="modal-dialog modal-dialog-centered modal-xl">
			<form action="{{route('config.seccion.agregarProducto')}}" method="POST" class="modal-content" id="form-productos" style="border-radius: 16px;" enctype="multipart/form-data">
				@csrf
				<div class="modal-header">
				    <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar producto</h1>
				    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<style>
						.backg_producto{
							background: #000000 !important;
						}
					</style>
					<div class="col-12 mb-2" style="height: 100px; position: relative;">
						<div  class="file-upload col-12 p-0 m-0" style=" top: 0; bottom: 0; background: ; height: 100%;" >
							<input id="input_img_producto" class="m-0 p-0" type="file" name="archivo" required>
							<label id="label_form_producto" class="col-12 m-0 p-0 d-flex justify-content-center align-items-center" for="input_img_producto" style="opacity: 100%; height: 100%;  border-radius: 16px;">Imágen del producto</label>
						</div>
                        <script>
							$('#input_img_producto').change(function(e) {
								$('#label_form_producto').addClass('backr');
								$('#label_form_producto').html('Imagen añadida');
							});
						</script>
					</div>
					<div class="col-12 d-flex flex-column">
                        <div class="row py-2">
                            <div class="col">
                                <input class="form-control mb-2" type="text" name="nombre_producto" id="" placeholder="Nombre producto" required>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-6">
                                <label for="subcategoria_form">Subcategoría a la que pertenece el producto</label>
                                <select class="form-select mb-2" id="subcategoria_form" name="subcategoria_producto" aria-label="Default select example" required>
                                    @foreach($categorias as $c)
                                        @foreach ($subcategorias as $scat)
                                            @if ($scat->categoria == $c->id)
                                                <option value="{{$scat->id}}">{{ $c->categoria }} - {{ $scat->subcategoria }}</option>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="lanzamiento_form">Lanzamiento al que pertenece</label>
                                <select class="form-select mb-2" id="lanzamiento_form" name="lanamiento_producto" aria-label="Default select example" required>
                                    @foreach ($lanzamientos as $lanzam)
                                        <option value="{{$lanzam->id}}">{{ $lanzam->lanzamiento }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-12 text-center">
                                <label for="" class="fs-5">Agregar tallas disponibles</label>
                            </div>
                            <div class="col-9 mb-2 text-center mx-auto">
                                <div class="inputsContainer">
                                    <div class="input-group mb-2">
                                        <input type="text" name="tallas_lista[]" class="tallas_producto form-control py-2">
                                    </div>
                                </div>
                                <button type="button" id="addInputButton" class="addInputButton btn btn-cerr-mdar col-12 border">Agregar otra talla</button>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-6">
                                <input class="form-control mb-2" type="number" name="cantidad_producto" id="" placeholder="Cantidad en stock" required>
                            </div>
                            <div class="col-6">
                                <input class="form-control mb-2" type="text" name="precio_producto" id="" placeholder="Precio" required>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col">
                                <label for="descripcion_producto">Descripción del producto</label>
                                <textarea class="form-control mb-2" name="descripcion_producto" id="descripcion_producto" cols="30" rows="10" placeholder="Descripcion del producto" required></textarea>
                            </div>
                        </div>
					</div>
				</div>
				<div class="modal-footer">
				    <div class="btn btn-cerrar" data-bs-dismiss="modal">Cerrar</div>
				    <button type="submit" class="btn btn-agregar">Agregar</button>
				</div>
			</form>
		</div>
	</div>

@endsection
@section('jsLibExtras2')
<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.es5.min.js"></script>
<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>
@endsection
@section('jqueryExtra')

<script>
    // Lógica para el botón "El cupón aplica a los productos de una subcategoría"
    $('#btn-opc_subcategoria').click(function(){
        // Establecer el valor correspondiente en el campo oculto
        $('#form-general input[name="tipo_cupon"]').val(1);

        // Mostrar el formulario y ocultar los demás botones
        $('#form-general').show();
        $('#btn-opc_subcategoria').hide();
        $('#btn-opc_lanzamiento').hide();
        $('#btn-opc_producto').hide();
        $('#btn-opc_tienda').hide();

        // Agregar el select al formulario
        var selectHtml = `
            <div class="row py-3">
                <div class="col">
                    <label for="subcategoria_form" id="subcategoria_form_label">Subcategoría a la que pertenece el producto</label>
                    <select class="form-select mb-2" id="subcategoria_form" name="subcategoria_form" aria-label="Default select example" required>
                        @foreach($categorias as $c)
                            @foreach ($subcategorias as $scat)
                                @if ($scat->categoria == $c->id)
                                    <option value="{{$scat->id}}">{{ $c->categoria }} - {{ $scat->subcategoria }}</option>
                                @endif
                            @endforeach
                        @endforeach
                    </select>
                </div>
            </div>`;
        $('#form-general').append(selectHtml);
    });

    // Lógica para el botón "El cupón aplica a los productos de un lanzamiento"
    $('#btn-opc_lanzamiento').click(function(){
        // Establecer el valor correspondiente en el campo oculto
        $('#form-general input[name="tipo_cupon"]').val(2);

        // Mostrar el formulario y ocultar los demás botones
        $('#form-general').show();
        $('#btn-opc_subcategoria').hide();
        $('#btn-opc_lanzamiento').hide();
        $('#btn-opc_producto').hide();
        $('#btn-opc_tienda').hide();

        // Agregar el select al formulario
        var selectHtml = `
            <div class="row py-3">
                <div class="col">
                    <label class="fs-5" for="lanzamiento_select" id="lanzamiento_select_label">
                        Selecciona el lanzamiento
                    </label>
                    <select class="form-select" name="lanzamiento_select" id="lanzamiento_select">
                        @foreach ($lanzamientos as $lanzz)
                            <option value="{{ $lanzz->id }}">{{ $lanzz->lanzamiento }}</option>
                        @endforeach
                    </select>
                </div>
            </div>`;
        $('#form-general').append(selectHtml);
    });

    // Lógica para el botón "El cupón aplica a un solo producto"
    $('#btn-opc_producto').click(function(){
        // Establecer el valor correspondiente en el campo oculto
        $('#form-general input[name="tipo_cupon"]').val(3);

        // Mostrar el formulario y ocultar los demás botones
        $('#form-general').show();
        $('#btn-opc_subcategoria').hide();
        $('#btn-opc_lanzamiento').hide();
        $('#btn-opc_producto').hide();
        $('#btn-opc_tienda').hide();
    });

    // Lógica para el botón "El cupón aplica a toda la tienda"
    $('#btn-opc_tienda').click(function(){
        // Establecer el valor correspondiente en el campo oculto
        $('#form-general input[name="tipo_cupon"]').val(4);

        // Mostrar el formulario y ocultar los demás botones
        $('#form-general').show();
        $('#btn-opc_subcategoria').hide();
        $('#btn-opc_lanzamiento').hide();
        $('#btn-opc_producto').hide();
        $('#btn-opc_tienda').hide();
    });

    // Lógica para cerrar el modal y restablecer el formulario
    $('#modal-cupones').on('hidden.bs.modal', function () {
        // Resetear el formulario
        $('#form-general').hide();
        $('#btn-opc_subcategoria').show();
        $('#btn-opc_lanzamiento').show();
        $('#btn-opc_producto').show();
        $('#btn-opc_tienda').show();
        $('#form-general input[name="tipo_cupon"]').val('');
        $('#form-general select[name="lanzamiento_select"]').remove();
        $('#form-general select[name="subcategoria_form"]').remove();
        $('#subcategoria_form_label').remove();
        $('#lanzamiento_select_label"]').remove();


        // Restablecer otros campos del formulario según sea necesario
        $('#form-general input[name="cupon_codigo"]').val('');
        $('#form-general input[name="descuento"]').val('');
        $('#form-general input[name="descuento_envio"]').val('');
        $('#form-general input[name="radio_privacidad"]').prop('checked', true);
        $('#form-general input[name="radio_envio"]').prop('checked', true);
    });
</script>

<script>
	$('.slider-categorias').slick({
        dots:true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: false,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
        }
        ]
    });
</script>

<script>
	$('.slider-subcategorias').slick({
        dots:true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: false,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
</script>

<script>
	$('.slider-lanzamientos').slick({
        dots: true,
        infinite: false,
        rows: 3,
        slidesPerRow: 2,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                rows: 3,
                slidesPerRow: 1,
                infinite: false,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                rows: 3,
                slidesPerRow: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                rows: 3,
                slidesPerRow: 1,
            }
        }
        ]
    });
</script>
<script>
	$('.slider-tallas').slick({
        dots: true,
        infinite: false,
        rows: 6,
        slidesPerRow: 3,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                rows: 6,
                slidesPerRow: 2,
                infinite: false,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                rows: 4,
                slidesPerRow: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                rows: 3,
                slidesPerRow: 1,
            }
        }
        ]
    });
</script>

<script>
    const addInputButton = document.getElementById('addInputButton');
    const inputsContainer = document.querySelector('.inputsContainer'); // Cambiado para seleccionar la clase.
    const myForm = document.getElementById('myForm'); // Asegúrate de que tengas un formulario con el id 'myForm'.

    let inputIndex = 1;

    addInputButton.addEventListener('click', function() {
        const inputDiv = document.createElement('div');
        inputDiv.classList.add('input-group');

        const newInput1 = document.createElement('input');
        newInput1.type = 'text';
        newInput1.name = 'tallas_lista[]';
        newInput1.classList.add('form-control', 'tallas_producto');
        inputDiv.appendChild(newInput1);

        const deleteInputButton = document.createElement('button');
        deleteInputButton.type = 'button';
        deleteInputButton.classList.add('btn', 'btn-danger', 'deleteInputButton');
        deleteInputButton.innerHTML = '&times;';

        inputDiv.appendChild(deleteInputButton);
        inputsContainer.appendChild(inputDiv);
        inputIndex++;
    });

    inputsContainer.addEventListener('click', function(event) {
        if (event.target.classList.contains('deleteInputButton')) {
            const inputDiv = event.target.parentNode;
            inputDiv.remove();
        }
    });

    myForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const tallas_lista = document.querySelectorAll('.tallas_producto');
        const caracteristicaValues = Array.from(tallas_lista).map(input => input.value);

        // Realizar acciones con los arrays de valores (caracteristicaValues y caracteristica2Values)
        console.log(caracteristicaValues);

        // Aquí puedes enviar el formulario al servidor
    });
</script>



<script type="text/javascript">

// Simple example, see optional options for more configuration.
const pickr = Pickr.create({
    el: '.color-picker',
    theme: 'classic', // or 'monolith', or 'nano'

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: false,
            rgba: false,
            hsla: false,
            hsva: false,
            cmyk: false,
            input: false,
            clear: false,
            save: false
        }
    }
});

pickr.on('change', (...args) => {
	var color = args[0].toHEXA();
    console.log('Event: "change"', color);

	$('#inputColor').val('#'+color[0]+color[1]+color[2]);
	$('#inputColoren').val('#'+color[0]+color[1]+color[2]);
});


///////////////////// quitar file ////////////////////
	$('.modal').on('hidden.bs.modal', function () {
		location.reload();
	});
///////////////////// quitar file ////////////////////
	$(document).on('change', '#input_img_producto', function(e) {
		$('#label_form_producto').addClass('backg_producto');
		$('#label_form_producto').text('Imagen añadida');
	});
///////////////////// Eliminar producto ////////////////////
	$('.del-prod').parent().click(function(e) {
				var id = $(this).attr('data-id');
				$("#id_prod_del").val(id);
				console.log(id);
			});

		$('.btn_prod_del').click(function(e) {
			$('#form_prod_del').submit();
		});
///////////////////// Eliminar producto ////////////////////

	$(document).ready(function() {
		$('#div_grid').slideDown();
		$('#myTable').DataTable();

		// Al hacer click en el botón de grid
		$('#btn_grid').click(function() {
			var boton = document.getElementById('btn_grid');
			boton.style.background ="#62d250 !important";
			boton.style.border ="#62d250 !important";

			var boton2 = document.getElementById('btn_list');
			boton2.style.background ="#3a3a3a !important";
			boton2.style.border ="#3a3a3a !important";
        // Ocultar el div de lista
        $('#div_list').slideUp();
        // Mostrar el div de grid con animación
		var grid = document.getElementById('div_grid');
		grid.style.display = "block !important";
        $('#div_grid').slideDown();
    });

	$('#img_product_input').change(function(e) {
		console.log('aqui');
		$('#icon_carga').addClass('cargado');
	});

	$('.multiple-items2').slick({
            dots:true,
            infinite: false,
            slidesToShow: 8,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
            });


	$('.multiple-itemss').slick({
            dots:false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
            });

    // Al hacer click en el botón de lista
    $('#btn_list').click(function() {
		var boton = document.getElementById('btn_list');
			boton.style.background ="#62d250 !important";
			boton.style.border ="#62d250 !important";

			var boton2 = document.getElementById('btn_grid');
			boton2.style.background ="#3a3a3a !important";
			boton2.style.border ="#3a3a3a !important";
        // Ocultar el div de grid
		var grid = document.getElementById('div_grid');
		grid.style.display = "none !important";
        $('#div_grid').slideUp();
        // Mostrar el div de lista con animación
        $('#div_list').slideDown();

    });


		$(document).ready(function() {

			$('.multiple-items2').slick({
				dots:false,
				arrows:true,
				infinite: false,
				slidesToShow: 8,
				slidesToScroll: 1,
				autoplay: false,
				autoplaySpeed: 2000,
				responsive: [
				{
				breakpoint: 1024,
				settings: {
					slidesToShow: 6,
					slidesToScroll: 3,
					infinite: true,
					dots: false
				}
				},
				{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
				},
				{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
				]
				});
			});



		$('.dropify').dropify();

///////////////////// Editar campos ////////////////////
	$('.text-input-cat').change(function(e) {

		var id = $(this).attr("data-id");
		var campo = $(this).attr("data-campo");
		var valor = ($(this).val());
		var tcsrf = $('meta[name="csrf-token"]').attr('content');
		console.log(valor,id,campo);

		$.ajax({
			// url: '/advanced/varios/editarajax',
			url: 'cattext',
			type: 'post',
			dataType: 'json',
			data: {
				"id": id,
				"_method": 'post',
				"_token": tcsrf,
				"campo": campo,
				"valor": valor
			}
		})
		.done(function(msg) {
			console.log(msg);
			if (msg.success) {
				toastr["success"]("Guardado Exitosamente");
			}else {
				toastr["error"]("Error al actualizar");
			}
		})
		.fail(function(msg) {
			console.log("error:");
			console.log(msg);
			toastr["error"]("Error al actualizar");
		});


	});
///////////////////// Editar campos ////////////////////

///////////////////// Eliminar categoria ////////////////////
	$('.del-cat').parent().click(function(e) {
			var id = $(this).attr('data-id');
			$("#id_cat_del").val(id);
			console.log(id);
		});

	$('.btn_cat_del').click(function(e) {
		$('#form_cat_del').submit();
	});
///////////////////// Eliminar categoria ////////////////////



});

///////////////////// Editar campos categoria ////////////////////
	$('.select-cat').change(function(e) {

	var id = $(this).attr("data-id");
	var valor = $(this).val();
	var tcsrf = $('meta[name="csrf-token"]').attr('content');
	console.log(id,valor);

	$.ajax({
			// url: '/advanced/varios/editarajax',
			url: 'selectcat',
			type: 'post',
			dataType: 'json',
			data: {
				"id": id,
				"_method": 'post',
				"_token": tcsrf,
				"valor": valor
			}
		})
		.done(function(msg) {
			console.log(msg);
			if (msg.success) {
				toastr["success"]("Guardado Exitosamente");
			}else {
				toastr["error"]("Error al actualizar");
			}
		})
		.fail(function(msg) {
			console.log("error:");
			console.log(msg);
			toastr["error"]("Error al actualizar");
		});


	});
///////////////////// Editar campos categoria ////////////////////

///////////////////// Editar campos imegn categoria ////////////////////
	$('.input_img_cat').change(function(e) {

		var id = $(this).attr("data-id");
		console.log(id);
		$('#form_image_cat'+id).trigger('submit');

	});
///////////////////// Editar campos imegn categoria ////////////////////

///////////////////// Editar campos de texto ////////////////////
	$('.text-input-prod').change(function(e) {

	var id = $(this).attr("data-id");
	var campo = $(this).attr("data-campo");
	var valor = ($(this).val());
	var tcsrf = $('meta[name="csrf-token"]').attr('content');
	console.log(valor,id,campo);

	$.ajax({
		// url: '/advanced/varios/editarajax',
		url: 'prodtext',
		type: 'post',
		dataType: 'json',
		data: {
			"id": id,
			"_method": 'post',
			"_token": tcsrf,
			"campo": campo,
			"valor": valor
		}
	})
	.done(function(msg) {
		console.log(msg);
		if (msg.success) {
			toastr["success"]("Guardado Exitosamente");
		}else {
			toastr["error"]("Error al actualizar");
		}
	})
	.fail(function(msg) {
		console.log("error:");
		console.log(msg);
		toastr["error"]("Error al actualizar");
	});


	});
///////////////////// Editar campos de texto ////////////////////

$('.select_icon').change(function(e) {

	var id = $(this).attr("data-id");
	var tcsrf = $('meta[name="csrf-token"]').attr('content');
	var valor = ($(this).val());

	$.ajax({
			// url: '/advanced/varios/editarajax',
			url: 'selecticon',
			type: 'post',
			dataType: 'json',
			data: {
				"id": id,
				"_method": 'post',
				"_token": tcsrf,
				"valor": valor
			}
		})
		.done(function(msg) {
			console.log(msg);

			if (msg.success) {
				toastr["success"](msg.mensaje);
				setTimeout(function () { location.reload(); }, 1000);
			}else {
				Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: msg.mensaje,
				})
			}
		})
		.fail(function(msg) {
			console.log("error:");
			console.log(msg);
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Error inesperado',
				})
		});

});

function agrserv(){

		var tcsrf = $('meta[name="csrf-token"]').attr('content');

		$.ajax({
				url: 'agrserv',
				type: 'post',
				dataType: 'json',
					data: {
						"id": '1',
						"_method": 'post',
						"_token": tcsrf,
					}
			})
			.done(function(msg) {

				if (msg.success) {
					toastr["success"]("Agregado Exitosamente");
					setTimeout(function () { location.reload(); }, 1000);
				}else {
					toastr["error"]("Error al agregar");

				}
			})

}

$('.checkB').change(function(e) {

	var id = $(this).attr("data-id");
	var valor = ($(this).prop('checked'));
	var tcsrf = $('meta[name="csrf-token"]').attr('content');
	console.log(valor);

	$.ajax({
		// url: '/advanced/varios/editarajax',
		url: 'checkb',
		type: 'post',
		dataType: 'json',
		data: {
			"id": id,
			"_method": 'post',
			"_token": tcsrf,
			"valor": valor
		}
	})
	.done(function(msg) {
		console.log(msg);

		if (msg.success) {
			toastr["success"](msg.mensaje);
			setTimeout(function () { location.reload(); }, 1000);
		}else {
			Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: msg.mensaje,
			})
		}
	})
	.fail(function(msg) {
		console.log("error:");
		console.log(msg);
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: 'Error inesperado',
			})
	});




});

$('.fa-trash-alt').parent().click(function(e) {
				var id = $(this).attr('data-id');
				$("#idser").val(id);

			});
			$('.dels').click(function(e) {
				$('#deletserv').submit();
			});
</script>
@endsection
