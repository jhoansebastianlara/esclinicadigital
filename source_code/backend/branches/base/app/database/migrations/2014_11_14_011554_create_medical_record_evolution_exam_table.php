<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordEvolutionExamTable extends Migration {
	var $tableName = 'medical_record_evolution_exam';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("medicalRecordEvolutionExamId");

			//se agrega la FK referente a la tabla "medical_record_evolution"
			$table->integer("medicalRecordEvolutionId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicalRecordEvolutionId");

			// se agrega la FK referente a la tabla "exam"
			$table->integer("examId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("examId");
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
