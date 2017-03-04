<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicosController extends Controller
{

    private $medicos = array(
        'Andre', 'Daniel',
        'Albertinho', 'Jonastahanson'
      );

     public function index()
    {
      $medicos = $this->medicos;
      
      return view('medicos.index', compact('medicos'));
    }

    public function show($index){
        
        $medico = $this->medicos[$index];

        return view ('medicos.show',compact('medico'));
    }
}
