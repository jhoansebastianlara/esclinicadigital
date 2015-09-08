'use strict';

/**
*	Controlador responsable de gestionar todas las acciones (CRUD) referentes
*	a las historias clínicas de los pacientes en la aplicación.
*
*   @author: Sebastián Lara <sebastian@mobigeek.com>
*   
*   @date: 17/01/2015
*/

AppController.controller('MedicalRecordController', ['MedicalRecordService', '$routeParams', '$scope', '$log', '$filter',
	function (MedicalRecordService, $routeParams, $scope, $log, $filter) {
		// Evolución de la historia clínica
		$scope.medicalRecordEvolution = {
			userId: '',
			date: $filter('date')(new Date(), 'yyyy-MM-dd HH:mm:ss'),
			evolutionNumber: '',
			purpose: '',
			examList: [], //
			diagnosticList: [], //
			conduct: '',
			externalCauseId: '',
			principalDiagnosticType: '',
			purposeAppointmentId: '',
			

		};

		// Datos iniciales necesarios para e formulario de la evolución.
		$scope.initData = {
			// lista de examentes disponibles
			examList: [],
			// Lisda de disgnósticos
			diagnosticList: [],
			// causa extena
			externalCauseList: [],
			// Finalidad de la consulta
			purposeAppointmentList: [],
			// tipos de diagnóstico principal
			mainDiagnosticTypeList: [],
		};

		// configuración de los tabs
		$scope.tabsConfig = {
			// pestaña que esta visualizando el usuario
			currentTab: 'TAB_C',
			// título de la pestaña que tiene la info del paciente
			titlePersonalDataTab: '...',
		};

	    // pestañas que se van a mostrar en el módulo
	    $scope.tabs = {
			TAB_A: {
				title: "form.personalData", // título de la pestaña
				key: "TAB_A", // identificador de la pestaña
				templateUrl: $scope.CONSTANTS.MODULES.PATIENTS.ACTIONS.SHOW.TEMPLATE_URL, // plantilla que se carga para la vista
				isActive : $scope.CONSTANTS.EMPTY // para indicar si es o no la plantilla actual
			},
			TAB_B: {
				title: "form.medicalHistory", 
				key: "TAB_B",
				templateUrl: $scope.CONSTANTS.MODULES.PATIENTS.ACTIONS.MEDICAL_HISTORY.TEMPLATE_URL,
				isActive: $scope.CONSTANTS.EMPTY
			},
			TAB_C: {
				title: "form.medicalRecordEvolution", 
				key: "TAB_C",
				templateUrl: $scope.CONSTANTS.MODULES.PATIENTS.ACTIONS.MEDICAL_RECORD.ACTIONS.CREATE.TEMPLATE_URL,
				isActive: $scope.CONSTANTS.ACTIVE
			}
		};

		// función que se ejecuta cuando carga el componente
		$scope.initMedicalRecord = function() {
			if ($scope.initData.diagnosticList.length == 0) {
				// por defecto se muestra un item del formulario para el diagnóstico
				$scope.addDiagnostic(false);
			}
		}

		$scope.focusIn = function() {
			$log.log('saludando ');
		}

		$scope.validateDiagnostic = function() {
			$log.log('validating..');
			console.log($scope.initData.diagnosticList);
			angular.forEach($scope.initData.diagnosticList, function(diagnostic) {
				if (angular.isDefined(diagnostic.selectedCIE)) {
					console.log('bien', diagnostic.selectedCIE);
				} else {
					console.log('mal', diagnostic.selectedCIE);					
				}
			});
		}

		$scope.focusOut = function() {
			$log.log('despidiendo ');
		}
		
		/**
		*	Servicio que se llama cuando se va a crear/actualizar una 
		*	evolucion de historia clínica.
		*/
		MedicalRecordService.rest.create()
		.$promise.then(
			function(response) {
				// se capturan los errores
				$scope.$parent.captureErrors(response);

				if (response.data) {
					// Se obtienen los tipos de examen para la especialidad del medico
					$scope.initData.examList = response.data[0];
					// se obtienen las causas externas
					$scope.initData.externalCauseList = response.data[1];
					// se obtienen los propositos de las consultas
					$scope.initData.purposeAppointmentList = response.data[2];
					// se obtiene el numero consecutivo de la evoluvión
					$scope.medicalRecordEvolution.evolutionNumber = response.data[3];

					// tipos de diagnóstico principal (solo son tres, se traen localmente)
					$scope.initData.mainDiagnosticTypeList = $scope.CONSTANTS.APP.MEDICAL_RECORDS.MAIN_DIAGNOSTIC_TYPE_LIST;
				}
			}, 
			$scope.$parent.failResponse
		);


		/**
		*	Función responsable de guardar los datos de una evolución de 
		*	historia clínica.
		*/
		$scope.save = function () {
			$log.log('save medical record.');

			//$scope.$broadcast('savePatientEvent');

			MedicalRecordService.rest.store($scope.medicalRecordEvolution)
			.$promise.then(
				function(response) {
					$log.log(response);
					// se capturan los errores
					$scope.$parent.captureErrors(response);

					/*if (response.data && response.data.patientId) {
						// usuario creado/actualizado exitosamente
						$timeout(function() {
							$location.path($scope.CONSTANTS.MODULES.PATIENTS.PATH);
						});
					}*/
				}, 
				$scope.$parent.failResponse
			);
		}

		$scope.hola = 'dataFormatRequestFn';
		/**
		*	Función responsable de agregar un nuevo diagnóstico a la evolución.
		*/
		$scope.addDiagnostic = function(focusField) {
			// se valida que este definica la lista de diagnósticos, de no ser asi se inicializa.
			if (!angular.isDefined($scope.initData.diagnosticList)) {
				$scope.initData.diagnosticList = [];
			}
			
			// se consulata la cantidad de diagnósticos
			var diagnosticLength = $scope.initData.diagnosticList.length
			
			// se verifica que no se vayan a agregar mas diagnósticos de los permitidos.
			if (diagnosticLength < $scope.CONSTANTS.APP.MEDICAL_RECORDS.DIAGNOSTICS.MAX) {
				// se arma el id con el que quedara el nuevo diagnóstico.
				var inputId = ($scope.CONSTANTS.APP.MEDICAL_RECORDS.DIAGNOSTICS.CONFIG.INPUT_ID_PATTERN).concat(diagnosticLength);

				// se agrega el diagnóstico
				$scope.initData.diagnosticList.push({
					selectedCIE: {},
					inputId: inputId
				});

				// se valida si se debe hacer focus al campo recien creado
				if (focusField) {
					/**	
					*	se hace focus en el diagnostico creado. (la libreria coloca 
					*	automaticamente la cadena '_value', por eso se concatena al id del diagnotico creado)
					*/
					$scope.focus(inputId.concat('_value'));					
				}
			}
		}

		// validations

		/**
		*	Función responsable de calcular el IMC (Índice de masa corporal).
		*	IMC = weight / height *(2)
		*/
		$scope.calculateBodyMassIndex = function () {
			// se obtiene el peso  la talla del paciente para calcular el IMC
			var height = document.getElementById('height').value;
			var weight = document.getElementById('weight').value;

			// índice de masa corporal
			var MBI = 0;

			// verficamos que las entradas sean válidas
			if ((!isNaN(weight) && !isNaN(height)) 
					&& (weight > 0 && height > 0)) {
				// se eleva al cuadrado 
				height = Math.pow(height, 2);
				MBI = (weight / height);

				document.getElementById('bmi').value = parseFloat(MBI).toFixed(2);
			}			
		}

		// tabs functions

		/**
		*	Función responsable de actualizar la pestaña actual.
		*/
		$scope.updateTab = function(tabKey) {			
			// Se verifica que la pestaña sea diferente a la actual.
			if (tabKey != $scope.tabsConfig.currentTab) {
				// la pestaña actual deja de serlo
				$scope.tabs[$scope.tabsConfig.currentTab].isActive = $scope.CONSTANTS.EMPTY;
				// la nueva pestaña actual es la que llega por parámetro
				$scope.tabs[tabKey].isActive = $scope.CONSTANTS.ACTIVE;
				// se actualiza la pestaña actual
				$scope.tabsConfig.currentTab = tabKey;
			}
		}

		/**
		*	Función resposable de modificar el título de la pestaña de la información personal.
		*/
		$scope.updateTitlePersonalDataTab = function(title) {
			$scope.tabsConfig.titlePersonalDataTab = title;
		}		


	}
]);