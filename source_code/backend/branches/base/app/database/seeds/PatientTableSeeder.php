<?php

class PatientTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('patient')->truncate();
 		
 		/**
 		*	Tipos de examen
 		*/
		$patientList = [
			[
				"identificationTypeId" => '2',
				"maritalStatusId" => '5',
				"name" => 'Juana',
				"lastname" => 'Lopera',
				"identificationNumber" => '1094999887',
				"placebirth" => 'Montenegro, Quindío, Colombia',
				"birthdate" => '1990-01-23',
				"gender" => 'f',
				"occupation" => 'Psicologa',
				"residenceCity" => 'Armenia, Quindío, Colombia',
				"address" => 'Cra 12 Nro 23-41',
			],
			[
				"identificationTypeId" => '1',
				"maritalStatusId" => '2',
				"name" => 'Adriana',
				"lastname" => 'Martinez',
				"identificationNumber" => '745841',
				"placebirth" => 'Calarca, Quindío, Colombia',
				"birthdate" => '1990-01-23',
				"gender" => 'f',
				"occupation" => 'Estudiante',
				"residenceCity" => 'NY, NY, USA',
				"address" => '123 main street',
			],
		];

		foreach ($patientList as $patient) {
			Patient::create($patient);
		}
    }
 
}