<?php

class IdentificationTypeTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('identification_type')->truncate();
 		
 		/**
 		*	Topos de identificaciòn para Colombia ("countryId" => 53)
 		*/
		$identificationTypeList = [
			[
				"countryId" => 53,
				"countryKey" => '',
				"name" => 'Cédula ciudadanía',
				"abbeviation" => 'CC',
			],[
				"countryId" => 53,
				"countryKey" => '',
				"name" => 'Cédula de extranjería',
				"abbeviation" => 'CE',
			],[
				"countryId" => 53,
				"countryKey" => '',
				"name" => 'Pasaporte',
				"abbeviation" => 'PA',
			],[
				"countryId" => 53,
				"countryKey" => '',
				"name" => 'Registro civil',
				"abbeviation" => 'RC',
			],[
				"countryId" => 53,
				"countryKey" => '',
				"name" => 'Tarjeta de identidad',
				"abbeviation" => 'TI',
			],[
				"countryId" => 53,
				"countryKey" => '',
				"name" => 'Adulto sin identificación',
				"abbeviation" => 'AS',
			],[
				"countryId" => 53,
				"countryKey" => '',
				"name" => 'Menor sin identificación',
				"abbeviation" => 'MS',
			],

			/*
			[
				"countryId" => 53,
				"countryKey" => '12',
				"name" => 'Tarjeta de identidad',
				"abbeviation" => 'TI',
			],[
				"countryId" => 53,
				"countryKey" => '13',
				"name" => 'Cédula de cuidadanía',
				"abbeviation" => 'CC',
			],[
				"countryId" => 53,
				"countryKey" => '21',
				"name" => 'Tarjeta de extranjería',
				"abbeviation" => 'TE',
			],[
				"countryId" => 53,
				"countryKey" => '22',
				"name" => 'Cédula de extranjería',
				"abbeviation" => 'CE',
			],[
				"countryId" => 53,
				"countryKey" => '31',
				"name" => 'NIT',
				"abbeviation" => 'NIT',
			],[
				"countryId" => 53,
				"countryKey" => '41',
				"name" => 'Pasaporte',
				"abbeviation" => 'PA',
			],[
				"countryId" => 53,
				"countryKey" => '42',
				"name" => 'Documento de identificación extranjero',
				"abbeviation" => 'DIE',
			],[
				"countryId" => 53,
				"countryKey" => '43',
				"name" => 'Sin identificación del exterior o para uso definido por la DIAN',
				"abbeviation" => '',
			],*/

		];

		foreach ($identificationTypeList as $identificationType) {
			IdentificationType::create($identificationType);
		}
    }
 
}