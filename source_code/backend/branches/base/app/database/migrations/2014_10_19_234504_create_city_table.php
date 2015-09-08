<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration {

	var $tableName = 'city';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table)
		{
			$table->increments("cityId");

            // agregando la FK referente a la tabla "country"
			$table->integer("countryId")
				  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("countryId");

			// agregando la FK referente a la tabla "state"
			$table->integer("stateId")
				  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("stateId");

			$table->string("name", 100)
				  ->nullable()
                  ->default(null);

			$table->string("latitude", 50)
				  ->nullable()
                  ->default(null);

			$table->string("longitude", 50)
				  ->nullable()
                  ->default(null);

			$table->string("timeZone", 10)
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
