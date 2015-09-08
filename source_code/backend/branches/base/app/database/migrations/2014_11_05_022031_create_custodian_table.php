<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustodianTable extends Migration {

	var $tableName = 'custodian';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments("custodianId");

            // agregando la FK referente a la tabla "relationship"
			$table->integer("relationshipId")
				  ->nullable()
                  ->default(null)
                  ->unsigned();
            $table->index("relationshipId");

            //se agrega la FK referente a la tabla "identificationType"
			$table->integer("identificationTypeId")
				  ->nullable()
				  ->default(null)
				  ->unsigned();
			$table->index("identificationTypeId");

			$table->string("identificationNumber",25)
                  ->nullable()
                  ->default(null);

			$table->string("fullName",100)
                  ->nullable()
                  ->default(null);

    	  	$table->string("phone",30)
                  ->nullable()
                  ->default(null);

          	$table->string("email",100)
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
