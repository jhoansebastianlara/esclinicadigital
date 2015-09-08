'use strict';

/**
*	Servicio responsable de realizar las peticiones al "backend",
*	referentes a los usuarios de la aplicación.
*
*	@author: Sebastián Lara <sebastian@mobigeek.co>
*
*	@date: 17/11/2014
*/

AppService.service('UserService', ['$rootScope', '$resource', 'CONSTANTS',

	function($rootScope, $resource, CONSTANTS) {
		var factory = {			
			rest: $resource(CONSTANTS.SETTINGS.API.HOST + '/users/:userId', {
				userId: '@userId'
			}, {
				index: {
					method: 'GET',
					headers: $rootScope.headersApp
				},
				create: {
					method:'GET',
					params: {
						userId: 'create'
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