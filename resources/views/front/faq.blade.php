@extends('layouts.front')

@section('title', 'FAQS')
{{-- @section('cssExtras')@endsection --}}
{{-- @section('jsLibExtras')@endsection --}}

<style>

	.page-link_link, .page-link_icon {
		font-size: 1.2rem;
		border: 0;
		color: #000000;
	}

	.page-link_link:hover {
		text-decoration: underline;
		background-color: #FFFFFF;
	}

	.card {
		position: relative;
		overflow: hidden;
		transition: transform 0.3s; /* Transición para suavizar el efecto */
	}

	.card:hover {
		transform: scale(1.05); /* Efecto de escala al hacer hover */
	}

	/* Agrega estilos según sea necesario */

	.accordionc {
		max-width: 600px;
		margin: 20px auto;
	}

	.accordionc-item {
		/* border-bottom: 1px solid #000000; */
		/* margin-bottom: 1px; */
	}

	

	.accordionc-content {
		display: none;
		padding: 0px;
	}

	.down-img {
		display: block;
	}

	.up-img {
		display: none;
	}


	@media (min-width: 1800px) {
		.accordionc-header {
			background-color: #FFFFFF;
			font-size: 1.5rem;
			font-weight: 400;
			cursor: pointer;
		}
	}

	@media (min-width: 1400px) and (max-width: 1799px) {
		.accordionc-header {
			background-color: #FFFFFF;
			font-size: 1.3rem;
			font-weight: 400;
			cursor: pointer;
		}
	}

	@media (min-width: 1200px) and (max-width: 1399px) {
		.accordionc-header {
			background-color: #FFFFFF;
			font-size: 1.2rem;
			font-weight: 400;
			cursor: pointer;
		}
	}

	@media (min-width: 992px) and (max-width: 1199px) {
		.accordionc-header {
			background-color: #FFFFFF;
			font-size: 1.1rem;
			font-weight: 400;
			cursor: pointer;
		}
	}

	@media (min-width: 768px) and (max-width: 991px) {
		.accordionc-header {
			background-color: #FFFFFF;
			font-size: 1.3rem;
			font-weight: 400;
			cursor: pointer;
		}
	}

	@media (min-width: 576px) and (max-width: 767px) {
		.accordionc-header {
			background-color: #FFFFFF;
			font-size: 1.3rem;
			font-weight: 400;
			cursor: pointer;
		}
	}

	@media (min-width: 320px) and (max-width: 480px) {
		.accordionc-header {
			background-color: #FFFFFF;
			font-size: 1rem;
			font-weight: 400;
			cursor: pointer;
		}
	}

	@media (min-width: 0px) and (max-width: 319px) {
		.accordionc-header {
			background-color: #FFFFFF;
			font-size: 0.7rem;
			font-weight: 400;
			cursor: pointer;
		}
	}

</style>


@section('content')
<section>
	<section>
		<div class="bg-global">
			<div class="col-12 p-4" style="background-color: black; color: white;">
				<div class="d-inline" style="font-size:24px;color: white;">Preguntas Frecuentes</div>
			</div>
		</div>
	</section>

	<div class="container my-4 p-5" style="min-height:55vh">
	
		<div class="col-8 mx-auto">
			<div class="accordion" id="accordionExample">
				@foreach ($preguntas as $faq)

				@php
					if ($loop->first) {
						$expfirst = "show";
					}else{
						$expfirst = "";
					}
				@endphp
	
				<div class="card">
					<div class="card-header" id="headingOne" style="background-color:#000;">
					<h2 class="mb-0" >
						<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{!!  $faq->id  !!}" aria-expanded="" aria-controls="collapseOne" style="color:#fff">
						{{ $faq->pregunta }}
						</button>
					</h2>
					</div>

					<div id="collapse{!!  $faq->id  !!}" class="collapse {{$expfirst}}" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							{!! $faq->respuesta !!}
						</div>
					</div>
				</div>
					
				@endforeach
			</div>
		</div>
	</div>
</section>				

@endsection
@section('jsLibExtras2')
@endsection
@section('jqueryExtra')
<script type="text/javascript">
</script>
@endsection
