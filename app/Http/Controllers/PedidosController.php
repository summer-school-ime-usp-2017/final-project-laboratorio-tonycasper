<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    
        private $pedidos = array(
            'um pedido','doies','mais um = 3'
        );
        
        public function index()
        {
            $pedidos = $this->pedidos;
            return view('pedidos.index',compact('pedidos'));
        }

        public function show($index){
            $pedido = $this->pedidos[$index];
            return view('pedidos.show',compact('pedido'));
        }
}
