@extends('layouts.app')

@section('title','Home')
@section('content')

<div class="container">
    <div class="col-12 py-3 px-3">
        <h6 class="col-12 text-center">Mis pedidos</h6>
        <div class="col-12 ">

        </div>
    </div>
</div>
@endsection

@section('content2')
    <style>
        .contHorarioslist{
            background: #F5F7FF; border-radius: 16px;
        }
        .botonopacity:hover{
            opacity: 50%;
        }

    </style>
    <div class="container d-flex mt-3 px-0">
        <div class="card px-3" style="width: 100%; height: 500px; border-radius:26px; box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.085);">
            <div class="col-12 my-3">
                <h5 class="col-12 text-center my-auto" style="font-weight: bold;">Lista de pedidos</h5>
            </div>
            
            <div id="conthorarios" class="col-12 " style="height: 85%; overflow: auto; background: #F5F7FF; border-radius: 26px;">
            
                <div class="col-12 px-3 py-3 d-flex flex-column">
                    @foreach($pedido as $p)
                    @php
                        $datos = json_decode($p->data);
                    @endphp
                    
                    <div class="container card py-2 px-2 mb-2 d-flex flex-row justify-content-between align-items-center" style="border-radius: 16px; box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.085);">
                        <label class="card col-4 text-center py-2" style="box-shadow: none; background: #F5F7FF; border-radius:13px;">
                            <p class="col-auto my-auto">Num.p: {{$p->uid}}</p>
                        </label>
                        <label class="card col-4 text-center py-2" style="box-shadow: none; background: ; border-radius:13px;">
                            <p class="col-auto my-auto">Total: ${{ number_format($p->importe, 2, '.', ',') }}</p>
                        </label>
                        <label class="card col-4 py-2 d-flex flex-wrap justify-content-end" style="box-shadow: none;  border-radius:13px;">
                            <div class="col-auto d-flex flex-wrap justify-content-end" style=" ">
                                <style>
                                    .cancelado {color: red; }
                                    .aprobado { color: #FFCA2C; } /* Amarillo */
                                    .revision { color: #28a745; } /* Verde */
                                    .diagnosticado { color: #007bff; } /* Azul */
                                    .aceptado { color: #17a2b8; } /* Cyan */
                                    .pago-efectivo { color: #6610f2; } /* Púrpura */
                                    .cotizacion-aceptada { color: #dc3545; } /* Rojo */
                                    .pago-50-cotizacion { color: #fd7e14; } /* Naranja */
                                    .reparando { color: #28a745; } /* Gris */
                                    .servicio-completado { color: #20c997; } /* Verde claro */
                                </style>
                                {{-- @switch($ms->miservicio->status)
                                @case(0)
                                <p class="col-auto my-auto ms-2" style="font-size:12px;">Cancelado</p>
                                <i class="fa-solid fa-circle ms-3 my-auto cancelado"></i>
                                @break

                                @case(1)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Aprobado y en proceso</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto aprobado"></i>
                                    @break

                                @case(2)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Revisión y diagnóstico</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto revision"></i>
                                    @break

                                @case(3)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Diagnosticado</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto diagnosticado"></i>
                                    @break

                                @case(4)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Aceptado solo diagnóstico</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto aceptado"></i>
                                    @break

                                @case(5)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Solo diagnóstico pagado</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto pago-efectivo"></i>
                                    @break

                                @case(6)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Pagado en efectivo</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto cotizacion-aceptada"></i>
                                    @break

                                @case(7)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Aceptada cotización</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto pago-50-cotizacion"></i>
                                    @break

                                @case(8)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Pago 50% cotización</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto reparando"></i>
                                    @break

                                @case(9)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Reparando</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto servicio-completado"></i>
                                    @break

                                @case(10)
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Servicio pagado y completado</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto reparando"></i>
                                    @break

                                @default
                                    <p class="col-auto my-auto ms-2" style="font-size:12px;">Caso no reconocido</p>
                                    <i class="fa-solid fa-circle ms-3 my-auto"></i>
                            @endswitch --}}
                                <p class="col-auto my-auto ms-2" style="font-size:12px;">Aprobado y en proceso</p>
                                <i class="fa-solid fa-circle ms-3 my-auto aprobado"></i>
                                <div style="color: black;" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$p->id}}"><i class="fa-solid fa-eye mx-3 botonopacity"  onclick="verPediso({{$p->id}})"></i></div>
                                {{-- <i class="fa-solid fa-circle mx-3 ms-4" style="color:#FFCA2C;"></i> --}}
                            </div>
                        </label>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop-{{$p->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	                    <div class="modal-dialog modal-dialog-centered modal-xl">
	                        <div class="modal-content" style="border-radius:26px;">
		                        <div class="modal-header">
		                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Detalles de la compra</h1>
		                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		                        </div>
		                        <div id="modal_bodyyy" class="modal-body">
                                    @foreach ($datos as $d)
                                        <div id="card_" class="col-12 py-2 px-2 mb-2 card d-flex flex-row" style="height: 50px; border-radius: 26px;">
					                        <div class="card d-flex justify-content-center align-items-center" style="width: 50px; height: 100%; border-radius: 16px;">
						                        <img src="{{ asset('img/photos/productos/' . $d->imagen) }}" style="width: 40px;" alt="">
				                        	</div>
                        					<div class="col-9 px-3 py-2 d-flex justify-content-between align-items-center">
				                        		<li class="" style="list-style: none;"><h6 class="my-auto">{{ $d->nombre }}</h6></li>
						                        <li class="d-flex flex-row" style="list-style: none;"><h6 class="my-auto">Cantidad : </h6><input id="input_cat_prod" data-id-prod=""  type="number" min="1" max="" class="form-control input_cat_prod" style="width: 60px; height: 30px;;" value="{{ $d->existencias }}" disabled></li>
						                        <li class="" style="list-style: none;"><h6 class="my-auto">Precio Unidad: {{ $d->precio }}</h6></li>
			                        		</div>
				                        	<div class="col-2 d-flex justify-content-end align-items-center flex-row" style="background: ;">
                        						<a href="{{ route('front.producto', ['id' => $d->id]) }}" class="mx-1" style="list-style: none;"><h6 class="my-auto"></h6><i class="fa-solid fa-eye"></i></a> 
					                        </div>
				                        </div>
                                    @endforeach
                                    <div class="col-12 card p-3 d-flex justify-content-between" style=" border-radius: 26px;">
                                        <div class="row">
                                            <div class="col-12 " style="">
                                                <h5>Resumen de compra</h5>
                                            </div>
                                            <div class="col-12 table p-3" style="background: rgb(233, 233, 233); overflow: auto; border-radius: 16px;">
                                                @php
                                                    $total_prod = 0;
                                                    $cantidad_prods = 0;
                                                @endphp
                                                <div id=""  class="col-12 my-0 px-0 d-flex align-items-center justify-content-between">
                                                    <div class="col-5 my-0"><h6 class="my-0">Nombre</h6></div>
                                                    <div class="col-2 my-0 text-end"><h6 id="txt_cant_" class="my-0">Cantidad</h6></div>
                                                    <div class="col-5 my-0 text-end" class="text-end"><h6 class="my-0">Precio</h6></div>
                                                </div>
                                                @foreach($datos as $d)
                                                {{-- $producto = PFProducto::find($d->id); --}}
                                                    @php
                                                        $cantidad_pre_prods = $d->precio * $d->existencias;
                                                    @endphp
                                                    <div id="list_prod_"  class="col-12 my-0 px-0 d-flex align-items-center justify-content-between">
                                                        <div class="col-5 my-0"><h6 class="my-0">{{ $d->nombre }}</h6></div>
                                                        <div class="col-2 my-0 text-end"><h6 id="txt_cant_" class="my-0">{{ $d->existencias }}</h6></div>
                                                        <div class="col-5 my-0 text-end" style="" class="text-end"><h6 id="cat_total_" class="my-0" data-precio-u="" data-precio-cant="" data-cant_prds_u="" >${{ $cantidad_pre_prods }}</h6></div>
                                                    </div>                                                @endforeach
                                                </div>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <h6 style="font-weight: ;">Envio</h6>
                                                    <h6 id="cost-env" style="font-weight: ;">${{ $p->envio }}</h6>
                                                </div>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <h5 style="font-weight: bold;">Total</h5>
                                                    <h5 id="total_compra" data-total-c="" style="font-weight: bold;">${{ $p->total }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        		    <div class="modal-footer">
		                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Salir</button>
		                                {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
		                            </div>
	                            </div>
	                        </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

{{-- <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content" style="border-radius:26px;">
		    <div class="modal-header">
		        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		    </div>
		    <div id="modal_body" class="modal-body">
			    {{ $pedido[1] }}
		    </div>
		    <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
		        {{-- <button type="button" class="btn btn-primary">Understood</button> 
		    </div>
	    </div>
	</div>
</div> --}}
		
</div>
{{-- 
<script>
    	function verPediso(id){
		console.log(id);
		var csrf = $('meta[name="csrf-token"]').attr('content');
		var URL = "{{route('detallesPUu')}}";
		$.ajax({
			method: "POST",
			url: URL,
			data: {
				"_method": 'post',
				"_token": csrf,
				id: id
			}
		})
		.done(function(msg) {
			if (msg.success) {
				console.log(msg.mensaje);
				$('#modal_body').html(msg.mensaje)
			}else{
				toastr["error"]('no se encontro informacion del usuario');
			}
		});
		}	
</script> --}}
@endsection


