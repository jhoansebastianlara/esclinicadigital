'use strict';

/**
*	Controlador responsable de gestionar todas las acciones (CRUD) referentes
*	a los pacientes en la aplicación.
*
*   @author: Sebastián Lara <sebastian@mobigeek.com>
*   
*   @date: 9/1/2015
*/

AppController.controller('PatientController', ['$scope', '$location', '$routeParams', '$timeout', 'PatientService', '$log', 'REST_ACTION', '$filter',
	function ($scope, $location, $routeParams, $timeout, PatientService, $log, REST_ACTION, $filter) {
		// lista de pacientes
		$scope.patientList = [];
		// lista de tipos de identificacion
		$scope.identificationTypeList = [];
		// lista de estados civiles
		$scope.matiralStatusList = [];
		// lista de parentescos civiles
		$scope.relationshipList = [];
		// variable para saber si la fecha de nacimiento es o no válida
		$scope.isValidBirthdate = false;
		// datos de un paciente
		$scope.patient = {
			birthdate: null
		};
		// lista de responsables del paciente
		$scope.patient.custodians = [];

		// función que se ejecuta cuando carga el componente
		$scope.init = function() {
			if ($scope.patient.custodians.length == 0) {
				// por defecto se muestra un item del formulario para el custodian
				$scope.createEmptyCustodian();
			}
		}

		// textos para la pluralización de los responsables
	    $scope.custodianPluralOptions = {
	        zero: 'custodian.custodianPluralsZero',
	        one: 'custodian.custodianPluralsOne',
	        many: 'custodian.custodianPluralsMany'
	    }

		/**
		*	variable booleana que almacena verdadero cuando el controlador se esta
		*	utilizando para crear un recurso.
		*/
		$scope.isCreateAction = (REST_ACTION == CONSTANTS.REST_ACTIONS.STORE);

		/**
		*	Se verifica si se esta usando el controlador para listar
		*	los pacientes de la aplicación.
		*/
		if (REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.INDEX) {
			
			PatientService.rest.index()
			.$promise.then(
				function(response) {
					// se capturan los errores
					$scope.$parent.captureErrors(response);

					if (response.data) {
						// Se obtuvieron los usuarios exitosamente.
						$scope.patientList = response.data;
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
				|| (REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.UPDATE)
				|| (REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.SHOW)) {

			PatientService.rest.create()
			.$promise.then(
				function(response) {

					// se capturan los errores
					$scope.$parent.captureErrors(response);

					if (response.data) {
						// Se obtuvieron los tipos de identificación.
						$scope.identificationTypeList = response.data[0];
						$scope.matiralStatusList = response.data[1];
						$scope.relationshipList = response.data[2];
					}
				}, 
				$scope.$parent.failResponse
			);
		}

		/**
		*	Si el usuario se esta editando, se traen los datos del servidor.
		*/
		if ((REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.UPDATE) 
				|| (REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.SHOW)) {

			PatientService.rest.show({
				patientId: $routeParams.patientId,
				embed: 'custodians'
			})
			.$promise.then(
				function(response) {
					// se capturan los errores
					$scope.$parent.captureErrors(response);

					if (response.data) {
						// validar cuando no se encuentra información
						if (response.data.NOT_DATA_FOUND) {
							$scope.CONSTANTS.MODALS.NOT_DATA_FOUND.resolve.options = function() {
				                /**
				                *   Se le indica al controlador el codigo del error que ocurrio.
				                */
				                return {
				                	undefinedCode: $routeParams.patientId,
				                	redirectTo: $scope.CONSTANTS.MODULES.PATIENTS.PATH
				                };
				            };

							// se muestra el modal informando que no se encontro el paciente
            				$scope.modal.open($scope.CONSTANTS.MODALS.NOT_DATA_FOUND);
						} else if (response.data.patientId) {
							// Se obtuvo la información del usuario exitosamente.
							$scope.patient = response.data;

							/**
							*	Si esta definida la funcion "updateTitlePersonalDataTab" es 
							*	porque se esta usando el controlador desde la ficha de la historia clínica
							*/
							if (angular.isDefined($scope.$parent) 
								&& (angular.isDefined($scope.$parent.updateTitlePersonalDataTab))) {
								var fullName = $filter('FullNameFilter')($filter('capitalize')($scope.patient.name), $filter('capitalize')($scope.patient.lastname));
								$scope.$parent.updateTitlePersonalDataTab(fullName);
							}

							if (response.data.custodians.data) {
								$scope.patient.custodians = response.data.custodians.data;
							}

							// se separa la fecha de nacimiento para mostrarla en la interfaz.
							if (!$scope.utilities.isEmpty($scope.patient.birthdate)) {
		                        var dateArray = $scope.patient.birthdate.split("-");

		                        if (dateArray.length > 0) {
		                        	$scope.patient.year = parseInt(dateArray[0]);
		                        	$scope.patient.month = parseInt(dateArray[1]);
		                        	$scope.patient.day = parseInt(dateArray[2]);
		                        }
							}							
						}

					}
				}, 
				$scope.$parent.failResponse
			);
		}

		/**
		*	Evento que esta a la escucha de ser llamado desde otro controlador.
		*/
		$scope.$on('savePatientEvent', function() {
		    $log.log('save event!');
		    $scope.save();
		});

		/**
		*	Función responsable de realizar la petición al backend para 
		*	crear/actualizar un usuario.
		*/
		$scope.save = function() {
			$scope.validateBirthDate();

			if ($scope.utilities.validations.validateForm($scope.theForm) 
					&& !$scope.theForm.identificationNumber.$error.unique
					&& $scope.isValidBirthdate) {

				PatientService.rest[REST_ACTION]($scope.patient)
				.$promise.then(
					function(response) {
						$log.log(response);
						// se capturan los errores
						$scope.$parent.captureErrors(response);

						if (response.data && response.data.patientId) {
							// usuario creado/actualizado exitosamente
							$timeout(function() {
								$location.path($scope.CONSTANTS.MODULES.PATIENTS.PATH);
							});
						}
					}, 
					$scope.$parent.failResponse
				);
			}
		};


		/**
		*	Función responsable de adicionar un item vacío en el listado de responsables.
		*/
		$scope.createEmptyCustodian = function() {
			if (!angular.isDefined($scope.patient.custodians)) {
				$scope.patient.custodians = [];
			}

			if ($scope.patient.custodians.length < $scope.CONSTANTS.APP.PATIENTS.CUSTODIAN_MAX) {
				$scope.patient.custodians.push({
					custodianId: '',
					identificationType: '',
					identificationNumber: '',
					fullname: '',
					relationship: '',
					phone: '',
					email: ''
				});				
			}

		}

		/**
		*	Función responsable de verificar que la fecha de nacimiento
		*	del usuario sea válida.
		*/
		$scope.validateBirthDate = function () {
			$scope.patient.birthdate = $scope.patient.year + '-' + $scope.patient.month + '-' + $scope.patient.day;
			$scope.isValidBirthdate = $scope.utilities.validations.isValidDate($scope.patient.birthdate, $scope.CONSTANTS.APP.DATE_FORMATS.yyyy_mm_dd);
		};
	}
]);