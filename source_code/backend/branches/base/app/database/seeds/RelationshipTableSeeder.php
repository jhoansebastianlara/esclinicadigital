<?php

class RelationshipTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('relationship')->truncate();
 		
 		/**
 		*	Estados civiles para Colombia ("countryId" => 53)
 		*/
		$relatioshipList = [
			[
				"countryId" => 53,
				"name" => 'Padre / Madre',
			],
			[
				"countryId" => 53,
				"name" => 'Hijo',
			],
			[
				"countryId" => 53,
				"name" => 'Cónyugue',
			],
			[
				"countryId" => 53,
				"name" => 'Suegro/a',
			],
			[
				"countryId" => 53,
				"name" => 'Yerno / Nuera',
			],
			[
				"countryId" => 53,
				"name" => 'Abuelo/a',
			],
			[
				"countryId" => 53,
				"name" => 'Nieto/a',
			],
			[
				"countryId" => 53,
				"name" => 'Hermano/a',
			],
			[
				"countryId" => 53,
				"name" => 'Cuñado/a',
			],
			[
				"countryId" => 53,
				"name" => 'Otro',
			],

		];

		foreach ($relatioshipList as $relationship) {
			Relationship::create($relationship);
		}
    }
 
}