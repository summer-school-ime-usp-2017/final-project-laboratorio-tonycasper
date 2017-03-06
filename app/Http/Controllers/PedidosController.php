<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedidos;

class PedidosController extends Controller
{
        
        public function index()
        {
            $pedidos = pedidos::all();

            return view('pedidos.index',compact('pedidos'));
        }

        public function show(Pedidos $pedido){
            return view('pedidos.show',compact('pedido'));
        }
}
