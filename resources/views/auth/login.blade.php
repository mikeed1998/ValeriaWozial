@extends('layouts.front')

@section('title', 'Iniciar Sesión')

@section('styleExtras')
	<link rel="stylesheet" href="{{ asset('css/front/iniciar_sesion.css') }}">
@endsection

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col position-relative fondo-contenedor shadow-lg" style="background-image: url('{{ asset('img/photos/index/slider.png') }}');">
			<div class="col-xxl-9 col-xl-10 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto py-5 carta-sesion position-absolute mt-4 top-50 start-50 translate-middle">
				<div class="row">
					<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-10 col-11 mx-auto">
						<div class="row">
							<div class="col-xxl-3 col-xl-3 col-lg-3 "></div>
							<div class="col-xxl-9 col-xl-9 col-lg-9">
								<div class="row">
									<div class="col mt-5 text-center carta-sesion_titulo">
										INICIA SESIÓN
									</div>
								</div>
								<div class="row">
									<div class="col text-center fs-5 carta-sesion_texto">
										Registrarse para comprar hace que se más sencillo comprobar y ver los pedidos
									</div>
								</div>
								<div class="row">
									<div class="col py-3">
										<input type="email" class="form-control fs-4 input-sesion shadow-none" placeholder="Email * *">
									</div>
								</div>
								<div class="row">
									<div class="col-xxl-6 col-xl-6 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
										<input type="submit" class="btn btn-outline py-3 w-100 fs-5 bg-black text-white rounded-0" value="INICIAR SESIÓN">
									</div>
								</div>
								<div class="row">
									<div class="col-xxl-6 col-xl-6 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
										<a href="#/" class="btn btn-outline py-3 w-100 fs-5 bg-transparent text-dark rounded-0">REGISTRO</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-10 col-11 mx-auto">
						<form method="POST" action="{{ route('login') }}" id="invitado">
							@csrf
							<div class="row">
								<div class="col-xxl-9 col-xl-9 col-lg-9 mx-auto">
									<div class="row">
										<div class="col mt-5 text-center carta-sesion_titulo">
											CONTINUA COMO INVITADO
										</div>
									</div>
									<div class="row">
										<div class="col text-center fs-5 carta-sesion_texto">
										</div>
									</div>
									<div class="row">
										<div class="col py-3">
											{{-- <input type="email" class="form-control fs-4 " placeholder="Email * *"> --}}
											<input id="email" type="email" placeholder="Email * *" class="form-control fs-4 input-sesion shadow-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
											
											@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror

											<input id="password" type="hidden" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" value="12345678">
										</div>
									</div>
									<div class="row">
										<div class="col-xxl-6 col-xl-6 col-lg-9 col-md-9 col-sm-12 col-12 mx-auto">
											<input type="submit" class="btn btn-outline py-3 w-100 fs-5 bg-black text-white rounded-0" value="CONTINUAR">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


{{-- 
<div class="container">
	<div class="row justify-content-center py-5"> --}}




		{{-- <div class="col-md-8">
			@if (session('status'))
			<div class="alert alert-primary text-center" role="alert">
				{{ session('status') }}
			</div>
			@endif
			<div class="card">
				<div class="card-header text-center">{{ __('Iniciar Sesion') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('login') }}">
						@csrf

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Entrar') }}
								</button>

								@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('¿Olvidaste tu contraseña?') }}
								</a>
								@endif
							</div>
						</div>
						<div class="col-md-12 text-center mt-3">
							<a href="{{ route('register') }}" class="btn btn-sm btn-primary">
								{{ __('Regístrate aquí') }}
							</a>
						</div>
					</form>
				</div>
			</div>
		</div> --}}

		{{-- <div class="col-md-5 mb-5">
			<div class="card mb-5 py-5 px-4" style="border-radius:26px; box-shadow:1px 1px 10px rgba(0, 0, 0, 0.119); border:none;">
				<div class="row">
					<div class="col-12">
						<div class="card-body">
							<h5 class="card-title text-center">{{ __('Iniciar Sesion') }}</h5>
							<form method="POST" action="{{ route('login') }}">
								@csrf
								<div class="form-group mb-2">
									<label for="email" class="text-md-right">{{ __('Correo') }}</label>
									<div class="">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>

								<div class="form-group">
									<label for="password" class="text-md-right">{{ __('Contraseña') }}</label>
									<div class="">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>

								<div class="form-group row mb-0">
									<div class="d-flex justify-content-center text-center flex-column">
										<button type="submit" class="btn btn-primary col-12 my-3" style="background: #005395; border-radius: 16px; border:none;">
											{{ __('Entrar') }}
										</button>
										@if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}" style="color: black;">
											{{ __('¿Olvidaste tu contraseña?') }}
										</a>
										@endif
									</div>
								</div>
							</form>

							<p class="card-text text-center">
								<a href="{{ route('register') }}" class="btn btn-sm btn-primary px-4 py-1" style="background: black; border-radius: 16px; border:none;">
									{{ __('Regístrate aquí') }}
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div> --}}
@endsection
