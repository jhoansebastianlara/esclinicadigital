'use strict';

AppService.factory('MedicalHistoryService', ['$rootScope', '$resource', 'CONSTANTS',
	/**
	 *
	 * @param $resource Servicio de AngularJS para crear clientes REST
	 * @returns {*} función que regresa los metodos de nuestro servicio
	 */
	function($rootScope, $resource, CONSTANTS){
		
		var factory = {			
			rest: $resource(CONSTANTS.SETTINGS.API.HOST + '/patients/medicalHistory/:patientId', {
				patientId: '@patientId'
			}, {
				index: {
					method: 'GET',
					headers: $rootScope.headersApp
				},
				create: {
					method:'GET',
					params: {
						patientId: 'create'
					}
				},
				store: {
					method:'POST'
				},
				show: {
					method: 'GET',
				},
				update: {
			    	method: 'PUT',
			    }
			})
		};

		return factory;
	}]
);