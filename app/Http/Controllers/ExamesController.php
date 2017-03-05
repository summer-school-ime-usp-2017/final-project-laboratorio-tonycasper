<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exames;

class ExamesController extends Controller
{

        public function index()
        {
            $exames = exames::all();
            return view('exames.index',compact('exames'));
        }

        public function show(Exames $exame){

            return view('exames.show',compact('exame'));
        }
        
    }
