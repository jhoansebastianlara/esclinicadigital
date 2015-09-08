<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipTable extends Migration {
	var $tableName = 'relationship';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table){
			$table->increments('relationshipId');

			// agregando la FK referente a la tabla "country"
			$table->integer("countryId")
				  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("countryId");

			$table->string("name", 100)
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

