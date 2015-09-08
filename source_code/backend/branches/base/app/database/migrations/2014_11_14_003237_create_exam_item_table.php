<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamItemTable extends Migration {
	var $tableName = 'exam_item';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("examItemId");

			//se agrega la FK referente a la tabla "exam"
			$table->integer("examId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("examId");

			// se agrega la FK referente a la tabla "user_speciality"
			$table->integer("userSpecialityId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("userSpecialityId");

			$table->string("name", 100)
                        ->nullable()
                        ->default(null);

                  $table->string("abbreviation", 20)
                        ->nullable()
                        ->default(null);

                  $table->enum("type", array(
                  					'text', 
                  					'password', 
                  					'submit', 
                  					'radio', 
                  					'checkbox', 
                  					'button', 
                  					'color', 
                  					'date', 
                  					'datetime', 
                  					'datetime-local', 
                  					'email', 
                  					'month', 
                  					'number', 
                  					'range', 
                  					'search', 
                  					'tel', 
                  					'time', 
                  					'url', 
                  					'week'
                  				)
                 				)
                  	  ->nullabe()
                  	  ->default(null);


                  $table->enum("status", array('active','inactive'))
                  	  ->nullabe()
                  	  ->default(null);

                  $table->string("technicalName", 200)
                        ->nullable()
                        ->default(null);

                  $table->integer("maxlength")
                        ->nullable()
                        ->default(null);

                 	$table->string("disabled", 45)
                        ->nullable()
                        ->default(null);

                  $table->string("onChageEvent", 200)
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
