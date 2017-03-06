<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exames extends Model
{
	protected $fillable = [
	      'nome', 'metodo'
	    ];
}
