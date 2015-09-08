<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $currentAppEnvirontment = App::environment();
		// if ($currentAppEnvirontment === 'production') {
		// 	exit('I just stopped you getting fired. Love Phil - Current environment: "' . $currentAppEnvirontment . '"');
		// }

		Eloquent::unguard();

        $truncate = [
            'user',
            'patient',
            'identification_type',
            'country',
            'state',
            'city',
            'marital_status',
            'relationship',
            'exam',
            'medical_history',
            'exam_type',
            'exam_item',
            'speciality',
            'external_cause',
            'purpose_appointment',
            'cie_category',
        ];

        // se desactivan las relaciones entre las tablas para que el truncado se haga sin problemas.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        foreach ($truncate as $table) {
            DB::table($table)->truncate();
        }

        // se reactivan las relaciones entre las tablas.
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Se llaman los "seeders" para poblar la db.
        $this->call('UserTableSeeder');
        $this->call('PatientTableSeeder');

        $this->call('CountryTableSeeder');
        $this->call('StateTableSeeder');
        $this->call('CityTableSeeder');
        
        $this->call('IdentificationTypeTableSeeder');
        $this->call('MaritalStatusTableSeeder');
        $this->call('RelationshipTableSeeder');
        $this->call('ExamTableSeeder');
        $this->call('ExamItemTableSeeder');

        $this->call('medicalHistoryTableSeeder');
        $this->call('ExamTypeTableSeeder');

        $this->call('SpecialityTableSeeder');
        $this->call('ExternalCauseTableSeeder');
        $this->call('PurposeAppointmentTableSeeder');
        $this->call('CieCategoryTableSeeder');
	}

}
