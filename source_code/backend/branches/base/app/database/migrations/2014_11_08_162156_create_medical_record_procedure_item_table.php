<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordProcedureItemTable extends Migration {
	var $tableName = 'medical_record_procedure_item';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("medicalRecordProcedureItemId");

			//se agrega la FK referente a la tabla "medical_record_procedure"
			$table->integer("medicalRecordProcedureId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicalRecordProcedureId");

			// se agrega la FK referente a la tabla "rocedure"
			$table->integer("procedureId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("procedureId");

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
