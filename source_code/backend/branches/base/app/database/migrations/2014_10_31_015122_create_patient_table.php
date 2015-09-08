<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration {
	var $tableName = 'patient';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("patientId");

			//se agrega la FK referente a la tabla "identificationType"
			$table->integer("identificationTypeId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("identificationTypeId");

			// se agrega la FK referente a la tabla "maritalStatus"
			$table->integer("maritalStatusId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("maritalStatusId");

			$table->string("name",45)
                  ->nullable()
                  ->default(null);

            $table->string("lastname",45)
                  ->nullable()
                  ->default(null);
            
            $table->string("identificationNumber",25)
                  ->nullable()
                  ->default(null);

            $table->string("placebirth",200)
                  ->nullable()
                  ->default(null);

            $table->date("birthdate")
            	  ->nullable()
            	  ->default(null);

            $table->enum("gender", array('m', 'f'))
            	  ->nullabe()
            	  ->default(null);

            $table->string("occupation",200)
            	  ->nullable()
            	  ->default(null);
            
            $table->string("residenceCity",200)
            	  ->nullable()
            	  ->default(null);

            $table->string("address",100)
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
