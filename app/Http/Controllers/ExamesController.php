<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamesController extends Controller
{
     public function index()
    {  
        $exames = array(
            'um exame','doies','mais um'
        );

        return view('exames.index',compact('exames'));
    }
}
