<?php

class PurposeAppointmentTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('purpose_appointment')->truncate();
 		
 		/**
 		*	Tipos de examen
 		*/
		$purposeAppointmentList = [
			[
				"name" => 'Atención del parto (puerperio)',
			],
			[
				"name" => 'Atención del recién nacido',
			],
			[
				"name" => 'Atención en planificación familiar',
			],
			[
				"name" => 'Detección de alteraciones de crecimiento y desarrollo del menor de diez años',
			],
			[
				"name" => 'Detección de alteración del desarrollo joven',
			],
			[
				"name" => 'Detección de alteraciones del embarazo',
			],
			[
				"name" => 'Detección de alteraciones del adulto',
			],
			[
				"name" => 'Detección de alteraciones de agudeza visua',
			],
			[
				"name" => 'Detección de enfermedad profesional',
			],
			[
				"name" => 'No aplica',
			],
		];

		foreach ($purposeAppointmentList as $purposeAppointment) {
			PurposeAppointment::create($purposeAppointment);
		}
    }
}