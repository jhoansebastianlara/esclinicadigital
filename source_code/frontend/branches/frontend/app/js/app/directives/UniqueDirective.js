
AppDirective.directive('uniqueDirective', ['AppService', '$log', function (AppService, $log) {
    return {
        restrict: 'A',
        require: 'ngModel',
        link: function (scope, element, attrs, ngModel) {
            element.bind('keyup', function (e) {
            	
                if (!ngModel || !element.val()) {
                    return;
                }

                var keyProperty = scope.$eval(attrs.uniqueDirective);
                var currentValue = element.val();
                
                var requestObject = {
                    id: keyProperty.id
                };
                var callbackFunction;
                
                switch (keyProperty.property) {
                    case 'user.username': 
                        requestObject.username = currentValue;
                        callbackFunction = 'checkUserUsernameUnique';
                    break;

                    case 'user.identificationNumber': 
                        requestObject.identificationNumber = currentValue;
                        callbackFunction = 'checkUserIdentificationNumberUnique';
                    break;

                    case 'patient.identificationNumber': 
                        requestObject.identificationNumber = currentValue;
                        callbackFunction = 'checkPatientIdentificationNumberUnique';
                    break;

                    default:
                        // code

                    break;
                }
                
                if (angular.isDefined(callbackFunction)) {
                    AppService.uniques[callbackFunction](requestObject, function (response) {
                        // Se obtiene una respuesta y se validan los datos
                        if (response.data) {
                            if (currentValue == element.val()) {
                                ngModel.$setValidity('unique', response.data.isUnique);
                            }
                            $log.log('unique? ' + response.data.isUnique)
                        }
                    }, function() {
                        ngModel.$setValidity('unique', false);
                        $log.log('fail unique.');
                    });                    
                }
                
            });
        }
    }
}]);