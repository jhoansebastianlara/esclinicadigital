<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicineTable extends Migration {
	var $tableName = 'medicine';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("medicineId");

			$table->string("name",45)
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
