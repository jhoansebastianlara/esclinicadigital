<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordPrescriptionTable extends Migration {
	var $tableName = 'medical_record_prescription';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("medicalRecordPrescriptionId");

			//se agrega la FK referente a la tabla "medical_record_evolution
			$table->integer("medicalRecordEvolutionId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicalRecordEvolutionId");

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
