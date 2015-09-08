<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordEvolutionTable extends Migration {
	var $tableName = 'medical_record_evolution';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function (Blueprint $table) {
			$table->increments("medicalRecordEvolutionId");

			//se agrega la FK referente a la tabla "medical_record"
			$table->integer("medicalRecordId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicalRecordId");

			//se agrega la FK referente a la tabla "user"
			$table->integer("userId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("userId");

			//se agrega la FK referente a la tabla "external_cause"
			$table->integer("externalCauseId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("externalCauseId");

			//se agrega la FK referente a la tabla "purpose_appointment"
			$table->integer("purposeAppointmentId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("purposeAppointmentId");

			$table->dateTime("date")
            	  ->nullable()
            	  ->default(null);

            $table->text("evolutionNumber")
            	  ->nullable()
            	  ->default(null);

            $table->text("purpose")
            	  ->nullable()
            	  ->default(null);

            $table->text("conduct")
            	  ->nullable()
            	  ->default(null);

            $table->enum("principalDiagnosticType", array('1', '2', '3'))
            	  ->nullabe()
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
