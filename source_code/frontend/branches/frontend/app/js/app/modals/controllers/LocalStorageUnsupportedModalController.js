'use strict';

AppController.controller('LocalStorageUnsupportedModalController', ['$scope', '$modalInstance', '$log',
    function ($scope, $modalInstance, $log) {

		$scope.ok = function () {
			$modalInstance.close();
		};

		$scope.cancel = function () {
			$modalInstance.dismiss('cancel');
		};
    }
]);