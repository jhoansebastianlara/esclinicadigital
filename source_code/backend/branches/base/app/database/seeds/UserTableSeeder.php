<?php

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('user')->truncate();
 		
 		// librería para crear datos de prueba reales.
 		// https://github.com/fzaninotto/Faker
 		$faker = Faker\Factory::create();

		$users = [
			[
				"name" => $faker->name,
				"lastname" => $faker->lastName,
				"username" => 'juan',
				"password" => Hash::make("perez"),
				"identificationTypeId" => "1",
				"identificationNumber" => "1094999123",
				"email" => "juan@mobigeek.co",
				"birthdate" => "1991-04-02",
				"gender" => "m",
				"rememberToken" => null,
			],
			[
				"name" => $faker->name,
				"lastname" => $faker->lastName,
				"username" => 'pedro',
				"password" => Hash::make("gomez"),
				"identificationTypeId" => "2",
				"identificationNumber" => "10945548874",
				"email" => "pedro@mobigeek.co",
				"birthdate" => "1980-03-24",
				"gender" => "m",
				"rememberToken" => null,
			]
		];

		foreach ($users as $user) {
			User::create($user);
		}
    }
 
}