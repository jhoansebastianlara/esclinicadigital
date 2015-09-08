<?php

class CieCategoryTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('cie_category')->truncate();
 		
 		/**
 		*	Tipos de examen
 		*/
		$cieCategoryList = [
			[
				"item" => [
					"name" => 'Infecciones con modo de transmisión predominantemente sexual',
				],
				"list" => [
					[
						"code" => "A50",
						"name" => "Sífilis congénita",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A51",
						"name" => "Sífilis precoz",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A52",
						"name" => "Sífilis tardía",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A53",
						"name" => "Otras sífilis y las no especificadas",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A54",
						"name" => "Infección gonococica",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A54",
						"name" => "Sífilis tardía",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A55",
						"name" => "Linfogranuloma (venéreo) por clamidias",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A56",
						"name" => "Otras enfermedades de transmisión sexual debidas a clamidias",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A57",
						"name" => "Chancro blando",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A58",
						"name" => "Granuloma inguinal",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A59",
						"name" => "Tricomoniasis",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A60",
						"name" => "Infección anogenital debida a virus del herpes (herpes simple)",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A63",
						"name" => "Otras enfermedades de transmisión predominantemente sexual, no clasificadas en otra parte",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "A64",
						"name" => "Enfermedad de transmisión sexual no especificada",
						"cieCategoryId" => '' // autogenera
					],
				]
			],
			[
				"item" => [
					"name" => 'Enfermedad por virus de la inmunodeficiencia humana (HIV)',
				],
				"list" => [
					[
						"code" => "B20",
						"name" => "Enfermedad por virus de la inmunodeficiencia humana [VIH], resultante en enfermedades infecciosas y parasitarias",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "B21",
						"name" => "Enfermedad por virus de la inmunodeficiencia humana [VIH], resultante en tumores malignos",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "B22",
						"name" => "Enfermedad por virus de la inmunodeficiencia humana [VIH], resultante en otras enfermedades especificadas",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "B23",
						"name" => "Enfermedad por virus de la inmunodeficiencia humana [VIH], resultante en otras afecciones",
						"cieCategoryId" => '' // autogenera
					],
					[
						"code" => "B24",
						"name" => "Enfermedad por virus de la inmunodeficiencia humana [VIH], sin otra especificación",
						"cieCategoryId" => '' // autogenera
					],
				]
			],/*
			[
				"name" => 'Bacterias, virus y otros agentes infecciosos',
			],
			[
				"name" => 'Tumores malignos de los órganos genitales femeninos',
			],*/
		];

		foreach ($cieCategoryList as $cieCategory) {
			$cieCategoryCreated = CieCategory::create($cieCategory['item']);
			
			$cieList = $cieCategory['list'];
			foreach ($cieList as $cie) {
				// 
				$cie['cieCategoryId'] = $cieCategoryCreated->cieCategoryId;

				Cie::create($cie);
			}
			
		}
    }
}