<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacientes;

class PacientesController extends Controller
{   
        
        public function index()
        {
            $pacientes = pacientes::all();

            return view('pacientes.index',compact('pacientes'));
        }

        public function show(Pacientes $paciente){
       
            return view('pacientes.show',compact('paciente')); 
}
}
