<style>
    @font-face {
        font-family: 'Sackers Gothic Light AT Regular';
        src: url('../../vendor/fonts/Sackers_Gothic_Light_AT_Regular.otf') format('opentype');
    }

    @font-face {
        font-family: 'Futura Std Book';
        src: url('../../vendor/fonts/Futura_Std_Book.otf') format('opentype');
    }

    .col, .row, .container-fluid, .container {
        font-family: 'Futura Std Book', sans-serif;
        font-weight: 400;
    }
</style>

<link rel="stylesheet" href="{{ asset('css/front/footer.css') }}">

<footer>
    <div class="container-fluid bg-black p-5">
        <div class="row">
            <div class="col border border-white">
                <div class="row py-2">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 border-end border-white">
                        <form action="datos.php" class="needs-validation" id="form-footer" method="POST" enctype="multipart/from-data">
                            <input type="hidden" name="tipoForm" value="footer">
                            <div class="row">
                                <div class="col-9 mx-auto py-5">
                                    <div class="row">
                                        <div class="col-xxl-9 col-xl-9 col-lg-11 col-md-11 col-sm-11 col-11 text-start text-white fs-3">
                                            Necesitas ayuda? Escribenos
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-9 col-xl-9 col-lg-11 col-md-11 col-sm-11 col-11 text-white">
                                            Deja tu correo y tu comentario y un asesor se reportará contigo a la brevedad
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 text-white">
                                            <div class="row py-2">
                                                <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto text-start">
                                                    <input type="text" id="nombre" class="form-control py-2 fs-5 border border-white bg-black footer-input" placeholder="NOMBRE" required>
                                                    <div class="valid-feedback">
                                                        Correcto
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Ingresa un nombre
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto mt-xxl-0 mt-xl-3 mt-lg-3 mt-md-3 mt-sm-3 mt-3 py-xxl-0 py-xl-2 py-lg-2 py-md-2 py-sm-2 py-2">
                                                    <input type="number" id="whatsapp" class="form-control py-2 fs-5 border border-white bg-black footer-input" placeholder="WHATSAPP" required>
                                                    <div class="valid-feedback">
                                                        Correcto
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        No valido
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-12 text-white">
                                            <div class="row py-2">
                                                <div class="col text-start">
                                                    <input type="text" id="mensaje" class="form-control py-2 fs-5 border border-white bg-black footer-input" placeholder="MENSAJE" required>
                                                    <div class="valid-feedback">
                                                        Correcto
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        No valido
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-12 text-white">
                                            <div class="row py-2">
                                                <div class="col text-start">
                                                    <input type="submit" id="footer-enviar" class="form-control py-2" value="ENVIAR">
                                                    <div class="text-danger" id="error-enviar">
                                                        Ingresa datos validos.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col p-5 text-end text-white">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-1 col-md-1 col-sm-12 col-12"></div>
                                            <div class="col-6 col-xl-6 col-lg-11 col-md-11 col-sm-12 col-12 mx-auto aling-content-center justify-content-center">      
                                                <div class="row">
                                                    <div class="col-xxl-9 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12 fs-5 mt-1">
                                                        <div class="row">
                                                            
                                                            @if(auth()->check())
                                                                <div class="col-md-9 col-12 text-xxl-start text-xl-start text-lg-start text-md-start text-sm-start text-center">
                                                                    <div class="row">
                                                                        <div class="col-9">
                                                                            <a href="{{ url('login') }}" class="link-header2" style="font-family: 'Futura Std Book', sans-serif;">
                                                                                {{ auth()->user()->name }}
                                                                            </a> /
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <form action="{{ route('logout') }}" method="POST" class="m-0 p-0" style="white-space: nowrap;">
                                                                                <button type="submit" class="btn m-0 p-0 btn-outline link-contacto" style="white-space: nowrap; font-family: 'Futura Std Book', sans-serif;">
                                                                                    Cerrar sesión
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-xxl-end text-xl-end text-lg-end text-md-end text-sm-end text-center">
                                                                    <a href="{{ route('login') }}" class="link-contacto" style="font-family: 'Futura Std Book', sans-serif;">Iniciar sesión</a>
                                                                </div>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-2 col-sm-2 text-end col-5 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-0 mt-4 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-0 mx-sm-auto mx-auto">
                                                        <a href="{{url('miCarrito')}}">
                                                            <div class="row">
                                                                <div class="col position-relative">
                                                                    <img src="{{ asset('img/photos/carrito/logo2.png') }}" alt="" class="img-fluid text-start">
                                                                    <div class="col-3 position-absolute top-0 start-100 translate-middle bg-white text-center text-dark rounded-circle" style="font-family: 'Futura Std Book', sans-serif;">
                                                                        
                                                                        @if(session('carrito'))
                                                                            @php
                                                                                $cuenta = count(session('carrito'));
                                                                            @endphp
                                                                            @if($cuenta > 9)
                                                                                +9
                                                                            @else
                                                                                {{ $cuenta }}
                                                                            @endif
                                                                        @else
                                                                            <small style="font-family: 'Futura Std Book', sans-serif;">+9</small>
                                                                        @endif
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
                                <div class="row">
                                    <div class="col-11 mx-auto">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 text-white display-5">
                                                <div class="row">
                                                    <div class="col py-1">
                                                        <a href="{{ route('front.index') }}" class="link-contacto">Home</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col py-1">
                                                        <a href="#/" class="link-contacto">Rebajas</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col py-1">
                                                        <a href="{{ route('front.contact') }}" class="link-contacto">Contacto</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="row mt-5">
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12"></div>
                                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-6 col-12 text-secondary text-end mt-5 py-2" style="font-family: 'Futura Std Book', sans-serif;">
                                                        Avenida Lapizlazuli 2074 int3 Residencial Victoria, Guadalajara, Jalisco, México contacto@rfc.com 3338096501.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 py-3">
                                        <div class="col-12 border-top border-white"></div>
                                    </div>
                                </div>
                                <div class="row mt-1 mb-2 text-white">
                                    <div class="col-11 mx-auto">
                                        <div class="row">
                                            <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ route('front.aviso_privacidad') }}" class="link-contacto">Aviso de privacidad</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ route('front.faqs') }}" class="link-contacto">Preguntas frecuentes</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ route('front.terminos_condiciones') }}" class="link-contacto">Terminos y condiciones</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-sm-6 col-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ route('front.envio_entrega') }}" class="link-contacto">Envio y entrega</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ route('front.devoluciones') }}" class="link-contacto">Devoluciones</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ route('front.metodos_pago') }}" class="link-contacto">Pagos</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="row">
                                                    <div class="col fs-1 text-end">
                                                        <a href="#/" class="link-contacto_social">
                                                            <i class="bi bi-whatsapp"></i>
                                                        </a>
                                                        <a href="#/" class="link-contacto_social">
                                                            <i class="bi bi-facebook"></i>
                                                        </a>
                                                        <a href="#/" class="link-contacto_social">
                                                            <i class="bi bi-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col py-2 fs-5 text-center text-secondary" style="font-family: 'Futura Std Book', sans-serif;">
                Valeria Bazante 2023 todos los derechos reservados diseño por Wozial
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <img src="{{ asset('img/photos/footer/uve.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</footer>

<script>

    var enviarBtn = document.getElementById('footer-enviar');
    var errorEnviar = document.getElementById('error-enviar');
    errorEnviar.style.display = 'none';

    document.getElementById('nombre').addEventListener('input', function () {
        var nombreInput = this.value.trim();
        var feedback = this.nextElementSibling;
    
        if (nombreInput.length > 0) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            feedback.textContent = 'Correcto';
            enviarBtn.removeAttribute('disabled');
            errorEnviar.style.display = 'none';
        } else {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
            feedback.textContent = 'Ingresa un nombre válido';
            enviarBtn.setAttribute('disabled', 'disabled');
            errorEnviar.style.display = 'block';
        }
    });
    
    document.getElementById('whatsapp').addEventListener('input', function () {
        var whatsappInput = this.value.trim();
        var feedback = this.nextElementSibling;
    
        var minDigits = 10; 
    
        if (whatsappInput.length >= minDigits && /^\d+$/.test(whatsappInput)) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            feedback.textContent = 'Correcto';
            enviarBtn.removeAttribute('disabled');
            errorEnviar.style.display = 'none';
        } else {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
            feedback.textContent = 'Ingresa un número de teléfono válido con al menos ' + minDigits + ' dígitos';
            enviarBtn.setAttribute('disabled', 'disabled'); 
            errorEnviar.style.display = 'block';
        }
    });
    
    document.getElementById('mensaje').addEventListener('input', function () {
        var mensajeInput = this.value.trim();
        var feedback = this.nextElementSibling;
    
        if (mensajeInput.length > 0) {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
            feedback.textContent = 'Correcto';
            enviarBtn.removeAttribute('disabled');
            errorEnviar.style.display = 'none';
        } else {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
            feedback.textContent = 'Ingresa un mensaje válido';
            enviarBtn.setAttribute('disabled', 'disabled');
            errorEnviar.style.display = 'block';
        }
    });
</script>




{{-- <footer>
    <div class="container-fluid" style="background-color: #005395;">
        <div class="row py-5">
            <div class="col-11 mx-auto">
                <div class="row py-3">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-11 mx-auto mt-3 border-end border-dark">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('img/design/footer/foot.png') }}" alt="" class="img-fluid w-75">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-1"></div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-3 text-start rounded-circle">
                                <img src="{{ asset('img/design/footer/icono01.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-3 text-start">
                                <img src="{{ asset('img/design/footer/icono02.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-3 text-start">
                                <img src="{{ asset('img/design/footer/icono03.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-12 col-sm-12 col-xs-12 col-12"></div>
                    <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 col-11 mx-auto text-white mt-xxl-1 mt-xl-1 mt-lg-1 mt-md-5 mt-sm-3 mt-xs-3 mt-3">
                        <div class="row">
                            <div class="col-md-4 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3 mt-xs-3 mt-3 text-start">
                                <div class="row">
                                    <div class="col-12 py-0 mb-3 fs-4 fw-bolder">
                                        NAVEGACIÓN
                                    </div>
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('front.index') }}" style="text-decoration: none; color: #BCBCB0;">Inicio</a>
                                    </div>
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('front.tienda') }}" style="text-decoration: none; color: #BCBCB0;">Tienda</a>
                                    </div>
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('front.soluciones') }}" style="text-decoration: none; color: #BCBCB0;">Soluciones</a>
                                    </div>
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('front.aboutus') }}" style="text-decoration: none; color: #BCBCB0;">Nosotros</a>
                                    </div>
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('config.contact') }}" style="text-decoration: none; color: #BCBCB0;">Contacto</a>
                                    </div>
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('front.subdistribuidor') }}" style="text-decoration: none; color: #BCBCB0;">Subdistribuidor</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3 mt-xs-3 mt-3 text-start">
                                <div class="row">
                                    <div class="col py-0 mb-3 fs-4 fw-bolder">
                                        AYUDA
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('front.faqs') }}" style="text-decoration: none; color: #BCBCB0;">Preguntas Frecuentes</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('front.politicas') }}" style="text-decoration: none; color: #BCBCB0;">Aviso de Privacidad</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('front.metodos_pago') }}" style="text-decoration: none; color: #BCBCB0;">Métodos de Pago</a>
                                    </div>
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        <a href="{{ route('front.punto_venta') }}" style="text-decoration: none; color: #BCBCB0;">Punto de Venta</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3 mt-xs-3 mt-3 mt-3 text-start">
                                <div class="row">
                                    <div class="col py-0 mb-3 fs-4 fw-bolder">
                                        CONTACTO
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        Tel. {{ $config->telefono }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 py-1" style="color: #BCBCB0;">
                                        {{ $config->direccion }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col py-3 text-center" style="background-color: #014076; color: #BCBCB0;">
                P E P E&nbsp;&nbsp;&nbsp;F E S T E R&nbsp;&nbsp;&nbsp;2 0 2 3&nbsp;&nbsp;&nbsp;T O D O S&nbsp;&nbsp;&nbsp;L O S&nbsp;&nbsp;&nbsp;D E R E C H O S&nbsp;&nbsp;&nbsp;R E S E R V A D O S&nbsp;&nbsp;&nbsp;D I S E Ñ O&nbsp;&nbsp;&nbsp;P O R&nbsp;&nbsp;&nbsp;W O Z I A L
            </div>
        </div>
    </div>
</footer>
     --}}