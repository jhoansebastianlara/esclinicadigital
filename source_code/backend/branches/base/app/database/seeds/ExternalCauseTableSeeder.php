<?php

class ExternalCauseTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('external_cause')->truncate();
 		
 		/**
 		*	Tipos de examen
 		*/
		$externalCauseList = [
			[
				"name" => 'Accidente de trabajo',
			],
			[
				"name" => 'Accidente de tránsito',
			],
			[
				"name" => 'Accidente rábico',
			],
			[
				"name" => 'Accidente ofídico',
			],
				[
				"name" => 'Otro tipo de accidente',
			],
			[
				"name" => 'Evento catastrófico',
			],
			[
				"name" => 'Lesión por agresión',
			],
			[
				"name" => 'Lesión auto infligida',
			],
			[
				"name" => 'Sospecha de maltrato físico',
			],
			[
				"name" => 'Sospecha de abuso sexual',
			],
			[
				"name" => 'Sospecha de violencia sexual',
			],
			[
				"name" => 'Sospecha de maltrato emocional',
			],
			[
				"name" => 'Enfermedad general',
			],
			[
				"name" => ' Enfermedad profesional',
			],
			[
				"name" => 'Otra',
			],
		];

		foreach ($externalCauseList as $externalCause) {
			ExternalCause::create($externalCause);
		}
    }
}