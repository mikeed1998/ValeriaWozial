<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\ProductosPhoto;
use App\Elemento;
use App\Carrusel;
use App\Politica;
use App\Vacante;
use App\Faq;
use App\Categoria;
use App\Configuracion;
use App\Producto;
use App\colores;
use App\services;
use App\herramientas;
use App\equipo;
use App\logoequipos;
use App\PFCategoriaProducto;
use App\PFNecesidades;
use App\PFProducto;
use App\PFProyecto;
use App\PFPuntoVenta;
use App\PFSliderPrincipal;
use App\PFSolucion;
use App\PFSubdistribuidor;
use App\PFPresentacionProducto;
use App\PFGaleria;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		$slider_principal = PFSliderPrincipal::all();
		$categorias = PFCategoriaProducto::all();
		$productos = PFProducto::all();
		$soluciones = PFSolucion::all();
		$proyectos = PFProyecto::all();
		$presentacion = PFPresentacionProducto::all();

		$pagina = 'home';

		$cont = 0;
		foreach ($proyectos as $p) {
			$cont++;
		}

		$config = Configuracion::find(1);
		$elements = Elemento::where('seccion',1)->get();
		$elements_proyectos = Elemento::where('seccion',3)->get();
		$elements_contacto = Elemento::where('seccion',4)->get();

		return view('front.index', compact('elements', 'pagina', 'categorias', 'productos', 'slider_principal', 'soluciones', 'proyectos', 'cont', 'elements_proyectos', 'elements_contacto', 'config', 'presentacion'));
	}

	public function tienda() {
		$categorias = PFCategoriaProducto::all();
		$productos = PFProducto::all();
		$presentacion = PFPresentacionProducto::all();

		$pagina = 'tienda';

		$config = Configuracion::find(1);
		$elements = Elemento::where('seccion',2)->get();

		return view('front.tienda', compact('pagina', 'categorias', 'productos', 'elements', 'config', 'presentacion'));
	}

	public function producto($id) {
		$categorias = PFCategoriaProducto::all();
		$producto = PFProducto::find($id);
		$productos = PFProducto::all();
		$producto_p = PFPresentacionProducto::all();
		$galeria = PFGaleria::all();
		$config = Configuracion::find(1);
		$presentacion = PFPresentacionProducto::all();

		$gale = [];
		foreach($galeria as $ga) {
			if($ga->producto == $id) {
				array_push($gale, $ga);
			}
		}

		// dd($gale);

		$pagina = 'producto_detalle';

		return view('front.tienda_detalle', compact('id', 'pagina', 'presentacion', 'producto', 'categorias', 'productos', 'producto_p', 'gale', 'config'));
	}

	public function soluciones() {
		$soluciones = PFSolucion::all();

		$pagina = 'soluciones';

		$config = Configuracion::find(1);
		$elements_home = Elemento::where('seccion',1)->get();
		$elements = Elemento::where('seccion',5)->get();

		return view('front.soluciones', compact('pagina', 'soluciones', 'elements', 'elements_home', 'config'));
	}

	public function punto_venta() {
		$puntos_venta = PFPuntoVenta::all();

		$pagina = 'punto_venta';

		$config = Configuracion::find(1);
		$elements = Elemento::where('seccion',6)->get();

		return view('front.punto_venta', compact('pagina', 'puntos_venta', 'elements', 'config'));
	}

	public function subdistribuidor() {
		$subdistribuidores = PFSubdistribuidor::all();

		$pagina = 'subdistribuidor';

		$config = Configuracion::find(1);
		$elements = Elemento::where('seccion',7)->get();
		$elements_home = Elemento::where('seccion',1)->get();
		$elements_contacto = Elemento::where('seccion',4)->get();

		return view('front.subdistribuidor', compact('pagina', 'subdistribuidores', 'elements', 'elements_home', 'elements_contacto', 'config'));
	}

	public function aboutus() {
		$necesidades = PFNecesidades::all();

		$pagina = 'nosotros';

		$config = Configuracion::find(1);
		$elements = Elemento::where('seccion',8)->get();

		return view('front.aboutus', compact('pagina', 'necesidades', 'elements', 'config'));
	}

	public function contact(){
		$pagina = 'contacto';

		$config = Configuracion::find(1);
		$elements = Elemento::where('seccion',4)->get();

		return view('front.contacto', compact('pagina', 'elements', 'config', 'config'));
	}


	public function projects(){
		$user=null;
		if(auth()->check()){
			$user = auth()->user();
		}
		$proyectos = services::all();
		$config = Configuracion::find(1);
		$elements = Elemento::where('seccion',3)->get();
		return view('front.projects',compact('user','proyectos','elements', 'config'));
	}

	

	public function products(Request $request){
		$user=null;
		if(auth()->check()){
			$user = auth()->user();
		}
		$config = Configuracion::find(1);
		$categorias =  Categoria::all();
		$nom_cat = null;
		if(empty($request->all())){
			$productos = Producto::all();
		}else{
			$productos = Producto::where('categoria',$request->Categoria)->get();
			$nom_cat =  Categoria::find($request->Categoria);
		}
		
		return view('front.productos',compact('user','productos','categorias','nom_cat', 'config'));
	}

	public function detprod($id) {
		$user=null;
		if(auth()->check()){
			$user = auth()->user();
		}
		$config = Configuracion::find(1);
		$producto = Producto::find($id);
		$color = colores::find($producto->color);
		$categorias =  Categoria::find($producto->categoria);
		$productosPhoto = ProductosPhoto::where('producto',$producto->id)->get();
		$relacionado = Producto::where('categoria',$producto->categoria)->get();
		return view('front.detprod',compact('user','producto','color','categorias','productosPhoto','relacionado', 'config'));
	}

	public function faqs() {
		$config = Configuracion::find(1);
		$preguntas = Faq::all();
		$pagina = 'preguntas';
		return view('front.faq', compact('preguntas', 'pagina', 'config'));
	}

	public function politicas() {
		$config = Configuracion::find(1);
		$politica = Politica::all();
		$pagina = 'politicas';
		return view('front.politicas', compact('politica', 'pagina', 'config'));
	}

	public function metodos_pago() {
		$config = Configuracion::find(1);
		$metodos_pago = Politica::all();
		$pagina = 'metodos_pago';
		return view('front.metodos_pago', compact('metodos_pago', 'pagina', 'config'));
	}


	// public function tienda(Request $request){
	// 	$elements = Elemento::where('seccion',2)->get();
		// $categoria = $request->get('categoria');
		
		// if(!empty($categoria)){
		// 	$categoria_b = Categoria::find($categoria);
		// 	$busqueda = $request->get('busqueda');
		// 	$productos = DB::table('productos')
		// 	->select('id','portada','nombre','descripcion','precio')
		// 	->where('categoria','LIKE','%'.$categoria.'%')
		// 	->paginate(12);
		// 	$categoria = Categoria::all();

		// }else{

		// $busqueda = $request->get('busqueda');

		// $productos = DB::table('productos')
		// ->select('id','portada','nombre','descripcion','precio')
		// ->where('nombre','LIKE','%'.$busqueda.'%')
		// ->orwhere('descripcion','LIKE','%'.$busqueda.'%')
		// ->orwhere('precio','LIKE','%'.$busqueda.'%')
		// ->paginate(12);
		// $categoria = Categoria::all();
		// }

	// 	$productos = Producto::all();
	// 	foreach($productos as $p){
	// 		$prod_photos = ProductosPhoto::where('producto',$p->id)->get()->first();
	// 		if(!empty($prod_photos)){
	// 			$p->photo = $prod_photos->image;
	// 		}

	// 	}


	// 	return view('front.tienda',compact('productos','elements'));
	// }

	// public function details($id){
		
	// 	$producto = Producto::find($id);


	// 	$productosr = Producto::where('categoria',$producto->categoria)->get();

		

	// 	$producto->categoria = Categoria::find($producto->categoria);

	// 	$productos_photos =  ProductosPhoto::where('producto',$producto->id)->get();

		

		// $variantes = ProductoVariante::where('producto', $product->id)->get();
		// $medidas = ProductoMedida::where('producto',$product->id)->orderBy('orden', 'asc')->get();
		// return view('front.detalles', compact('product','variantes','productos_rel','elements'));
		// $data = array(
		// 	'product' => $product,
		// 	'medidas' => $medidas,
		// );
		// return response()->json($data);
		// return $product;

	// 	return view('front.detalles',compact('producto','productos_photos','productosr'));
	// }

	// correo de contacto normal
	public function mailcontact(Request $request){
	
		
		$validate = Validator::make($request->all(),[
			"tipoForm" => "required",
			'nombre' => 'required',
			"empresa" => "required",
			'correo' => 'required',
			"whatsapp" => "required",
			"asunto" => "required",
			'mensaje' => 'nullable',
		],[],[]);

		if ($validate->fails()) {
			\Toastr::error('Error, se requieren todos los datos');
			return redirect()->back();
		}

		$data = array(
			'tipoForm' => $request->tipoForm,
			'nombre' => $request->nombre,
			'empresa' => $request->empresa,
			'correo' => $request->correo,
			'whatsapp' => $request->whatsapp,
			'asunto' => $request->asunto,
			'mensaje' => $request->mensaje,
			'hoy' => Carbon::now()->format('d-m-Y')
		);

		$html = view('front.mailcontact', compact('data'));

		$config = Configuracion::first();

		$mail = new PHPMailer;
		
		try {
			$mail->isSMTP();
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			// $mail->SMTPDebug = 2;
			$mail->Host = $config->remitentehost;
			$mail->SMTPAuth = true;
			$mail->Username = $config->remitente;
			$mail->Password = $config->remitentepass;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port = $config->remitenteport;

			$mail->SetFrom($config->remitente, 'PepeFester Contacto');
			$mail->isHTML(true);

			$mail->addAddress($config->destinatario,'PepeFester Contacto');
			if (!empty($config->destinatario2)) {
				$mail->AddBCC($config->destinatario2,'PepeFester Contacto');
			}
			
			if($data['tipoForm'] == 'contacto') {
				$mail->Subject = $data['asunto'];
			} else {
				$mail->Subject = 'Mensaje';
			}
			
			$mail->msgHTML($html);
			// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if($mail->send()){
				// dd('paso culo');
			//Contacto@dineroorganico.com
			\Toastr::success('Correo enviado Exitosamente!');
				return redirect()->back();
			}else{
				// dd('no paso culo');
				\Toastr::error('Error al enviar el correo');
				return redirect()->back();
			}


		} catch (phpmailerException $e) {
			\Toastr::error($e->errorMessage());//Pretty error messages from PHPMailer
			return redirect()->back();
		} catch (Exception $e) {
			\Toastr::error($e->getMessage());//Boring error messages from anything else!
			return redirect()->back();
		}
		

	}

	

}
