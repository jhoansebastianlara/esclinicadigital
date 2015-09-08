<?php

class MaritalStatusTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('marital_status')->truncate();
 		
 		/**
 		*	Estados civiles para Colombia ("countryId" => 53)
 		*/
		$maritalStatusList = [
			[
				"countryId" => 53,
				"name" => 'Soltero/a',
			],
			[
				"countryId" => 53,
				"name" => 'Casado/a',
			],
			[
				"countryId" => 53,
				"name" => 'Viudo/a',
			],
			[
				"countryId" => 53,
				"name" => 'Divorciado/a',
			],
			[
				"countryId" => 53,
				"name" => 'Unión libre',
			],
			[
				"countryId" => 53,
				"name" => 'Otro',
			],

		];

		foreach ($maritalStatusList as $maritalStatus) {
			MaritalStatus::create($maritalStatus);
		}
    }
 
}