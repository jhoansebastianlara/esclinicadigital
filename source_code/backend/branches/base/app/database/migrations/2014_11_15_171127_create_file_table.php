<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration {
	var $tableName = 'file';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("fileId");

			//se agrega la FK referente a la tabla "entity"
			$table->integer("entityId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("entityId");

			$table->integer("fkItem")
				  ->nullable()
				  ->default(null);

			$table->string("originalName",300)
                  ->nullable()
                  ->default(null);

            $table->string("rename",50)
                  ->nullable()
                  ->default(null);

            $table->string("path",200)
                  ->nullable()
                  ->default(null);

            $table->string("extension",10)
                  ->nullable()
                  ->default(null);

            $table->string("name",300)
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
