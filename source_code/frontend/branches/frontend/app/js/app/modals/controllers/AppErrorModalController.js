'use strict';

AppController.controller('AppErrorModalController', ['$scope', '$modalInstance', 'locale', '$log', 'errorCode',
    function ($scope, $modalInstance, locale, $log, errorCode) {
    	
    	$scope.error = {
    		title: locale.getString('common.appErrorTitle', {
    			errorCode: errorCode
    		}),
    		message: locale.getString('common.appErrorMessage')
    	};

		$scope.ok = function () {
			$log.log('OK');
			$modalInstance.close();
		};

		$scope.cancel = function () {
			$modalInstance.dismiss('cancel');
		};
    }
]);