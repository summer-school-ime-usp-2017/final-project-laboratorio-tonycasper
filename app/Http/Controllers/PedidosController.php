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
            $exames = $this->exames;
            return view('pedidos.index',compact('pedidos'));
        }

        public function show($index){
            $exame = $this->exames[$index];
            return view('pedidos.show',compact('pedido'));
        }
}
