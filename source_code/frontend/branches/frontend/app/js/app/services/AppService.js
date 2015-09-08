'use strict';

/**
*   @description
*   Módulo que encapsula todos los servicios de la aplicación.
*
*   @author: Sebastián Lara <sebastianlara@mobigeek.com>
*   
*   @created: 12/11/2014
*/

var AppService = angular.module('AppService', []);

/**
*	Servicio responsable de realizar las peticiones al "backend",
*	referentes a funcionalidades generales de la aplicación.
*
*	@author: Sebastián Lara <sebastian@mobigeek.co>
*
*	@date: 17/11/2014
*/

AppService.service('AppService', ['$rootScope', '$resource', 'CONSTANTS',

	function($rootScope, $resource, CONSTANTS) {
		var factory = {
			uniques : $resource(CONSTANTS.SETTINGS.API.HOST + '/checkUnique/:entity/:field/:id', {
				entity: '@entity',
				field: '@field',
				id: '0',
			}, {
				checkUserUsernameUnique: {
					method: 'GET',
					params: {
						entity: 'users',
						field: 'username',
						username: '@username'
					},
					headers: $rootScope.headersApp
				},
				checkUserIdentificationNumberUnique: {
					method: 'GET',
					params: {
						entity: 'users',
						field: 'identificationNumber',
						identificationNumber: '@identificationNumber'
					},
					headers: $rootScope.headersApp
				},
				checkPatientIdentificationNumberUnique: {
					method: 'GET',
					params: {
						entity: 'patients',
						field: 'identificationNumber',
						identificationNumber: '@identificationNumber'
					},
					headers: $rootScope.headersApp
				},
			})
		};

		return factory;
	}]
);