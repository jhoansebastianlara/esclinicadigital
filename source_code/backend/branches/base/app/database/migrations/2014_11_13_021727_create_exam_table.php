<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamTable extends Migration {
	var $tableName = 'exam';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) { 
			$table->increments("examId");

			//se agrega la FK referente a la tabla "speciality"
			$table->integer("specialityId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("specialityId");

			// se agrega la FK referente a la tabla "exam_type"
			$table->integer("examTypeId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("examTypeId");

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
