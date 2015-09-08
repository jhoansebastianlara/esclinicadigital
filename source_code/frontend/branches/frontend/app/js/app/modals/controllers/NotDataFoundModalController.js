'use strict';

AppController.controller('NotDataFoundModalController', ['$scope', '$modalInstance', '$location', 'locale', '$log', 'options',
    function ($scope, $modalInstance, $location, locale, $log, options) {
    	
    	$scope.error = {
    		title: locale.getString('common.notDataFoundTitle'),
    		message: locale.getString('common.notDataFoundMessage')
    	};

		$scope.ok = function () {
			$log.log('OK');
			$modalInstance.close();
            $scope.finallyModal();
        };

        $scope.cancel = function () {
            $modalInstance.dismiss('cancel');
            $scope.finallyModal();
		};

        /**
        *   Functión que se ejecuta siempre que se cierra el modal
        */
        $scope.finallyModal = function() {
            
            $log.log('undefinedCode: ', options.undefinedCode);

            if (!$scope.utilities.isEmpty(options.redirectTo)) {
                // se redirecciona a la ruta anterior
                $location.path(options.redirectTo);
            }            
        }
    }
]);