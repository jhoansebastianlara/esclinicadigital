<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateTable extends Migration {

	var $tableName = 'state';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table)
		{
			$table->increments("stateId");

			// agregando la FK referente a la tabla "country"
			$table->integer("countryId")
				  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("countryId");

			$table->string("name", 100)
				  ->nullable()
                  ->default(null);

			$table->string("code", 5)
				  ->nullable()
                  ->default(null);

			$table->string("ADM1Code", 5)
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
	public function down() {
		Schema::dropIfExists($this->tableName);
	}

}
