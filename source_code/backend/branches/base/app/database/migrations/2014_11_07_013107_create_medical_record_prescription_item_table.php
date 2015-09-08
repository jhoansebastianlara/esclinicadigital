<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordPrescriptionItemTable extends Migration {
	var $tableName = 'medical_r_p_i';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("medicalRPIId");

			//se agrega la FK referente a la tabla "medical_record_prescription"
			$table->integer("medicalRecordPrescriptionId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicalRecordPrescriptionId");

			// se agrega la FK referente a la tabla "medicine"
			$table->integer("medicineId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicineId");

			$table->string("amount",45)
                  ->nullable()
                  ->default(null);

            $table->text("description")
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
