<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRipsTable extends Migration {
	var $tableName = 'rips';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("ripsId");

			//se agrega la FK referente a la tabla "medical_record_evolution"
			$table->integer("medicalRecordEvolutionId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicalRecordEvolutionId");

			$table->enum("isFirstTime", array('y', 'n'))
            	  ->nullabe()
            	  ->default(null);

            $table->integer("externalCauseId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("externalCauseId");

			$table->integer("cieId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("cieId");

			$table->integer("purposeAppointmentId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("purposeAppointmentId");
			
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
