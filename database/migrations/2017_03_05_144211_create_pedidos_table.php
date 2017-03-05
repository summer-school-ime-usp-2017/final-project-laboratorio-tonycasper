<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
	
	/**
	* Run the migrations.
	     *
	     * @return void
	     */
	    public function up()
	    {
		Schema::create('pedidos', function (Blueprint $table) {
			$table->increments('id');
			$table->string('paciente', 100);
			$table->String('medico',100);
			$table->string('exames', 200);
			$table->timestamps();
        
      //      $table->foreign('paciente_id')->
 //                   references('id')->
  //                  on('pacientes')->
  //                  onDelete('cascade');
        
  //         $table->foreign('medicos_id')->
   //                 references('id')->
  //                  on('medicos')->
    //                onDelete('cascade');
		});
	}
	
	
	/**
	* Reverse the migrations.
	     *
	     * @return void
	     */
	    public function down()
	    {
		Schema::dropIfExists('pedidos');
	}
}
