@extends('layouts.front')

@section('title', 'FAQS')


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

	body {
		font-family: 'Futura Std Book', sans-serif;
		font-weight: 400;
	}

	div {
		font-family: 'Futura Std Book', sans-serif;
	}

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

<div class="container my-5">
	<div class="row py-3">
		<div class="col-11 mx-auto text-center display-2" style="font-family: 'Sackers Gothic Light AT Regular';">
			FAQS
		</div>
	</div>
	<div class="row">
		<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-11 col-11 py-3 mx-auto text-center">
			Lorem optio vero recusandae ducimus sapiente ad ea a sed. Voluptatem ipsa temporibus doloribus, dignissimos quam recusandae vero ea iure.
		</div>
	</div>
	<div class="row">
		<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-9 col-sm-11 col-11 py-3 mx-auto" style="text-align: justify;">
			<div class="accordionc">
				
				<div class="accordionc-item position-relative" id="section1">
					<a href="#/" class="accordionc-header text-decoration-none text-dark" onclick="toggleAcoo(1)">
						<div class="col-11 mx-auto position-relative">
							<div class="row mt-2">
								<div class="col-11">
									¿Como puedo crear mi cuenta? 1
								</div>
							</div>
							<div class="col position-absolute top-50 start-100 translate-middle">
								<div clase="down-img" id="down-img-1">
									<img src="img/faq/down.png" alt="" clase="img-fluid">
								</div>
								<div class="up-img" id="up-img-1">
									<img src="img/faq/up.png" alt="" clase="img-fluid">
								</div>
							</div>
						</div>
						<div class="col-12 px-0 mt-2 border-bottom"></div>
					</a>
					<div class="col-11 mx-auto accordionc-content py-1">
						<p>Contenido de la sección 1...</p>
					</div>
				</div>

				<div class="accordionc-item position-relative" id="section2">
					<a href="#/" class="accordionc-header text-decoration-none text-dark" onclick="toggleAcoo(2)">
						<div class="col-11 mx-auto position-relative">
							<div class="row mt-2">
								<div class="col-11">
									¿Como puedo crear mi cuenta? 2
								</div>
							</div>
							<div class="col position-absolute top-50 start-100 translate-middle">
								<div clase="down-img" id="down-img-2">
									<img src="img/faq/down.png" alt="" clase="img-fluid">
								</div>
								<div class="up-img" id="up-img-2">
									<img src="img/faq/up.png" alt="" clase="img-fluid">
								</div>
							</div>
						</div>
						<div class="col-12 px-0 mt-2 border-bottom"></div>
					</a>
					<div class="col-11 mx-auto accordionc-content py-1">
						<p>Contenido de la sección 2...</p>
					</div>
				</div>
				<div class="accordionc-item position-relative" id="section3">
					<a href="#/" class="accordionc-header text-decoration-none text-dark" onclick="toggleAcoo(3)">
						<div class="col-11 mx-auto position-relative">
							<div class="row mt-2">
								<div class="col-11">
									¿Como puedo crear mi cuenta? 3
								</div>
							</div>
							<div class="col position-absolute top-50 start-100 translate-middle">
								<div clase="down-img" id="down-img-3">
									<img src="img/faq/down.png" alt="" clase="img-fluid">
								</div>
								<div class="up-img" id="up-img-3">
									<img src="img/faq/up.png" alt="" clase="img-fluid">
								</div>
							</div>
						</div>
						<div class="col-12 px-0 mt-3 border-bottom"></div>
					</a>
					<div class="col-11 mx-auto accordionc-content py-1">
						<p>Contenido de la sección 3...</p>
					</div>
				</div>
				<div class="accordionc-item position-relative" id="section4">
					<a href="#/" class="accordionc-header text-decoration-none text-dark" onclick="toggleAcoo(4)">
						<div class="col-11 mx-auto position-relative">
							<div class="row mt-2">
								<div class="col-11">
									¿Como puedo crear mi cuenta? 4
								</div>
							</div>
							<div class="col position-absolute top-50 start-100 translate-middle">
								<div clase="down-img" id="down-img-4">
									<img src="img/faq/down.png" alt="" clase="img-fluid">
								</div>
								<div class="up-img" id="up-img-4">
									<img src="img/faq/up.png" alt="" clase="img-fluid">
								</div>
							</div>
						</div>
						<div class="col-12 px-0 mt-4 border-bottom"></div>
					</a>
					<div class="col-11 mx-auto accordionc-content py-1">
						<p>Contenido de la sección 4...</p>
					</div>
				</div>

				<!-- Agrega más secciones según sea necesario -->

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
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

@endsection


@section('jsLibExtras2')
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const accordionItems = document.querySelectorAll('.accordionc-item');

		accordionItems.forEach(item => {
			const header = item.querySelector('.accordionc-header');

				header.addEventListener('click', function() {
				const content = item.querySelector('.accordionc-content');
				const isOpen = content.style.display === 'block';

				accordionItems.forEach(accItem => {
					accItem.querySelector('.accordionc-content').style.display = 'none';
				});

				if (!isOpen) {
					content.style.display = 'block';
				}
			});
		});
	});
</script>
@endsection


@section('jqueryExtra')

@endsection


