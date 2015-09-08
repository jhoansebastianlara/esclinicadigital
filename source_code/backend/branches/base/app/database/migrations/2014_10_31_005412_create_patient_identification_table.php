<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientIdentificationTable extends Migration {
	var $tableName = 'patient_identification';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table){
			$table->increments('patientIdentificationId');

			//Se agrega la FK referente a la tabla "identificationType"
			$table->integer("identificationTypeId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("identificationTypeId");

            //Se agrega la FK referente a la tabla "patient"
            $table->integer("patientId")
                  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("patientId");

            $table->string("identificationNumber",25)
                  ->nullable()
                  ->default(null);

            $table->tinyInteger('isCurrent')
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
