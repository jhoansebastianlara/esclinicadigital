<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration {

	var $tableName = 'country';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table)
		{
			$table->increments("countryId");

			$table->string("name", 255)
				  ->nullable()
                  ->default(null);

			$table->string("FIPS104", 5)
				  ->nullable()
                  ->default(null);

			$table->string("ISO2", 5)
				  ->nullable()
                  ->default(null);

            $table->string("ISO3", 5)
				  ->nullable()
                  ->default(null);

            $table->string("ISON", 5)
				  ->nullable()
                  ->default(null);

            $table->string("internet", 5)
				  ->nullable()
                  ->default(null);

			$table->string("capital", 255)
				  ->nullable()
                  ->default(null);

			$table->string("mapReference", 100)
				  ->nullable()
                  ->default(null);

			$table->string("nationalitySingular", 100)
				  ->nullable()
                  ->default(null);

			$table->string("nationalityPlural", 100)
				  ->nullable()
                  ->default(null);

			$table->string("currency", 100)
				  ->nullable()
                  ->default(null);

			$table->string("currencyCode", 5)
				  ->nullable()
                  ->default(null);

			$table->integer("population")
				  ->nullable()
                  ->default(null);

			$table->string("title", 100)
				  ->nullable()
                  ->default(null);

			$table->string("comment", 300)
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
