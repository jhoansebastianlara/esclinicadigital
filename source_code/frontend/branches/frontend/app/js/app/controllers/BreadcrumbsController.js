'use strict';

/**
*	Controlador responsable de manipular la miga de pan (Breadcrumbs)
*	en la aplicación.
*
*	@author: Sebastián Lara <sebastian@mobigeek.co>
*
*	@date: 8/1/2015
*/

AppController.controller('BreadcrumbsController', ['$scope', 'locale', '$log',
	function ($scope, locale, $log) {		
		// se consulta es estado en el que se encuentra el usuario
		$scope.currentRoute = $scope.currentModule.$$route.route;
		$scope.currentRouteId = $scope.currentModule.$$route.id;
		
		$scope.breadcrumbList = [];
		$scope.breadcrumbListTemp = [];

		/*
		*	Nos aseguramos de que el archivo "topBar" haya sido cargado en memoria
		*	para acceder a él.
		*/
		locale.ready($scope.CONSTANTS.APP.LANG_FILES.TOP_BAR).then(function() {
			// se obtiene el modulo en el que esta el usuario
			$scope.breadcrumbModule = $scope.CONSTANTS.MODULES[$scope.currentRoute];

			if ($scope.breadcrumbModule.ID == $scope.currentRouteId) {
				// se encuentra la ruta actual en el primer nivel de las rutas
				$scope.createBreadcrumb($scope.breadcrumbModule, $scope.CONSTANTS.CURRENT);
			} else if (!$scope.utilities.isEmpty($scope.breadcrumbModule.ACTIONS)) {
				// existen submodulos, se recorren en busca de la ruta específica.
				
				$scope.createBreadcrumb($scope.breadcrumbModule, $scope.CONSTANTS.EMPTY);

				angular.forEach($scope.breadcrumbModule.ACTIONS, function(route, key) {
					// se consulta siempre y cuando no se tenga el breadcrumbList completo
					if ($scope.utilities.isEmpty($scope.breadcrumbList)) {
						
						if (route.ID == $scope.currentRouteId) {
							$scope.createBreadcrumb(route, $scope.CONSTANTS.CURRENT);
						}						
					}

				});

			}

		});

		$scope.createBreadcrumb = function(route, isCurrent) {
			$scope.breadcrumbListTemp.push({
				name: locale.getString($scope.CONSTANTS.APP.LANG_FILES.TOP_BAR + '.' + route.ID),
				path: route.PATH,
				isCurrent: isCurrent
			});

			// si isCurrent es vacío, quiere decir que aún no es la ruta actual.
			if (!$scope.utilities.isEmpty(isCurrent)) {
				$scope.breadcrumbList = angular.copy($scope.breadcrumbListTemp);
			}
		}
	}
]);