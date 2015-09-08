<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSpecialityTable extends Migration {
	var $tableName = 'user_speciality';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("userSpecialityId");

			// se agrega la FK referente a la tabla "user"
			$table->integer("userId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("userId");

			// se agrega la FK referente a la tabla "speciality"
			$table->integer("specialityId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("specialityId");

			$table->string("profesionalPassword",100)
            	  ->nullable()
            	  ->default(null);
            
            $table->string("medicalIdentification",25)
            	  ->nullable()
            	  ->default(null);

            $table->string("signature",250)
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
