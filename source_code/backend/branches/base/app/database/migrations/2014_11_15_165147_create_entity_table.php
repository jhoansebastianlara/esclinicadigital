<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityTable extends Migration {
	var $tableName = 'entity';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("entityId");

			$table->string("table",45)
                  ->nullable()
                  ->default(null);

            $table->string("tableId",45)
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
