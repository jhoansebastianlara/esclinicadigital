<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCieTable extends Migration {
	var $tableName = 'cie';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("cieId");

			$table->integer("cieCategoryId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("cieCategoryId");

			$table->string("code", 10)
                  ->nullable()
                  ->default(null);

			$table->string("name", 200)
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
