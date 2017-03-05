<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamesController extends Controller
{

        private $exames = array(
            'um exame','doies','mais um'
        );
        
        public function index()
        {
            $exames = $this->exames;
            return view('exames.index',compact('exames'));
        }

        public function show($index){
            $exame = $this->exames[$index];
            return view('exames.show',compact('exame'));
        }
        
    }
