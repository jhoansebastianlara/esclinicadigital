'use strict';

/**
*   @description
*   Módulo que encapsula todos los controladores de la aplicación.
*
*   @author: Sebastián Lara <sebastianlara@mobigeek.com>
*   
*   @date: 06/11/2014
*/

var AppController = angular.module('AppController', []);

AppController.controller('AppController', ['$scope', '$location', '$log', 'AuthService', 'locale',
	function ($scope, $location, $log, AuthService, locale) {
        
		/**
		*	Objeto que se actualiza con los datos del usuario autenticado.
		*/
		$scope.userData = {
			birthdate: null,
			created_at: null,
			email: null,
			gender: null,
			identificationNumber: null,
			identificationTypeId: null,
			lastname: null,
			name: null,
			userId: null,
			username: null,
		};

		var userDataLocal = angular.fromJson($scope.utilities.localStorage.getItem($scope.CONSTANTS.APP.LOCAL_STORAGE.USER_DATA));
		
		if (!$scope.utilities.isEmpty(userDataLocal)) {
			// Existen los datos del usuario y el token de seguridad
			$scope.userData.isConnected = true;

			$scope.userData.birthdate = userDataLocal.birthdate;
			$scope.userData.created_at = userDataLocal.created_at;
			$scope.userData.email = userDataLocal.email;
			$scope.userData.gender = userDataLocal.gender;
			$scope.userData.identificationNumber = userDataLocal.identificationNumber;
			$scope.userData.identificationTypeId = userDataLocal.identificationTypeId;
			$scope.userData.lastname = userDataLocal.lastname;
			$scope.userData.name = userDataLocal.name;
			$scope.userData.userId = userDataLocal.userId;
			$scope.userData.username = userDataLocal.username;

		}
		
		/**
		*	Función responsable de cerrar la session de un usuario.
		*/
		$scope.logout = function() {

			AuthService.session.logout()
    			.$promise.then(function(response) {
    				/**
    				*	Se envia la petición de "log out" al servidor pero no se verifica
    				*	la respuesta de este debido a que el esta acción se puede dar porque
    				*	el usuario contenta los tokens erroneos.
    				*/
    				if ($scope.deleteUserSession(response)) {
    					// Se envia a la pagina de login.
                        $scope.userData = {};
    					$location.path('login');
    				}
    				
    			}, 
                $scope.failResponse
            );			
		};


		/**
		*	@description
		*	Función responsable de filtrar los errores en las respuestas
		*	del "backend".
		*/
		$scope.captureErrors = function (response) {
			
			/**
			*	Se verifica la existencia de errores en la respuesta
			*	y se le da el manejo respectivo según el caso.
			*/
			if (!$scope.utilities.isEmpty(response.error)) {

				// se verifica el error http
				switch (response.error.httpCode) {
					case $scope.CONSTANTS.APP.CODES.HTTP.HTTP_CODE_UNAUTHORIZED:
						// el usuario no esta autorizado, se expulsa de la aplicación
						$scope.logout();
					break;

					default:

					break;
				}

				// se verifica el error específico
				switch (response.error.code) {
					case $scope.CONSTANTS.APP.CODES.CUSTOM.CODE_WRONG_ARGUMENTS:
						
					break;

					default:

					break;
				}

				if (response.error.code != $scope.CONSTANTS.APP.CODES.NOT_DATA_FOUND) {
					$scope.CONSTANTS.MODALS.APP_ERROR.resolve.errorCode = function() {
		                /**
		                *   Se le indica al controlador el codigo del error que ocurrio.
		                */
		                return response.error.code;
		            };

					$scope.modal.open($scope.CONSTANTS.MODALS.APP_ERROR);					
				}
			}
		}

		/**
		*	Función que captura el evento cuando la API no responde o responde con 
		*	una respuesta mala.
		*/
		$scope.failResponse = function (resp) {
            // se muestra el modal informando del error en la aplicación.
            $scope.modal.open($scope.CONSTANTS.MODALS.APP_ERROR);
		};

		/**
		*	@description
		*	Función responsable de eliminar la sesión de un usuario 
		*	autenticado.
		*/
		$scope.deleteUserSession = function (response) {
			// Se eliminan losa datos del usuario y de la sesión localmente almacenados.
			var isConnectedDeleted = $scope.utilities.localStorage.removeItem($scope.CONSTANTS.APP.LOCAL_STORAGE.IS_CONNECTED);
			var userDataDeleted = $scope.utilities.localStorage.removeItem($scope.CONSTANTS.APP.LOCAL_STORAGE.USER_DATA);
			var authTokenDeleted = $scope.utilities.localStorage.removeItem($scope.CONSTANTS.APP.LOCAL_STORAGE.AUTH_TOKEN);

			return (isConnectedDeleted && userDataDeleted && authTokenDeleted);
		};
	}
]);