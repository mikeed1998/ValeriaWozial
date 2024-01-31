@extends('layouts.front')

@section('title') 

@endsection

@section('content')
	<style>
		@font-face {
			font-family: 'Sackers Gothic Light AT Regular';
			src: url('../../vendor/fonts/Sackers_Gothic_Light_AT_Regular.otf') format('opentype');
		}

		@font-face {
			font-family: 'Futura Std Book';
			src: url('../../vendor/fonts/Futura_Std_Book.otf') format('opentype');
		}
	</style>

	<div class="container my-5">
        <div class="row py-3">
            <div class="col-9 mx-auto text-center display-2" style="font-family: 'Sackers Gothic Light AT Regular';">
                Envios y entrega
            </div>
        </div>
        <div class="row">
            <div class="col-10 py-3 mx-auto" style="text-align: justify;">
				<p style="font-family: 'Futura Std Book';">{{ $politicas_envio->titulo }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-10 py-3 mx-auto" style="text-align: justify;">
				<p style="font-family: 'Futura Std Book';">{{ $politicas_envio->descripcion }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-10 py-3 mx-auto" style="text-align: justify;">
				<p style="font-family: 'Futura Std Book';">{{ $garantias->titulo }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-10 py-3 mx-auto" style="text-align: justify;">
				<p style="font-family: 'Futura Std Book';">{{ $garantias->descripcion }}</p>
            </div>
        </div>
    </div>
@endsection

@section('jsLibExtras2')
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$('iframe').attr('width', '100%');
		$('iframe').attr('height', '460');
	</script>
@endsection
