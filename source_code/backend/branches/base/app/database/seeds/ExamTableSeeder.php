<?php

class ExamTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('exam')->truncate();
 		
 		/**
 		*	Tipos de examen
 		*/
		$examList = [
			[
				"specialityId" => '1', // 1: ginecología
				"examTypeId" => '1', // 1: examen físico
			],
		];

		foreach ($examList as $exam) {
			Exam::create($exam);
		}
    }
 
}