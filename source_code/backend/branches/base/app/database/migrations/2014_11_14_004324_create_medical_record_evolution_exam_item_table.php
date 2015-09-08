<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordEvolutionExamItemTable extends Migration {
	var $tableName = 'medical_r_e_e_i';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("medicalREEIId");

			//se agrega la FK referente a la tabla "exam_item"
			$table->integer("examItemId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("examItemId");

			// se agrega la FK referente a la tabla "medical_record_evolution_exam"
			$table->integer("medicalRecordEvolutionExamId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicalRecordEvolutionExamId");

			$table->string("value",45)
            	  ->nullable()
            	  ->default(null);	

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
