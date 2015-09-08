<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordProcedureTable extends Migration {
	var $tableName = 'medical_record_procedure';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("medicalRecordProcedureId");

			//se agrega la FK referente a la tabla "medical_record"
			$table->integer("medicalRecordId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicalRecordId");

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
