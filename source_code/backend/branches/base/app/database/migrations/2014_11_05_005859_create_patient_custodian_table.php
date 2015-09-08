<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientCustodianTable extends Migration {
	var $tableName = 'patient_custodian';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table){
			$table->increments('patientCustodianId');

			//Se agrega la FK referente a la tabla "custodian"
			$table->integer("custodianId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("custodianId");

            //Se agrega la FK referente a la tabla "patient"
            $table->integer("patientId")
                  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("patientId");

            $table->timestamps();
        	$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists($this->tableName);
	}

}
