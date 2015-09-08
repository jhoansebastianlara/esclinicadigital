<?php

class ExamItemTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('exam_item')->truncate();
 		
 		/**
 		*	Items de los examenes
 		*/
		$examItemList = [
			[
				"examId" => '1',
				"userSpecialityId" => '',
				"name" => 'Tensión Arterial',
				"abbreviation" => 'TA',
				"type" => 'text',
				"status" => 'active',
				"technicalName" => 'bloodPressure',
				"maxlength" => '20',
			],
			[
				"examId" => '1',
				"userSpecialityId" => '',
				"name" => 'Frecuencia Cardiaca',
				"abbreviation" => 'FC',
				"type" => 'text',
				"status" => 'active',
				"technicalName" => 'heartRate',
				"maxlength" => '20',
			],
			[
				"examId" => '1',
				"userSpecialityId" => '',
				"name" => 'Frecuencia Respiratoria',
				"abbreviation" => 'FR',
				"type" => 'text',
				"status" => 'active',
				"technicalName" => 'respiration',
				"maxlength" => '20',
			],
			[
				"examId" => '1',
				"userSpecialityId" => '',
				"name" => 'Temperatura',
				"abbreviation" => 'T*',
				"type" => 'text',
				"status" => 'active',
				"technicalName" => 'temperature',
				"maxlength" => '20',
			],
			[
				"examId" => '1',
				"userSpecialityId" => '',
				"name" => 'SO2',
				"abbreviation" => 'SO2',
				"type" => 'text',
				"status" => 'active',
				"technicalName" => 'so2',
				"maxlength" => '20',
			],
			[
				"examId" => '1',
				"userSpecialityId" => '',
				"name" => 'Peso',
				"abbreviation" => 'Peso en kilogramos',
				"type" => 'tel',
				"status" => 'active',
				"technicalName" => 'weight',
				"maxlength" => '10',
				"onChageEvent" => "calculateBodyMassIndex()",
			],
			[
				"examId" => '1',
				"userSpecialityId" => '',
				"name" => 'Talla en metros',
				"abbreviation" => 'Talla (Mts)',
				"type" => 'tel',
				"status" => 'active',
				"technicalName" => 'height',
				"maxlength" => '10',
				"onChageEvent" => "calculateBodyMassIndex()",
			], 
			[
				"examId" => '1',
				"userSpecialityId" => '',
				"name" => 'Índice de masa corporal',
				"abbreviation" => 'IMC',
				"type" => 'text',
				"status" => 'active',
				"technicalName" => 'bmi',
				"maxlength" => '10',
				"disabled" => 'true',				
			],
		];

		foreach ($examItemList as $examItem) {
			ExamItem::create($examItem);
		}
    }
 
}