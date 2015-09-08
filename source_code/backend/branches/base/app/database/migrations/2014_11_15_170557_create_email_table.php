<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTable extends Migration {
	var $tableName = 'email';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("emailId");

			//se agrega la FK referente a la tabla "entity"
			$table->integer("entityId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("entityId");

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
