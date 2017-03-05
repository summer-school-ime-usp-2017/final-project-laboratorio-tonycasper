<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientesController extends Controller
{   
        private $pacientes = array(
            'um pedido','doies','mais um = 3'
        );
        
        public function index()
        {
            $pacientes = $this->pacientes;
            return view('pacientes.index',compact('pacientes'));
        }

        public function show($index){
            $paciente = $this->pacientes[$index];
            return view('pacientes.show',compact('paciente')); 
}
}
