/**
*   @description
*   Servicio para mostrar modals en la aplicación.
*   
*   @author: Sebastián Lara <sebastian@mobigeek.co>
*
*   @created: 15/11/2014
*/

AppService.service('ModalService', ['$modal', '$log', 'UtilitiesFactory',

    function($modal, $log, UtilitiesFactory) {

        var factory = {
            /**
            *   Función responsable abrir un modal en la aplicación.
            */
            open: function (modalOptions) {

                // se inicializa el modal
                var modalInstance = $modal.open(modalOptions);

                // callback del modal
                if (modalOptions.callBackFunctions
                    && modalOptions.callBackFunctions.ok
                    && UtilitiesFactory.isFunction(modalOptions.callBackFunctions.ok)) {
                    modalInstance.result.then(
                        modalOptions.callBackFunctions.ok, 
                        modalOptions.callBackFunctions.cancel
                    );                    
                }

            },



        };

        return factory;
    }]

);
