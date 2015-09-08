<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordEvolutionCieTable extends Migration {
	var $tableName = 'medical_record_evolution_cie';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("medicalRecordEvolutionCieId");

			//se agrega la FK referente a la tabla "cei"
			$table->integer("ceiId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("ceiId");

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
