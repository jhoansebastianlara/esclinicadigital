'use strict';

/**
*	Controlador responsable de gestionar todas las acciones (CRUD) referentes
*	a los usuarios en la aplicación.
*
*	@author: Sebastián Lara <sebastian@mobigeek.co>
*
*	@date: 17/11/2014
*
*/

AppController.controller('UserController', ['$scope', '$location', '$routeParams', '$timeout', 'UserService', '$log', 'REST_ACTION',
	function ($scope, $location, $routeParams, $timeout, UserService, $log, REST_ACTION) {
		// lista de usuarios
		$scope.userList = [];
		// lista de tipos de identificación
		$scope.identificationTypeList = [];
		// variable para saber si la fecha de nacimiento es o no válida
		$scope.isValidBirthdate = false;
		// datos de un usuario
		$scope.user = {
			birthdate: null
		};

		/**
		*	variable booleana que almacena verdadero cuando el controlador se esta
		*	utilizando para crear un item.
		*/
		$scope.isCreateAction = (REST_ACTION == CONSTANTS.REST_ACTIONS.STORE);

		/**
		*	Se verifica si se esta usando el controlador para listar
		*	los usuarios de la aplicación.
		*/
		if (REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.INDEX) {
			UserService.rest.index()
			.$promise.then(
				function(response) {
					// se capturan los errores
					$scope.$parent.captureErrors(response);

					if (response.data) {
						// Se obtuvieron los usuarios exitosamente.
						$scope.userList = response.data;
					}
				}, 
				$scope.$parent.failResponse
			);
		}

		/**
		*	Se obtiene la información mínima necesaria para crear un usuario.
		*	Nota: averiguar como guardar esto en caché.
		*/
		if ((REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.STORE) 
				|| (REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.UPDATE)) {
			UserService.rest.create()
			.$promise.then(
				function(response) {
					// se capturan los errores
					$scope.$parent.captureErrors(response);

					if (response.data) {
						// Se obtuvieron los tipos de identificación.
						$scope.identificationTypeList = response.data[0];
					}
				}, 
				$scope.$parent.failResponse
			);
		}

		/**
		*	Si el usuario se esta editando, se traen los datos del servidor.
		*/
		if (REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.UPDATE) {
			
			UserService.rest.show({
				userId: $routeParams.userId
			})
			.$promise.then(
				function(response) {
					// se capturan los errores
					$scope.$parent.captureErrors(response);
					if (response.data.NOT_DATA_FOUND) {
						$scope.CONSTANTS.MODALS.NOT_DATA_FOUND.resolve.options = function() {
			                /**
			                *   Se le indica al controlador el codigo del error que ocurrio.
			                */
			                return {
			                	undefinedCode: $routeParams.userId,
			                	redirectTo: $scope.CONSTANTS.MODULES.USERS.PATH
			                };
			            };

						// se muestra el modal informando que no se encontro el paciente
        				$scope.modal.open($scope.CONSTANTS.MODALS.NOT_DATA_FOUND);
					} else if (response.data.userId) {

						// Se obtuvo la información del usuario exitosamente.
						$scope.user = response.data;

						// se separa la fecha de nacimiento para mostrarla en la interfaz.
						if (!$scope.utilities.isEmpty($scope.user.birthdate)) {
	                        var dateArray = $scope.user.birthdate.split("-");

	                        if (dateArray.length > 0) {
	                        	$scope.user.year = parseInt(dateArray[0]);
	                        	$scope.user.month = parseInt(dateArray[1]);
	                        	$scope.user.day = parseInt(dateArray[2]);
	                        }
						}
					}
				}, 
				$scope.$parent.failResponse
			);
		}



		/**
		*	Función responsable de realizar la petición al backend para 
		*	crear/actualizar un usuario.
		*/
		$scope.save = function() {
			$scope.validateBirthDate();

			if ($scope.utilities.validations.validateForm($scope.theForm) 
					&& !$scope.theForm.username.$error.unique
					&& !$scope.theForm.identificationNumber.$error.unique
					&& $scope.isValidBirthdate) {				
				
				UserService.rest[REST_ACTION]($scope.user)
				.$promise.then(
					function(response) {
						//$log.log(response);
						// se capturan los errores
						$scope.$parent.captureErrors(response);

						if (response.data && response.data.userId) {
							// usuario creado/actualizado exitosamente
							$timeout(function() {
								$location.path($scope.CONSTANTS.MODULES.USERS.PATH);
							});
						}
					}, 
					$scope.$parent.failResponse
				);
			}
		};
		
		/**
		*	Función responsable de verificar que la fecha de nacimiento
		*	del usuario sea válida.
		*/
		$scope.validateBirthDate = function () {
			$scope.user.birthdate = $scope.user.year + '-' + $scope.user.month + '-' + $scope.user.day;
			$scope.isValidBirthdate = ($scope.utilities.validations.isValidDate($scope.user.birthdate, $scope.CONSTANTS.APP.DATE_FORMATS.yyyy_mm_dd));
		};

	}
]);