<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function procesarPagoPayPal(Request $request){
        $userId = Auth::id();
        $usuario = User::find($userId);
        $domicilio = Domicilio::where('user',$userId )->get()->first();

        $totalPrice = $request->total_price;


        // Formatear el número a formato de moneda con separadores de miles y decimales
        $formattedTotalPrice = number_format($totalPrice, 2, '', '');
       
        $responseData = json_decode($response->getBody(), true);
        $Carrito = session('carrito');
        $envio = session('envio');
        $Pedido = new Pedido;
        $Pedido->uid= $responseData['id'];
        $Pedido->estatus= 1;
        $Pedido->domicilio= $domicilio->id;
        $Pedido->cantidad= $request->cant_prods;
        $Pedido->importe= $request->total_price;
        $Pedido->iva= 0;
        $Pedido->total= $request->total_price;
        $Pedido->envio= $envio;
        $Pedido->usuario= $userId;
        $Pedido->data= json_encode($Carrito);
        foreach($Carrito  as $c){
            $producto =  PFProducto::find($c['id']);
            $producto->existencias = $producto->existencias - $c['existencias'];
            $producto->save();
        }
        $Pedido->save();
        session()->forget('carrito');
        session()->forget('envio');
    
        return response()->json(['success' => true, 'mensaje' => $responseData]);
        
        dd($responseData);

    // Procesar la respuesta de Conekta y redirigir o mostrar resultados

    }  
}
