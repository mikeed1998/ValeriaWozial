@extends('layouts.admin')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
@endsection
@section('jsLibExtras')

@endsection
@section('styleExtras')
<style>
        @font-face {
        font-family: 'Neusharp Bold';
        font-style: normal;
        font-weight: normal;
        src: local('Neusharp Bold'), url({{ asset('fonts/Neusharp-Bold/NeusharpBold-7B8RV.woff') }}) format('woff');
    }
	/* mas estilisado */	
		body{
			background-color: #e5e8eb  !important;
		}
		.card-header {
			background-color: #b0c1d1  !important;
		}
		.black-skin .btn-primary {

		}
		.btn {
			box-shadow: none;
			border-radius: 15px;
		}
	/* mas estilisado */


    .seccionnoed0{
		opacity: 0%;
		transition: all 0.5s;
	}

	.seccionnoed0:hover{
		opacity: 100%;
		transition: all 0.5s;
	}

    .seccionnoed0:hover .letra{
		opacity: 100%;
		transition: all 0.5s;
	}



    textarea:focus-visible{
        border-radius: 16px;
        border: 1px solid rgba(0, 0, 0, 0.167) !important;
    }

    /* input con opacidad y sin boton de selecciond e archivo */
                .file-upload input[type="file"], .file-upload2 input[type="file"] {
                    position: absolute;
                    left: -9999px;
                    }

                    .file-upload label, .file-upload2 label {
                    display: inline-block;
                    background-color: #00000031;
                    color: #fff;
                    padding: 6px 12px;
                    cursor: pointer;
                    border-radius: 4px;
                    font-weight: normal;
                    opacity: 0%;
                    }

                    .file-upload input[type="file"] + label:before, .file-upload2 input[type="file"] + label:before {
                    content: "\f07b";
                    font-family: "Font Awesome 5 Free";
                    font-size: 16px;
                    margin-right: 5px;
                    transition: all 0.5s;
                    }

                    .file-upload input[type="file"] + label, .file-upload2 input[type="file"] + label {
                        transition: all 0.5s;
                    }

                    .file-upload input[type="file"]:focus + label, .file-upload2 input[type="file"]:focus + label,
                    .file-upload input[type="file"] + label:hover, .file-upload2 input[type="file"] + label:hover {
                    backdrop-filter: blur(5px);
                    background-color: #41464a37;
                    opacity: 100%;
                    transition: all 0.5s;
                    }
    /* input con opacidad y sin boton de selecciond e archivo */

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
    .container::-webkit-scrollbar {
        width: 8px;     /* Tamaño del scroll en vertical */
        height: 8px;    /* Tamaño del scroll en horizontal */
        display: none;  /* Ocultar scroll */
    }

    .container::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 4px;
    }

    /* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
    .container::-webkit-scrollbar-thumb:hover {
        background: #b3b3b3;
        box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
    }

    /* Cambiamos el fondo cuando esté en active */
    .container::-webkit-scrollbar-thumb:active {
        background-color: #999999;
    }

    .container::-webkit-scrollbar-track {
        background: #e1e1e1;
        border-radius: 4px;
    }

    /* Cambiamos el fondo cuando esté en active o hover */
    .container::-webkit-scrollbar-track:hover,
    .container::-webkit-scrollbar-track:active {
    background: #d4d4d4;
    }
</style>
@endsection
@section('content')
        <div class="row mb-4 px-2">
            <a href="{{ route('config.seccion.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
        </div>

       
        <div class="col-12 my-5 text-center d-flex justify-content-center align-items-center flex-column">
            <p class="mt-5" style="font-size: 4.5rem; font-family:'Neusharp Bold'; color: #909986;">SOLUCIONES</p>
			<div class="col-6">
				<div class="col-12 mb-2 text-center"><i class="fa-solid fa-pencil" style="font-size: 1.5rem;"></i></div>
				<textarea class="col-12 text-center editar_text_seccion_global editarajax" data-url="{{route('config.seccion.textglobalseccion')}}" data-id="{{$elements[0]->id}}" data-table="Elemento" data-campo="texto" name="" id="" cols="30" rows="3" style="border-radius: 10px; border:none; background: #ededed">{{$elements[0]->texto}}</textarea>
			</div>
        </div>

    <div class="col-12">

        <div class="col-12 text-center d-flex justify-content-center flex-column">
            <h4 style="font-family:'Neusharp Bold';">Agregar Solución</h4>
            <div >
                <button style="background: none !important; border:none;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-circle-plus" style="font-size: 2rem;"></i></button>
            </div>
        </div>

        <div class="container d-flex flex-wrap">

            @foreach($soluciones as $s)
            <div class="col-4 p-3 " style="border-radius:26px;">
                <div class="row">
                    <div class="col position-relative px-0 card position-relative">
                        <img src="{{asset('img/photos/soluciones/'.$s->imagen)}}" alt="" class="img-fluid">
                        <div class="card d-flex justify-content-center align-items-center w-100 position-absolute bottom-0 start-50 translate-middle bg-transparent border-0">
							<form id="form_aux-{{ $s->id }}" action="image_input_ejemplo" method="POST" class="file-upload px-auto col-7" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="id_elemento" value="{{ $s->id }}">
								<input type="hidden" name="tipo" value="solucion_imagen">
								<input id="img_aux-{{ $s->id }}" class="m-0 p-0" type="file" name="archivo">
								<label class="col-12 m-0 px-2 d-flex justify-content-center align-items-center" for="img_aux-{{ $s->id }}" style=" height: 100%; opacity: 100%; border-radius: 20px;">Actualizar Imagen</label>
							</form>
							<script>
								$('#img_aux-{{ $s->id }}').change(function(e) {
									$('#form_aux-{{ $s->id }}').trigger('submit');
								});
							</script>
						</div>
                        <div class="card d-flex justify-content-center align-items-center w-100 position-absolute top-0 start-0 bg-transparent border-0">
							<form id="iform_aux-{{ $s->id }}" action="image_input_ejemplo" method="POST" class="file-upload px-auto col-7" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="id_elemento" value="{{ $s->id }}">
								<input type="hidden" name="tipo" value="solucion_icono">
								<input id="iimg_aux-{{ $s->id }}" class="m-0 p-0" type="file" name="archivo">
								<label class="col-12 m-0 px-2 d-flex justify-content-center align-items-center" for="iimg_aux-{{ $s->id }}" style=" height: 100%; opacity: 100%; border-radius: 20px;">Actualizar Icono</label>
							</form>
							<script>
								$('#iimg_aux-{{ $s->id }}').change(function(e) {
									$('#iform_aux-{{ $s->id }}').trigger('submit');
								});
							</script>
						</div>
                        <div class="col-2 card position-absolute">
                            <img src="{{asset('img/photos/soluciones/'.$s->icono)}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                
                <div class="col-12 mt-3 d-flex flex-column" style="text-align: justify;">
                    <h5><input type="text" class="form-control editar_text_seccion_global" data-url="{{route('config.seccion.textglobalseccion')}}" data-id="{{$s->id}}" data-table="PFSolucion" data-campo="titulo" value="{{$s->titulo}}"></h5>
                    <textarea name="" id="" cols="30" rows="3" class="form-control editar_text_seccion_global editarajax" data-url="{{route('config.seccion.textglobalseccion')}}" data-id="{{$s->id}}" data-table="PFSolucion" data-campo="descripcion">{{$s->descripcion}}</textarea>
                    {{-- <hr class="my-2"> --}}
					{{-- <textarea class="col-12 mx-0 scrollux editar_text_seccion_global" data-url="{{route('config.seccion.textglobalseccion')}}" data-id="{{$s->id}}" data-table="services" data-campo="descripcion"  cols="30" rows="5" style="background: #f2f2f2; border:none; border-radius: 10px;">{{$s->descripcion}}</textarea> --}}
                    <form action="{{route('config.seccion.elimSolu')}}" method="POST" class="col-12 text-center">
                        @csrf
                        <input type="text" name="id_sol" value="{{$s->id}}" hidden>
                        <style>
                            .fa-trash:hover{
                                opacity: 50%;
                            }
                        </style>
                        <button class="col-12" style="background: none; border:none;">
                            <i  class="fa-solid fa-trash my-3" style="font-size: 20px;"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- <div class="col-12 my-5 d-flex justify-content-center align-items-center flex-column text-center">
        <img src="{{asset('img/design/footerp.png')}}" alt="">
        <a href="" class="mt-2" style="color: #909986; font-size: 1.2rem;">VISITAR</a>
        <div class="col-auto d-flex justify-content-center align-items-center flex-row">
            
        </div>
    </div> --}}

{{-- modal agregar proyecto --}}
<form action="{{route('config.seccion.agsolucion')}}" method="POST" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-dialog-centered">
    <div  class="modal-content" style="border-radius: 16px;" >
        @csrf
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar solución</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <style>
                .backr{
                    background: #1555bc !important;
                }
            </style>
            <div class="col-12 mb-2" style="height: 100px; position: relative;">
                <div  class="file-upload col-12 p-0 m-0" style=" top: 0; bottom: 0; background: ; height: 100%;" >
                    @csrf
                    <input id="input_img_element" class="m-0 p-0" type="file" name="archivo">
                    <label id="label_form" class="col-12 m-0 p-0 d-flex justify-content-center align-items-center" for="input_img_element" style="opacity: 100%; height: 100%;  border-radius: 16px;">Agregar icono</label>
                </div>
                <script>
                    ///////////////////// Editar campos imegn categoria ////////////////////
                    $('#input_img_element').change(function(e) {
                        $('#label_form').addClass('backr');
                        $('#label_form').html('Imagen añadida');
                    });
                    ///////////////////// Editar campos imegn categoria ////////////////////
                </script>
            </div>
            <div class="col-12 mb-2" style="height: 100px; position: relative;">
                <div  class="file-upload2 col-12 p-0 m-0" style=" top: 0; bottom: 0; background: ; height: 100%;" >
                    @csrf
                    <input id="input_img_element2" class="m-0 p-0" type="file" name="archivo2">
                    <label id="label_form2" class="col-12 m-0 p-0 d-flex justify-content-center align-items-center" for="input_img_element2" style="opacity: 100%; height: 100%;  border-radius: 16px;">Agregar imagen</label>
                </div>
                <script>
                    ///////////////////// Editar campos imegn categoria ////////////////////
                    $('#input_img_element2').change(function(e) {
                        $('#label_form2').addClass('backr2');
                        $('#label_form2').html('Imagen añadida');
                    });
                    ///////////////////// Editar campos imegn categoria ////////////////////
                </script>
            </div>
            <div class="col-12 mb-2">
                <input class="form-control" type="text" name="nom_sol" placeholder="Nombre de la solución">
            </div>
            <div class="col-12 mb-2">
                <textarea class="form-control" type="text" rows="6" name="desc_sol" placeholder="Descripción de la solución"></textarea>
            </div>
            {{-- <div class="col-12">
                <textarea class="col-12 form-control" name="desc_proy" id=""  rows="5"></textarea>
            </div> --}}
        </div>
        <div class="modal-footer">
        <div class="btn btn-secondary" data-bs-dismiss="modal" style="background: red !important; border:none;">Cerrar</div>
        <button type="submit" class="btn btn-primary" style="background: #1555bc !important; border:none;">Agregar</button>
        </div>
    </div>
    </div>
</form>
{{-- modal agregar proyecto --}}
@endsection
@section('jsLibExtras2')
<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection
@section('jqueryExtra')
<script type="text/javascript">

$('#input_img_element').change(function(e) {
		// var campo = $(this).attr("data-campo");
		var valor = ($(this).val());

		console.log(valor);
		$('#form_image_element').trigger('submit');

	});
    $('#input_img_element2').change(function(e) {
		// var campo = $(this).attr("data-campo");
		var valor = ($(this).val());

		console.log(valor);
		$('#form_image_element2').trigger('submit');

	});
    $('#input_img_element3').change(function(e) {
		// var campo = $(this).attr("data-campo");
		var valor = ($(this).val());

		console.log(valor);
		$('#form_image_element3').trigger('submit');

	});

	$(document).ready(function() {
		$('.dropify').dropify();

		$('.fa-trash-alt').parent().click(function(e) {
				var id = $(this).attr('data-id');
				$("#ipdel").val(id);
				console.log(id);
			});

///////////////////// Editar campos ////////////////////
		$('.input-txt-nos').change(function(e) {

            var id = $(this).attr("data-id");
            var campo = $(this).attr("data-campo");
            var valor = ($(this).val());
            var tcsrf = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: 'textnosotrosup',
                type: 'post',
                dataType: 'json',
                data: {
                    "id": id,
                    "campo": campo,
                    "valor": valor,
                    "_token": tcsrf,
                }
            })
            .done(function(msg) {
                if (msg.success) {
                    toastr["success"]("Guardado Exitosamente");
                }else {
                    toastr["error"]("Error al actualizar");
                    setTimeout(function () { location.reload(); }, 1000);
                }
            })

            });
///////////////////// Editar campos ////////////////////

    $('.input-image-equipo').change(function(e) {
        var id = $(this).attr("data-id");
        console.log(id);
        $('#formEquipo'+id).trigger('submit');
    });

    $('.input_logo').change(function(e) {
        $('#form_logo_alianza').trigger('submit');
    });


	});
</script>
@endsection
