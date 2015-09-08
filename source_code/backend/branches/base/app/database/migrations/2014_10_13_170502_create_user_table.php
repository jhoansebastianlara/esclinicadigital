<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {
	var $tableName = 'user';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create($this->tableName, function(Blueprint $table) {
			//$table->engine = 'InnoDB';

			$table->increments("userId");

			// agregando la FK referente a la tabla "identificationType"
			$table->integer("identificationTypeId")
				  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("identificationTypeId");
            /*$table->foreign('identificationTypeId')
            	  ->references('identificationTypeId')
            	  ->on('identificationType');*/

			$table->string("name", 100)
				  ->nullable()
                  ->default(null);

			$table->string("lastname", 100)
				  ->nullable()
                  ->default(null);


			$table->string("username", 100)
				  ->unique()
				  ->nullable()
                  ->default(null);

			$table->string("password", 100)
				  ->nullable()
                  ->default(null);

			$table->string("identificationNumber", 30)
				  ->nullable()
                  ->default(null);

			$table->string("email", 120)->nullable()
				  ->nullable()
                  ->default(null);

			$table->date("birthdate")
				  ->nullable()
                  ->default(null);

			$table->enum('gender', array('m', 'f', 'o'))
				  ->nullable()
                  ->default(null);

			$table->string("rememberToken")
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
