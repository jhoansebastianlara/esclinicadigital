<?php

class MedicalHistoryTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('medical_history')->truncate();
 		
		$medicalHistorys = [
			[
				"name" => 'Gineco-Obstétricos',
			],
			[
				"name" => 'Alergias',
			],
			[
				"name" => 'Toxicos',
			],
			[
				"name" => 'Quirúrgicos',
			],
			[
				"name" => 'Enfermedades',
			]
		];

		foreach ($medicalHistorys as $medicalHistory) {
			MedicalHistory::create($medicalHistory);
		}
    }
 
}