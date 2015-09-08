<?php

class ExamTypeTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('exam_type')->truncate();
 		
 		/**
 		*	Tipos de examen
 		*/
		$examTypeList = [
			[
				"name" => 'Examen Físico',
			],
		];

		foreach ($examTypeList as $examType) {
			ExamType::create($examType);
		}
    }
}