<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicos;

class MedicosController extends Controller
{
     public function index()
    {
      $medicos = medicos::all();
      
      return view('medicos.index', compact('medicos'));
    }

    public function show(Medicos $medico){
    
        return view ('medicos.show',compact('medico'));
    }
}
