/**
*	Controlador responsable de gestionar todas las acciones (CRUD) referentes
*	a los antecedentes médicos de los pacientes en la aplicación.
*
*   @author: Sebastián Lara <sebastian@mobigeek.com>
*   
*   @date: 17/01/2015
*/

AppController.controller('MedicalHistoryController', ['$scope', '$log', 'REST_ACTION','MedicalHistoryService',
	function ($scope, $log, REST_ACTION, MedicalHistoryService) {

		// lista de antecedentes medicos
		$scope.medicalHistorys = {};

		/**
		*	Se verifica si se esta usando el controlador para listar
		*	los pacientes de la aplicación.
		*/
		
		if (REST_ACTION == $scope.CONSTANTS.REST_ACTIONS.SHOW) {		
			MedicalHistoryService.rest.index({
				embed: 'patientMedicalHistories',
			})
			.$promise.then(
				function(response) {
					// se capturan los errores
					$scope.$parent.captureErrors(response);

					if (response.data) {
						// Se obtuvieron los antecendetes exitosamente.
						$scope.medicalHistorys = response.data;
					}
				}, 
				$scope.$parent.failResponse
			);			
		} 

	}
]);