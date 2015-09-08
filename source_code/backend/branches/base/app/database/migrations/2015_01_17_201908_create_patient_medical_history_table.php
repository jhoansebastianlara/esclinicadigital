<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientMedicalHistoryTable extends Migration {
	var $tableName = 'patient_medical_history';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table){
			$table->increments('patientMedicalHistoryId');

			//Se agrega la FK referente a la tabla "patient"
			$table->integer("patientId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("patientId");

            //Se agrega la FK referente a la tabla "medical_history"
            $table->integer("medicalHistoryId")
                  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("medicalHistoryId");

            //Se agrega la FK referente a la tabla "medical_history_item"
            $table->integer("medicalHistoryItemId")
                  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("medicalHistoryItemId");

            $table->string("description",45)
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
