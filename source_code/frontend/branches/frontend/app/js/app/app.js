'use strict';

/**
*   Declare app level module which depends on views, and components
*   
*   ngLocalize:
*   @referene: http://doshprompt.github.io/angular-localization/
*   {{ 'common.helloWorld' | i18n:{name:'!Adam'} }}
*
*   mm.foundation:
*   @reference: http://pineconellc.github.io/angular-foundation/
*
*   angular-loading-bar:
*   @reference: http://chieffancypants.github.io/angular-loading-bar/#
*
*   ngAutocomplete
*   https://github.com/wpalahnuk/ngAutocomplete
*   google places autocomplete info: https://developers.google.com/maps/documentation/javascript/places
*   
*   angucomplete-alt
*   https://github.com/ghiden/angucomplete-alt
*
*   ng-tags
*   @reference: http://mbenford.github.io/ngTagsInput/
*
*   angucomplete-alt
*   docs: https://github.com/ghiden/angucomplete-alt
*
*/

var myApp = angular.module('myApp', [
    /**
    *   Dependencias de terceros.
    */
    'ngRoute',
    'ngResource',
    'ngLocalize',
    'mm.foundation',
    'angular-loading-bar',
    'ngAutocomplete',
    'ngTagsInput',
    'angucomplete-alt',

    
    /**
    *   Dependencias de la aplicación.
    */
    'AppController',
    'AppFactory',
    'AppFilter',
    'AppService',
    'AppDirective',
]);

/**
*   Función que se ejecuta una vez se inicia la aplicación.
*/
myApp.run(function($rootScope, $location, CONSTANTS, UtilitiesFactory, FocusFactory, ModalService, $log) {
    $rootScope.utilities = UtilitiesFactory;
    $rootScope.CONSTANTS = CONSTANTS;
    $rootScope.focus = FocusFactory;
    $rootScope.modal = ModalService;
    $rootScope.currentModule = {}; // módulo en el que se encuentra la aplicación.
    
    /**
    *   Headers gererales de la aplicación que se envian en las peticiones al "backend".
    */
    $rootScope.headersApp = {
        'Accept': 'application/json'
    }
    
    /**
    *   Se verifica que el cliente soporte el "localStorage" para poder utilizar la aplicación.
    */
    if (!$rootScope.utilities.localStorage.isSupport) {
        // se muestra el modal informando del error en la aplicación.
        ModalService.open(CONSTANTS.MODALS.LOCAL_STORAGE_UNSUPPORTED);
    }
    
    /**
    *   Se maneja el evento de cambio de ruta en la aplicación. Solo se deja acceder a ciertas
    *   rutas siempre y cuando el usuario se encuentre autenticado.
    */
    $rootScope.$on('$routeChangeStart', function(event, next, current) {
        var isConnected = $rootScope.utilities.localStorage.getItem(CONSTANTS.APP.LOCAL_STORAGE.IS_CONNECTED);
        //var authToken = $rootScope.utilities.localStorage.getItem(CONSTANTS.APP.LOCAL_STORAGE.AUTH_TOKEN);
        
        if (!isConnected || $rootScope.utilities.isEmpty(isConnected)) {
            // el usuario no esta autenticado

            // El usuario se envia al login siempre y cuando no lo este.
            if (!next.isLogin) {
                event.preventDefault();
                $location.path('/login');
            }
        } else {
            // Se actualiza el token de seguridad
            //$rootScope.headersApp.authToken = authToken;
            
            // el usuario esta autenticado, se envia a la pagina de inicio.
            if (next.isLogin) {
               event.preventDefault();
               $location.path('/dash');
            }
        }
        
        // Se actualiza el módulo actual de la aplicación.
        $rootScope.currentModule = next;        
    });    
    
});

/**
*   Se configuran las rutas de la aplicación.
*/
myApp.config(
    [
        '$routeProvider', '$locationProvider', 'cfpLoadingBarProvider', 'CONSTANTS', 
        /**
        *   Función donde se configuran las rutas de la aplicación.
        *
        *   RUTA: /users
        *   VISTA: usersList.html
        *   CONTROLADOR: userCtrl
        */
        function($routeProvider, $locationProvider, cfpLoadingBarProvider, CONSTANTS) {
            // para mostrar/ocultar el "spinner" que aparece junto a la barra de carga.
            cfpLoadingBarProvider.includeSpinner = true;

            // Se verifica que el navegador soporte HTML5.
            if (window.history && window.history.pushState) {
                // con esta linea funciona el menu en móviles, es mágica!
                //$locationProvider.html5Mode(true);
            }

            // Se crean las rutas en la aplicación
            createRoutes(CONSTANTS.MODULES);

            /**
            *   Función resposable de crear las rutas de la aplicación
            *   teniendo en cuenta la configuración dada.
            */
            function createRoutes(modules) {
                var otherwiseRoute = {
                    redirectTo: '/'
                };

                var route = {};
                var subRoute = {};

                /**
                *   Se contruyen las rutas teniendo en cuenta la configuraión hecha
                *   en el archivo de constantes.
                */
                angular.forEach(modules, function(module) {
                    /**
                    *   Sólo se configuran las rutas que contienen la propiedad 
                    *   "DISPLAY_IN_TOPBAR" activa.
                    */
                    if (objectHasProperty(module, 'DISPLAY_IN_TOPBAR')) {
                        // Se mapea la ruta según la configuración de cada módulo.
                        route = mapRoute(module);

                        // otherwise
                        if (objectHasProperty(module, 'IS_OTHERWISE')) {
                            otherwiseRoute.redirectTo = module.PATH;
                        }

                        // Se agrega la ruta a la aplicación
                        $routeProvider.when(module.PATH, route);

                        // Se verifica si existen submódulos
                        if (objectHasProperty(module, 'ACTIONS')) {
                            createRoutes(module.ACTIONS);
                            /*
                            angular.forEach(module.ACTIONS, function(subModule) {
                                // Se configura cada subModulo de la aplicación.
                                subRoute = mapRoute(subModule);

                                // Se agrega la ruta a la aplicación
                                $routeProvider.when(module.PATH.concat(subModule.PATH), subRoute);
                            });
                            */
                        }

                    }

                });

                $routeProvider.otherwise(otherwiseRoute);
            }

            

            /**
            *   Función responsable de validar si un objeto contiene un atributo.
            */
            function objectHasProperty(obj, prop) {
                var proto = obj.__proto__ || obj.constructor.prototype;
                return (prop in obj) &&
                    (!(prop in proto) || proto[prop] !== obj[prop]);
            }

            /**
            *   Función responsable de mapear el objeto "route" que sirve
            *   de configuración para crear las rutas en la aplicación.
            *
            *   @param: module, configuración del módulo para crear la ruta.
            *
            *   @return: Object route, objeto mapeado según la configuración
            *   que llega por parámetro.
            */
            function mapRoute(module) {
                var route = {};

                if (objectHasProperty(module, 'ID')) {
                    route.id = module.ID;
                }

                if (objectHasProperty(module, 'TEMPLATE_URL')) {
                    route.templateUrl = module.TEMPLATE_URL;
                }

                if (objectHasProperty(module, 'CONTROLLER')) {
                    route.controller = module.CONTROLLER;
                }

                if (objectHasProperty(module, 'IS_LOGIN')) {
                    route.isLogin = module.IS_LOGIN;
                }

                if (objectHasProperty(module, 'ROUTE')) {
                    route.route = module.ROUTE;
                }

                if (objectHasProperty(module, 'RESOLVE')) {
                    route.resolve = module.RESOLVE;
                }

                return route;
            }
        }
    ],
    /**
    *   Como se necesita consumir una API en un dominio diferente,
    *   se configura el CORS y asi lograr q no se rechace la petición.
    */
    ['$httpProvider', 
        function($httpProvider) {
            $httpProvider.defaults.useXDomain = true;
            delete $httpProvider.defaults.headers.common['X-Requested-With'];
        }
    ]
);

/**
*    Configuración para la internacionalización.
*/

myApp.value('localeConf', {
    basePath: 'languages',
    defaultLocale: 'es-CO',
    sharedDictionary: 'common',
    fileExtension: '.lang.json',
    persistSelection: true,
    cookieName: 'COOKIE_LOCALE_LANG',
    observableAttrs: new RegExp('^data-(?!ng-|i18n)'),
    delimiter: '::',
});

/**
*   Lenguajes que soporta la aplicación.
*/
myApp.value('localeSupported', [
    'en-US',
    'co-CO'
]);

