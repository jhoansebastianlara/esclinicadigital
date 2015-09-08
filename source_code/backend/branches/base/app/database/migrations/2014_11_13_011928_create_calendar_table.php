<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration {
	var $tableName = 'calendar';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("calendarId");

			//se agrega la FK referente a la tabla "user"
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
