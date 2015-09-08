'use strict';

AppController.controller('AuthController', ['$scope', '$q', 'AuthService', '$location', '$log',
	function ($scope, $q, AuthService, $location, $log) {
		$scope.isLoginFailed = false;

		$scope.user = {};
		
		/**
		*	Se difiere el servicio de login, es asincrono.
		*/
		var initSession = $q.defer();

		/**
		*	Se llama a la funcion "createUserSession" cuando el servicio se resuelva
		*/
		initSession.promise.then(createUserSession);

		/**
		*	Función responsable de crear la session de un usuario y enviarlo al 
		*	"dashboard" de la aplicación.
		*/
		function createUserSession(response) {
			var userData = response.data;

			// se indica que el usuario esta conectado.
			$scope.userData.isConnected = true;

			$scope.userData.userId = userData.userId;
			$scope.userData.identificationTypeId = userData.identificationTypeId;
			$scope.userData.name = userData.name;
			$scope.userData.lastname = userData.lastname;
			$scope.userData.username = userData.username;
			$scope.userData.identificationNumber = userData.identificationNumber;
			$scope.userData.email = userData.email;
			$scope.userData.birthdate = userData.birthdate;
			$scope.userData.gender = userData.gender;
			$scope.userData.created_at = userData.created_at;
		

			// se almacena la información en el "localStorage".
			$scope.utilities.localStorage.addItem($scope.CONSTANTS.APP.LOCAL_STORAGE.IS_CONNECTED, true);
			$scope.utilities.localStorage.addItem($scope.CONSTANTS.APP.LOCAL_STORAGE.USER_DATA, angular.toJson(userData));

			$location.path('/dash');
		};

		/**
		*	Función que realiza la comunicación con el "backend" por medio del 
		*	servicio "AuthService" para realizar el "login" en la aplicación.
		*/
		$scope.login = function() {
			// se llama al servicio de login
			var response = AuthService.session.login({
				username: $scope.user.username, 
				password: $scope.user.password
			}).$promise.then(function(response) {
				// se capturan los errores
				$scope.$parent.captureErrors(response);

				// Se obtiene una respuesta y se validan los datos
				if (response.error && response.error.code) {
					// error en la aplicación.
					
					if (response.error.code == $scope.CONSTANTS.APP.CODES.CUSTOM.CODE_COULD_NOT_AUTHENTICATE) {
						// combinacion de usuario y contrasenia invalida.
						$scope.isLoginFailed = true;

						/**
						*	Se indica hace creer a la aplicación que el usuario no ha interactuado 
						*	con el campo "password" para que no muestre el alerta de requerido,se 
						*	limpia se enfoca.
						*/
						$scope.superForm.password.$dirty = false;
						$scope.user.password = $scope.CONSTANTS.EMPTY;
						$scope.focus('password');
					}
					
				} else if (response.data) {
					// usuario autenticado exitosamente, se resuelve la promesa.
					initSession.resolve(response);
				}

			},
				$scope.$parent.failResponse
			);
		};
	
	}
]);