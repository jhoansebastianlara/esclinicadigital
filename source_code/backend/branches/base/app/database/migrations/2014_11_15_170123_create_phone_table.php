<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneTable extends Migration {
	var $tableName = 'phone';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("phoneId");

			//se agrega la FK referente a la tabla "entity"
			$table->integer("entityId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("entityId");

			$table->string("number",20)
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
