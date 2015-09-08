'use strict';

AppService.factory('AuthService', ['$resource', 'CONSTANTS',
	/**
	 *
	 * @param $resource Servicio de AngularJS para crear clientes REST
	 * @returns {*} función que regresa los metodos de nuestro servicio
	 */
	function($resource, CONSTANTS){
		
		var factory = {			
			session: $resource(CONSTANTS.SETTINGS.API.HOST + '/:endpoint', {}, {
				login: {
					method: 'POST', 
					params: {
						username: '@username', 
						password: '@password',
						endpoint: 'login'
					},
					headers: {
			        	'Accept': 'application/json'
			        }
				},
				logout: {
					method: 'GET',
					params: {
						endpoint: 'logout'
					},
					headers: {
			        	//'Accept': 'application/json'
			        }
				},
			})
		};

		return factory;
	}]
);