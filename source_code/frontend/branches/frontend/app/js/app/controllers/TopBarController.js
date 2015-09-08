'use strict';

AppController.controller('TopBarController', ['$scope', 'locale', '$log',
	function ($scope, locale, $log) {
		$scope.moduleList = [];

		$scope.menu = {};
		
		$scope.predicate = 'ORDER';

		/*
		*	Nos aseguramos de que el archivo "topBar" haya sido cargado en memoria
		*	para acceder a él.
		*/
		locale.ready($scope.CONSTANTS.APP.LANG_FILES.TOP_BAR).then(function() {
			// se cargan los titulos del menu desde el json del lenguaje
			angular.forEach($scope.CONSTANTS.MODULES, function(value, key) {
				value.NAME = locale.getString($scope.CONSTANTS.APP.LANG_FILES.TOP_BAR + '.' + value.ID);
				$scope.moduleList.push(value);
			});
		});

		$scope.getClass = function (moduleRoute) {
			var classDOM = '';
			
			if ($scope.currentModule.route == moduleRoute) {
				classDOM = $scope.CONSTANTS.ACTIVE;
			}

			return classDOM;
		}
	}
]);