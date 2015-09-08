<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaritalStatusTable extends Migration {
	var $tableName = 'marital_status';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table){
			$table->increments('maritalStatusId');

			// agregando la FK referente a la tabla "country"
			$table->integer("countryId")
				  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("countryId");

			$table->string("name",25)
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
