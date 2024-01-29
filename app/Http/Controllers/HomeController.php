<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Color;
use App\Domicilio;
use App\Factura;
use App\Pedido;
use App\PedidoSubasta;
use App\PedidoDetalle;
use App\Producto;
use App\ProductosPhoto;
use App\ProductoVariante;
use App\Subasta;
use App\Puja;
use App\Configuracion;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
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
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$userId = Auth::id();
		$usuario = User::find($userId);
        return view('dashboard.home',compact('usuario'));
    }

	public function miPerfil()
    {
		$userId = Auth::id();
		$usuario = User::find($userId);
        return view('dashboard.dashboard',compact('usuario'));
    }

	public function dEnvios(){
		$userId = Auth::id();
		$usuario = User::find($userId);
		$domicilio = Domicilio::where('user',$userId)->get()->first();
		if(empty($domicilio)){
			$domicilio =new Domicilio;
			$domicilio->user = $userId;
			$domicilio->save();
		}
		return view('dashboard.datosEnvio',compact('usuario','domicilio'));
	}

	public function pedidos(){
		$userId = Auth::id();
		$usuario = User::find($userId);
		$pedido = Pedido::where('usuario',$userId)->get();
		
		
		foreach ($pedido as $item) {
			$fechaFormateada = $item->created_at->format('Y-m-d');
			// Ahora $fechaFormateada contendrá la fecha en formato 'YYYY-MM-DD'
			// ... haz algo con $fechaFormateada
			$item->created_at = $fechaFormateada;
		}

		// $datos = json_decode($pedido->data);
		// dd($item->data);

		return view('dashboard.pedidos',compact('usuario','pedido'));
	}

		// public function subastas(){
		// 	$hoy = Carbon::now('America/Mexico_city')->format('Y-m-d H:i:s');
		//
		// 	$pujas = Puja::where('user',Auth::user()->id)->orderBy('id','desc')->get()->groupBy('subasta');
		// 	$subastas = collect();
		// 	$subastas_ended = collect();
		// 	$subastas_win = collect();
		//
		// 	foreach ($pujas as $puja) {
		// 		$sub = Subasta::find($puja->first()->subasta);
		// 		if ($sub->deadline > $hoy) {
		// 			$sub->puja = $puja->first()->puja;
		// 			$subastas->push($sub);
		// 		} else {
		// 			$sub->puja = $puja->first()->puja;
		// 			$subastas_ended->push($sub);
		//
		// 			if ($sub->lastUserId == Auth::user()->id ) {
		// 				$subastas_win->push($sub);
		// 			}
		// 		}
		// 	}
		// 	return view('dashboard.subastas.subastas',compact('subastas','subastas_ended','subastas_win'));
		// 	// return $subastas;
		// }

		public function perfil(){
			$user = Auth::user();
			$factura = Factura::where('user',$user->id)->get()->first();
			$user = User::find($user->id);
			$domicilios = Domicilio::where('user',$user->id)->get();
			$estados = DB::table('estados')->get();
			// $domicilios = collect() ;

			return view('dashboard.perfil',compact('factura','user','domicilios','estados'));
		}

		public function compras(){
			$compras = Pedido::where('usuario',Auth::user()->id)->orderBy('id','desc')->get();

			return view('dashboard.compras.index',compact('compras'));
		}

		public function updatePass(Request $request){
			$validate = Validator::make($request->all(),[
				'pw' => 'required',
				'cpw' => 'same:pw',
			],[],[
				'pw' => 'contraseña',
				'cpw' => 'confirmacion de contraseña',
			]);

			if ($validate->fails()) {
				\Toastr::error('Error, se requieren mas datos');
				return redirect()->back()->withErrors($validate);
			}


			User::find(Auth()->user()->id)->update(['password'=> Hash::make($request->pw)]);

			\Toastr::success('Cambio exitoso');
			return redirect()->back();
			// return view('dashboard.subastas');
		}

		public function detalle($uuid){
			$pedido = Pedido::where('uid',$uuid)->first();
			$pedido->domicilio = json_decode($pedido->domicilio,true);
			$pedido->usuario = User::find($pedido->usuario);
			$detalle = PedidoDetalle::where('pedido',$pedido->id)->get();

			foreach ($detalle as $det) {
				$var = ProductoVariante::find($det->producto);
				$main = PFProducto::find($var->producto);
				$det->producto = array(
					'prod' => $main,
					'var' => $var,
				);
			}

			$pedido->envia_resp = json_decode($pedido->envia_resp,true);
			return view('dashboard.compras.detalle',compact('pedido','detalle'));
			// return $detalle;
		}

		public function orden($uuid){
			$pedido = Pedido::where('uid',$uuid)->first();
			$pedido->domicilio = Domicilio::find($pedido->domicilio);
			// $pedido->usuario = User::find($pedido->usuario);
			$detalles = PedidoDetalle::where('pedido',$pedido->id)->get();
			$user = User::find($pedido->usuario);
			$detalles = json_decode($pedido->data);
			// return view('admin.pedidos.invoice',compact('pedido','detalles','user'));
			$html = view('admin.pedidos.invoice',compact('pedido','detalles','user'))->render();
			PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
			$fname = 'Orden-'.$pedido->uid.'.pdf';
			return PDF::loadHTML($html)->setPaper('A4', 'portrait')->stream($fname);
		}

		public function mynetwork(){

			// return view('admin.clientes.show',compact('user','domicilios','factura','pedidos'));
		}

		public function referidosN($tope,$code){
			$data = self::getNetwork($tope,$code);

			return $data;
		}

		public function getNetwork($tope,$code){
			$referidos = User::where('referido_by',$code)->get('distr_code');

			$network = collect();
			$tope--;

			foreach ($referidos as $ref) {
				if ($tope >= 0 ) {
					$data = self::getNetwork($tope,$ref->distr_code);
					$network->push([
						'user' => $ref->distr_code,
						'referidos' => $data
					]);
				}
			}

			return $network;
		}

	// carrito
		
	public function addCard(Request $request){
		$cantidad = $request->cantidad;
		$productoId = $request->id_prod;
		$producto = PFProducto::find($productoId);
		$presentacion = PFPresentacionProducto::find($request->presentacion);
		// dd($producto . $presentacion);
		if (!$producto) {
			return redirect()->back()->with('error', 'Producto no encontrado');
		}

		$carrito = session()->get('carrito', []);
	
		if (isset($carrito[$productoId])) {

			if($carrito[$productoId]['existencias'] < $producto->existencias){
				$carrito[$productoId]['existencias']++;
				\Toastr::success('Agregado al carrito');
			}else{
				\Toastr::error('Error, no hay mas stock disponible para agregar');
			}
			
		} else {
			$carrito[$productoId] = [
				'id' => $producto->id,
				'categoria' => $producto->categoria,
				'nombre' => $producto->nombre,
				'precio' => $producto->precio,
				'descripcion' => $producto->descripcion,
				'imagen' => $producto->imagen,
				'presentacion' => $presentacion->presentacion,
				'existencias' => $cantidad,
			];
			\Toastr::success('Agregado al carrito');
		}
	
		session()->put('carrito', $carrito);

		if($request->comprar == 'Comprar ahora') {
			return redirect()->route('miCarrito');
		}
	
		return redirect()->back()->with('success', 'Producto agregado al carrito');
	}

	public function miCarrito(){
		$Carrito = session('carrito');
		$pagina = 'carrito';
		//	session()->forget('carrito');
		if(!empty($Carrito)){
			foreach($Carrito  as $c){
				$producto =  PFProducto::find($c['id']);
				$producto->catidad_total = $c['existencias'];
				$productos[]=$producto;
			}
			$userId = Auth::id();
			$user = User::find($userId);
			//dd($productos);
			$car = 1;
			return view('cart.micarrito',compact('productos','user','car', 'pagina'));
		}else{
			$car = 0;
			$productos[] = null;
			$userId = Auth::id();
			$user= User::find($userId);
			//dd($productos);
			return view('cart.micarrito',compact('productos','user','car', 'pagina'));
		}


	}


	public function elim_prod_car(Request $request){

		$carrito = session()->get('carrito', []);

		if (isset($carrito[$request->id])) {
			unset($carrito[$request->id]); // Elimina el elemento del array
			session()->put('carrito', $carrito); // Actualiza la sesión con el array modificado
			return response()->json(['success' => true, 'mensaje' => 'Producto eliminado']);
		} else {
			return response()->json(['success' => false, 'mensaje' => 'Error al eliminar producto']);
		}

	}

	public function cant_change(Request $request){
		$carrito = session()->get('carrito', []);

		if (isset($carrito[$request->id])) {
			$producto = PFProducto::find($request->id);
			if($request->value <= $producto->existencias && $request->value > 0){
				$carrito[$request->id]['existencias'] = $request->value;
				session()->put('carrito', $carrito); // Actualiza la sesión con el array modificado
				return response()->json(['success' => true, 'mensaje' => 'Cantidad cambiada']);
			}else{
				return response()->json(['success' => false, 'mensaje' => 'Error no se cuenta con suficiente stock']);
			}

		} else {
			return response()->json(['success' => false, 'mensaje' => 'Error al actualizar la cantidad']);
		}
	}

	public function proceso_datos(Request $request){
		$envio = session('envio');
		if(!empty($envio)){
			session()->put('envio', $request->envio);
		}else{
			session(['envio' => $request->envio]);
		}

		$Carrito = session('carrito');

			foreach($Carrito  as $c){
				$producto =  PFProducto::find($c['id']);
				$producto->catidad_total = $c['existencias'];
				$productos[]=$producto;
			}
			$userId = Auth::id();
			$user = User::find($userId);
			$domicilio = Domicilio::where('user',$userId)->get()->first();
			if(empty($domicilio)){
				$domicilio =new Domicilio;
				$domicilio->user = $userId;
				$domicilio->save();
			}
			//dd($domicilio);
			//dd($productos);
			$car = 1;
			$pagina = 'proceso_pago';
			$tipo_pago = $request->tipo_pago;
		return view('cart.micarritoDatos',compact('productos','user','car','domicilio','envio','pagina', 'tipo_pago'));

	}

	public function pasarelaPago(Request $request){
		$envio = session('envio');
		$Carrito = session('carrito');
		
			foreach($Carrito  as $c){
				$producto =  PFProducto::find($c['id']);
				$producto->catidad_total = $c['existencias'];
				$productos[]=$producto;
			}
			$userId = Auth::id();
			$user = User::find($userId);
			$domicilio = Domicilio::where('user',$userId)->get()->first();
			if(empty($domicilio)){
				$domicilio =new Domicilio;
				$domicilio->user = $userId;
				$domicilio->save();
			}
			$car = 1;
			// dd($Carrito);
			$pagina = 'pasarela_pago';

		return view('cart.pasarelaPago',compact('productos','user','car','domicilio','envio','pagina'));
	}

	public function pasarelaPagoPayPal(Request $request){
		$envio = session('envio');
		$Carrito = session('carrito');
		
			foreach($Carrito  as $c){
				$producto =  PFProducto::find($c['id']);
				$producto->catidad_total = $c['existencias'];
				$productos[]=$producto;
			}
			$userId = Auth::id();
			$user = User::find($userId);
			$domicilio = Domicilio::where('user',$userId)->get()->first();
			if(empty($domicilio)){
				$domicilio =new Domicilio;
				$domicilio->user = $userId;
				$domicilio->save();
			}
			$car = 1;
			// dd($Carrito);
			$pagina = 'pasarela_pago';

		return view('cart.pasarelaPagoPayPal',compact('productos','user','car','domicilio','envio','pagina'));
	}

	// funciones para el usuario y actualizaciones
	public function update_d_envio(Request $request){

		$domicilio = Domicilio::where('user',$request->id)->get()->first();
		$campo = $request->campo ;
		$domicilio->$campo= $request->valor;
		if($domicilio->save()){
			return response()->json(['success' => true, 'mensaje' => 'Campo actualizado']);
		}else{
			return response()->json(['success' => false, 'mensaje' => 'Error al actualizar campo']);
		}
	}

	public function update_perfil(Request $request){

		$domicilio = User::where('id',$request->id)->get()->first();
		$campo = $request->campo ;
		$domicilio->$campo= $request->valor;
		if($domicilio->save()){
			return response()->json(['success' => true, 'mensaje' => 'Campo actualizado']);
		}else{
			return response()->json(['success' => false, 'mensaje' => 'Error al actualizar campo']);
		}
	}

	


}
