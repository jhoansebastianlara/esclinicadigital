<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalHistoryItemTable extends Migration {
	var $tableName = 'medical_history_item';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("medicalHistoryItemId");

			//se agrega la FK referente a la tabla "medical_history"
			$table->integer("medicalHistoryId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("medicalHistoryId");

			$table->string("name",255)
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
