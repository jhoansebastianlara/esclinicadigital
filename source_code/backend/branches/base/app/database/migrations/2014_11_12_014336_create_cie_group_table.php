<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCieGroupTable extends Migration {
	var $tableName = 'cie_group';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("cieGroupId");

			//se agrega la FK referente a la tabla "country"
			$table->integer("countryId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("countryId");

			$table->string("name",200)
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
