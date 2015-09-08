<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCieCategorySpecialityTable extends Migration {
	var $tableName = 'cie_category_speciality';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("cieCategorySpecialityId");

			$table->integer("cieCategoryId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("cieCategoryId");

			$table->integer("specialityId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("specialityId");

			$table->integer("userId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("userId");

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
