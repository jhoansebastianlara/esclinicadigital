<?php

class CityTableSeeder extends Seeder {
 
    public function run() {
        DB::table('city')->truncate();
 		

 		// solo estan las ciudades de Colombia ("countryId" => 53)
 		$cities = [
 			[	
				"cityId" => 5131,
				"countryId" => 53,
				"stateId" => 1398,
				"name" => "Barrancas",
				"latitude" => "8.254",
				"longitude" => "-72.485",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3617,
				"countryId" => 53,
				"stateId" => 1398,
				"name" => "Cartagena",
				"latitude" => "9.686",
				"longitude" => "-73.262",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5156,
				"countryId" => 53,
				"stateId" => 1398,
				"name" => "Leticia",
				"latitude" => "-4.15",
				"longitude" => "-69.95",
				"timeZone" => "-05:00",
			], [
				"cityId" => 41913,
				"countryId" => 53,
				"stateId" => 1399,
				"name" => "Apartado",
				"latitude" => "7.867",
				"longitude" => "-76.667",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5138,
				"countryId" => 53,
				"stateId" => 1399,
				"name" => "Envigado",
				"latitude" => "6.171",
				"longitude" => "-75.584",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5142,
				"countryId" => 53,
				"stateId" => 1399,
				"name" => "Fragua",
				"latitude" => "7.283",
				"longitude" => "-74.8",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5149,
				"countryId" => 53,
				"stateId" => 1399,
				"name" => "Itagui",
				"latitude" => "6.172",
				"longitude" => "-75.611",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3622,
				"countryId" => 53,
				"stateId" => 1399,
				"name" => "Medellin",
				"latitude" => "6.25",
				"longitude" => "-75.583",
				"timeZone" => "-05:00",
			], [
				"cityId" => 13285,
				"countryId" => 53,
				"stateId" => 1399,
				"name" => "Rionegro",
				"latitude" => "6.155",
				"longitude" => "-75.374",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5129,
				"countryId" => 53,
				"stateId" => 1400,
				"name" => "Arauca",
				"latitude" => "9.17",
				"longitude" => "-73.547",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5154,
				"countryId" => 53,
				"stateId" => 1400,
				"name" => "Las Delicias",
				"latitude" => "6.941",
				"longitude" => "-70.204",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3611,
				"countryId" => 53,
				"stateId" => 1401,
				"name" => "Armenia",
				"latitude" => "7.139",
				"longitude" => "-73.376",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3612,
				"countryId" => 53,
				"stateId" => 1401,
				"name" => "Barranquilla",
				"latitude" => "10.983",
				"longitude" => "-74.8",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3619,
				"countryId" => 53,
				"stateId" => 1403,
				"name" => "Honda",
				"latitude" => "1.85",
				"longitude" => "-76.817",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5161,
				"countryId" => 53,
				"stateId" => 1403,
				"name" => "Mosquera",
				"latitude" => "2.35",
				"longitude" => "-76.867",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3623,
				"countryId" => 53,
				"stateId" => 1403,
				"name" => "Popayan",
				"latitude" => "8.673",
				"longitude" => "-76.202",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5181,
				"countryId" => 53,
				"stateId" => 1404,
				"name" => "Valledupar",
				"latitude" => "4.183",
				"longitude" => "-73.217",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5170,
				"countryId" => 53,
				"stateId" => 1405,
				"name" => "Quibdo",
				"latitude" => "5.7",
				"longitude" => "-76.633",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5160,
				"countryId" => 53,
				"stateId" => 1406,
				"name" => "Monteria",
				"latitude" => "8.758",
				"longitude" => "-75.883",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5162,
				"countryId" => 53,
				"stateId" => 1410,
				"name" => "Neiva",
				"latitude" => "2.933",
				"longitude" => "-75.3",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5158,
				"countryId" => 53,
				"stateId" => 1411,
				"name" => "Maicao",
				"latitude" => "11.376",
				"longitude" => "-72.241",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5171,
				"countryId" => 53,
				"stateId" => 1411,
				"name" => "Riohacha",
				"latitude" => "11.55",
				"longitude" => "-72.917",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3625,
				"countryId" => 53,
				"stateId" => 1411,
				"name" => "Sincelejo",
				"latitude" => "10.951",
				"longitude" => "-72.707",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5183,
				"countryId" => 53,
				"stateId" => 1412,
				"name" => "Villavicencio",
				"latitude" => "4.15",
				"longitude" => "-73.65",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5132,
				"countryId" => 53,
				"stateId" => 1413,
				"name" => "Buga",
				"latitude" => "2.183",
				"longitude" => "-77.883",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5140,
				"countryId" => 53,
				"stateId" => 1413,
				"name" => "Florencia",
				"latitude" => "1.117",
				"longitude" => "-77.35",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5148,
				"countryId" => 53,
				"stateId" => 1413,
				"name" => "Ipiales",
				"latitude" => "0.833",
				"longitude" => "-77.617",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5152,
				"countryId" => 53,
				"stateId" => 1413,
				"name" => "La Victoria",
				"latitude" => "5.533",
				"longitude" => "-74.2",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5153,
				"countryId" => 53,
				"stateId" => 1413,
				"name" => "Las Cruces",
				"latitude" => "0.867",
				"longitude" => "-77.6",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5167,
				"countryId" => 53,
				"stateId" => 1413,
				"name" => "Pasto",
				"latitude" => "1.217",
				"longitude" => "-77.267",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5134,
				"countryId" => 53,
				"stateId" => 1414,
				"name" => "Cucuta",
				"latitude" => "7.9",
				"longitude" => "-72.517",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5166,
				"countryId" => 53,
				"stateId" => 1414,
				"name" => "Pamplona",
				"latitude" => "8.448",
				"longitude" => "-73.22",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3626,
				"countryId" => 53,
				"stateId" => 1414,
				"name" => "Tunja",
				"latitude" => "8.19",
				"longitude" => "-73.254",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5182,
				"countryId" => 53,
				"stateId" => 1414,
				"name" => "Villa De Leiva",
				"latitude" => "7.04",
				"longitude" => "-72.399",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5133,
				"countryId" => 53,
				"stateId" => 1415,
				"name" => "Chiquinquira",
				"latitude" => "0.1",
				"longitude" => "-75.067",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5150,
				"countryId" => 53,
				"stateId" => 1415,
				"name" => "Junin",
				"latitude" => "-0.333",
				"longitude" => "-74.133",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5168,
				"countryId" => 53,
				"stateId" => 1417,
				"name" => "Pereira",
				"latitude" => "4.817",
				"longitude" => "-75.7",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5173,
				"countryId" => 53,
				"stateId" => 1418,
				"name" => "San Andres",
				"latitude" => "9.133",
				"longitude" => "-75.5",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5130,
				"countryId" => 53,
				"stateId" => 1419,
				"name" => "Barrancabermeja",
				"latitude" => "7.05",
				"longitude" => "-73.867",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3614,
				"countryId" => 53,
				"stateId" => 1419,
				"name" => "Bucaramanga",
				"latitude" => "7.13",
				"longitude" => "-73.124",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5136,
				"countryId" => 53,
				"stateId" => 1419,
				"name" => "El Centro",
				"latitude" => "6.95",
				"longitude" => "-73.767",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5146,
				"countryId" => 53,
				"stateId" => 1419,
				"name" => "Galan",
				"latitude" => "7.328",
				"longitude" => "-73.141",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5147,
				"countryId" => 53,
				"stateId" => 1419,
				"name" => "Girardot",
				"latitude" => "6.376",
				"longitude" => "-73.382",
				"timeZone" => "-05:00",
			], [
				"cityId" => 13261,
				"countryId" => 53,
				"stateId" => 1421,
				"name" => "1Ibague",
				"latitude" => "4.437",
				"longitude" => "-75.226",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3620,
				"countryId" => 53,
				"stateId" => 1421,
				"name" => "Ibague",
				"latitude" => "4.437",
				"longitude" => "-75.226",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5151,
				"countryId" => 53,
				"stateId" => 1421,
				"name" => "La Calera",
				"latitude" => "3.179",
				"longitude" => "-75.639",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5155,
				"countryId" => 53,
				"stateId" => 1421,
				"name" => "Laureles",
				"latitude" => "4.259",
				"longitude" => "-75.323",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5184,
				"countryId" => 53,
				"stateId" => 1421,
				"name" => "Yopal",
				"latitude" => "4.133",
				"longitude" => "-74.6",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3615,
				"countryId" => 53,
				"stateId" => 1422,
				"name" => "Cali",
				"latitude" => "3.447",
				"longitude" => "-76.516",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5165,
				"countryId" => 53,
				"stateId" => 1422,
				"name" => "Palmira",
				"latitude" => "3.533",
				"longitude" => "-76.283",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5137,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Engativa",
				"latitude" => "4.717",
				"longitude" => "-74.15",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5139,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Facatativa",
				"latitude" => "4.817",
				"longitude" => "-74.367",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5141,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Fontibon",
				"latitude" => "4.667",
				"longitude" => "-74.15",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5143,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Funza",
				"latitude" => "4.717",
				"longitude" => "-74.217",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5144,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Fusagasuga",
				"latitude" => "4.342",
				"longitude" => "-74.362",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5176,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Soacha",
				"latitude" => "4.583",
				"longitude" => "-74.217",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5178,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Suba",
				"latitude" => "4.75",
				"longitude" => "-74.083",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5179,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Tocaima",
				"latitude" => "4.467",
				"longitude" => "-74.633",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5180,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Usaquen",
				"latitude" => "4.7",
				"longitude" => "-74.033",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5185,
				"countryId" => 53,
				"stateId" => 1426,
				"name" => "Zipaquira",
				"latitude" => "5.017",
				"longitude" => "-74",
				"timeZone" => "-05:00",
			], [
				"cityId" => 42413,
				"countryId" => 53,
				"stateId" => 1427,
				"name" => "Bogota",
				"latitude" => "4.62554",
				"longitude" => "-74.0815",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5157,
				"countryId" => 53,
				"stateId" => 1427,
				"name" => "Madrid",
				"latitude" => "4.446",
				"longitude" => "-74.157",
				"timeZone" => "-05:00",
			], [
				"cityId" => 14960,
				"countryId" => 53,
				"stateId" => 1427,
				"name" => "Santafe de Bogota",
				"latitude" => "4.6",
				"longitude" => "-74.0833",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5159,
				"countryId" => 53,
				"stateId" => 1429,
				"name" => "Melgar",
				"latitude" => "4.2",
				"longitude" => "-74.65",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5163,
				"countryId" => 53,
				"stateId" => 1429,
				"name" => "Paipa",
				"latitude" => "5.783",
				"longitude" => "-73.117",
				"timeZone" => "-05:00",
			], [
				"cityId" => 5177,
				"countryId" => 53,
				"stateId" => 1429,
				"name" => "Sogamoso",
				"latitude" => "5.717",
				"longitude" => "-72.933",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3621,
				"countryId" => 53,
				"stateId" => 1430,
				"name" => "Manizales",
				"latitude" => "5.083",
				"longitude" => "-75.5",
				"timeZone" => "-05:00",
			], [
				"cityId" => 3624,
				"countryId" => 53,
				"stateId" => 1431,
				"name" => "Santa Marta",
				"latitude" => "3.051",
				"longitude" => "-76.564",
				"timeZone" => "-05:00",
			]
 		];

		foreach ($cities as $city) {
			City::create($city);
		}
    }
 
}