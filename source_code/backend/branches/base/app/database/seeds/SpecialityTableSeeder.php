<?php

class SpecialityTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('speciality')->truncate();
 		
 		/**
 		*	Tipos de examen
 		*/
		$specialityList = [
			[
				"name" => 'Ginecología',
			],
		];

		foreach ($specialityList as $speciality) {
			Speciality::create($speciality);
		}
    }
 
}