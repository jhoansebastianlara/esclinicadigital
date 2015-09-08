/**
*   @description
*   Script que contiene todas las constantes de la aplicación.
*   
*   @autor: Sebastián Lara <sebastianlara@mobigeek.co>
*
*   @date: 10/11/2014
*/

/**
*   Variable TEMPORAL de configuración de la aplicación
*/
var CONFIG = {
    SPECIALITY_ID: 1, // Ginecología, se debe traer del server.
};

var CONSTANTS = {
    // strings
    EMPTY : "",
    SPACE : " ",
    CURRENT: 'current',
    ACTIVE: 'active',
    SELECTED: 'selected',

    MONT_LIST: [
        {
            ID: '1',
            NAME: 'january'
        },
        {
            ID: '2',
            NAME: 'february'
        },
        {
            ID: '3',
            NAME: 'march'
        },
        {
            ID: '4',
            NAME: 'april'
        },
        {
            ID: '5',
            NAME: 'may'
        },
        {
            ID: '6',
            NAME: 'june'
        },
        {
            ID: '7',
            NAME: 'july'
        },
        {
            ID: '8',
            NAME: 'august'
        },
        {
            ID: '9',
            NAME: 'september'
        },
        {
            ID: '10',
            NAME: 'october'
        },
        {
            ID: '11',
            NAME: 'november'
        },
        {
            ID: '12',
            NAME: 'december'
        }
    ],
    
    SETTINGS: {
        /**
        *   Configuración de conexión a la API
        */
        API: {
            HOST: "http://base.esclinicadigital.dev",
        },

    },

    NG_AUTOCOMPLETE: {
        DEFAULT: {
            watchEnter: true,
            types: '(cities)'
        },
        CITIES_CO: {
            watchEnter: true,
            country: 'co',
            types: '(cities)'
        }
    },

    /**
    *   Constantes que pertenecen al funcionamiento de la Aplicación.
    */
    APP: {
        // pimienta para la encryptacion de contrasenias
        PEPPER: 'pepper here!',
        
        // separador para el token de seguridad
        AUTORIZATION_SEPARATOR: '@@',
        
        // Cabeceras personalizadas de la aplicación
        HEADERS_CONFIG: {
            // token de autenticación
            AUTH_TOKEN_KEY: 'authToken'
        },
        
        LOCAL_STORAGE: {
            IS_CONNECTED: 'isConnected',
            USER_DATA: 'userData',
            AUTH_TOKEN: 'authToken',
        },

        PATIENTS: {
            // cantidad máxima de parentescos de un paciente
            CUSTODIAN_MAX: 10,            
        },

        MEDICAL_RECORDS: {
            DIAGNOSTICS: {
                /**
                *   configuración general para los inputs de los diagnósticos
                *   docs: https://github.com/ghiden/angucomplete-alt
                */
                CONFIG: {
                    LABELS: {
                        MAIN: 'DX Principal',
                        RELATED: 'DX Relacionado',
                    },
                    INPUT_ID_PATTERN: 'diagnosticInput-',
                    PLACEHOLDER: "Codigo o nombre CIE",
                    PAUSE: "300",
                    REMOTE_URL: "/cies?",

                    /**
                    *   Función responsable de formatear los parámetros que se van a 
                    *   enviar al servidor.
                    */
                    REMOTE_URL_REQUEST_FORMATTER: function(str) {
                        console.log('REMOTE_URL_REQUEST_FORMATTER: ', str);
                        return {
                            filter: str, 
                            //timestamp: +new Date()
                        };
                    },

                    /**
                    *   Función que recibe la información que es enviada desde el server
                    *   cuando se esta usando un campo de autocomplete.
                    */
                    REMOTE_URL_RESPONSE_FORMATTER: function(resp) {
                        console.log('REMOTE_URL_RESPONSE_FORMATTER: ', resp);

                        return resp;
                    },

                    REMOTE_URL_DATA_FIELD: "data",

                    TITLE_FIELD: "name",
                    DESCRIPTION_FIELD: "code",
                    MIN_LENGTH: "2",
                    AUTO_MATCH: "true",
                    TEXT_SEARCHING: "Buscando ...",
                    TEXT_NO_RESULTS: "Diagnóstico no encontrado",
                    INPUT_CLASS: "angucomplete-input-item",
                    MATCH_CLASS: "angucomplete-input-match",
                },
                // cantidad máxima de diagnósticos para una evolución de historia clínica
                MAX: 4
            },
            // Tipos de diagnóstico principal para la  historia clínica.
            MAIN_DIAGNOSTIC_TYPE_LIST: [
                {
                    code: "2",
                    name: "CONFIRMADO NUEVO",
                }, {
                    code: "3",
                    name: "CONFIRMADO REPETIDO",
                }, {
                    code: "1",
                    name: "IMPRESIÓN DIAGNÓSTICA",
                }
            ]
        },

        DATE_FORMATS: {
            yyyy_mm_dd: 'yyyy-mm-dd',
            mm_dd_yyyy: 'mm-dd-yyyy',
            dd_mm_yyyy: 'dd-mm-yyyy',
            mmddyyyy: 'mm/dd/yyyy',
            ddmmyyyy: 'dd/mm/yyyy',
            yyyy_MM_dd: 'yyyy-MM-dd',
        },

        // nombres de los archivos que contienen los strings de la aplicación.
        LANG_FILES: {
            COMMON: 'common',
            FORM: 'form',
            LIST: 'list',
            LOGIN_FORM: 'loginForm',
            TOP_BAR: 'topBar',
            USER_FORM: 'userForm',
            USER_LIST: 'userList',
        },

        CODES: {
            /**
            *   constantes para los codigos internos utilizados
            */
            CUSTOM: {
                CODE_SUCCESS_LOG_OUT : '30',
                CODE_COULD_NOT_AUTHENTICATE : '32',
                CODE_PAGE_NOT_EXIST : '34',
                NOT_DATA_FOUND : '35',
                CODE_ACCOUNT_SUSPENDED : '64',
                CODE_INVALID_SECURITY_HASH : '88',
                CODE_INVALID_API_KEY : '89',
                CODE_OBJECT_NOT_FOUND : '104',
                CODE_INTERNAL_ERROR : '131',
                CODE_UNAUTHORIZED : '179',
                CODE_WRONG_ARGUMENTS : '185',
                CODE_NOT_ALLOWED_METHOD : '190',
            },
            /**
            *   constantes para los codigos http utilizados
            */
            HTTP: {
                HTTP_CODE_SUCCESS : '200',
                HTTP_CODE_BAD_REQUEST : '400',
                HTTP_CODE_UNAUTHORIZED : '401',
                HTTP_CODE_FORBIDDEN : '403',
                HTTP_CODE_NOT_FOUND : '404',
                HTTP_CODE_INTERNAL_ERROR : '500',
                HTTP_CODE_SERVICE_UNAVAILABLE : '503',
            }
        }
    },
    
    REST_ACTIONS: {
        INDEX: 'index',
        CREATE: 'create',
        STORE: 'store',
        SHOW: 'show',
        EDIT: 'edit',
        UPDATE: 'update',
        DESTROY: 'destroy',
    },    

};

/**
*   Variable que contiene la configuración de todos los módulos de la aplicación.
*/
var MODULES = {
    LOGIN: {
        ID: "loginItemMenu", // identificador del menú
        ROUTE: "LOGIN",
        PATH: "/login", // URL
        TEMPLATE_URL: "views/user/auth/loginForm.html",
        CONTROLLER: "AuthController",
        NAME: "Login", // Nombre que se muestra, este se reemplaza dependiendo el idioma. Ver TopBarController.js
        IS_LOGIN: true, // indica que es la página para iniciar sesión.
        IS_OTHERWISE: true, // Página por defecto.
        DISPLAY_IN_TOPBAR: false, // para indicar si se muestra o no en el "topBar".
        ORDER: '', // orden de aparicion en el topBar, solo funciona si DISPLAY_IN_TOPBAR: true;
    },

    DASH: {
        ID: "dashItemMenu",
        ROUTE: "DASH",
        PATH: "/dash",
        TEMPLATE_URL: "views/app/dashboard.html",
        CONTROLLER: "DashboardController",
        NAME: "Inicio",
        DISPLAY_IN_TOPBAR: true,
        ORDER: '1',
    },

    USERS: {
        ID: "usersItemMenu",
        ROUTE: "USERS",
        PATH: "/users",
        TEMPLATE_URL: "views/user/userList.html",
        CONTROLLER: "UserController",
        RESOLVE: {
            REST_ACTION: function() {
                /**
                *   Se le indica al controlador que se usara para listar los usuarios.
                */
                return CONSTANTS.REST_ACTIONS.INDEX;
            }
        },
        NAME: "Usuarios",
        DISPLAY_IN_TOPBAR: true,
        ORDER: '2',
        ACTIONS: {
            CREATE: {
                ID: "usersCreateItemMenu",
                ROUTE: "USERS",
                PATH: "/users/create",
                TEMPLATE_URL: "views/user/userForm.html",
                CONTROLLER: "UserController",
                RESOLVE: {
                    REST_ACTION: function() {
                        /**
                        *   Se le indica al controlador que se usara para agregar un
                        *   usuario.
                        */
                        return CONSTANTS.REST_ACTIONS.STORE;
                    }
                },
                NAME: "Nuevo Usuario",
                DISPLAY_IN_TOPBAR: false,
                ORDER: '',
            }, 

            EDIT: {
                ID: "usersUpdateItemMenu",
                ROUTE: "USERS",
                PATH: "/users/edit/:userId",
                TEMPLATE_URL: "views/user/userForm.html",
                CONTROLLER: "UserController",
                RESOLVE: {
                    REST_ACTION: function() {
                        /**
                        *   Se le indica al controlador que se usara para actualizar 
                        *   un usuario.
                        */
                        return CONSTANTS.REST_ACTIONS.UPDATE;
                    }
                },
                NAME: "Actualizar Usuario",
                DISPLAY_IN_TOPBAR: false,
                ORDER: '',
            }
        }
    },

    PATIENTS: {
        ID: "patientsItemMenu",
        ROUTE: "PATIENTS",
        PATH: "/patients",
        TEMPLATE_URL: "views/patient/patientList.html",
        CONTROLLER: "PatientController",
        RESOLVE: {
            REST_ACTION: function() {
                /**
                *   Se le indica al controlador que se usara para listar.
                */
                return CONSTANTS.REST_ACTIONS.INDEX;
            }
        },
        NAME: "Pacientes",
        DISPLAY_IN_TOPBAR: true,
        ORDER: '3',
        ACTIONS: {
            CREATE: {
                ID: "patientsCreateItemMenu",
                ROUTE: "PATIENTS",
                PATH: "/patients/create",
                TEMPLATE_URL: "views/patient/patientForm.html",
                CONTROLLER: "PatientController",
                RESOLVE: {
                    REST_ACTION: function() {
                        /**
                        *   Se le indica al controlador que se usara para agregar un
                        *   registro.
                        */
                        return CONSTANTS.REST_ACTIONS.STORE;
                    }
                },
                NAME: "Nuevo Paciente",
                DISPLAY_IN_TOPBAR: false,
                ORDER: '',
            }, 

            SHOW: {
                ID: "patientsShowItemMenu",
                ROUTE: "PATIENTS",
                PATH: "/patients/:patientId",
                TEMPLATE_URL: "views/patient/patientDetail.html",
                CONTROLLER: "PatientController",
                RESOLVE: {
                    REST_ACTION: function() {
                        /**
                        *   Se le indica al controlador que se usara para ver el detalle de 
                        *   un registro.
                        */
                        return CONSTANTS.REST_ACTIONS.SHOW;
                    }
                },
                NAME: "Ver Paciente",
                DISPLAY_IN_TOPBAR: false,
                ORDER: '',
            }, 

            EDIT: {
                ID: "patientsUpdateItemMenu",
                ROUTE: "PATIENTS",
                PATH: "/patients/edit/:patientId",
                TEMPLATE_URL: "views/patient/patientForm.html",
                CONTROLLER: "PatientController",
                RESOLVE: {
                    REST_ACTION: function() {
                        /**
                        *   Se le indica al controlador que se usara para actualizar 
                        *   un registro.
                        */
                        return CONSTANTS.REST_ACTIONS.UPDATE;
                    }
                },
                NAME: "Actualizar Paciente",
                DISPLAY_IN_TOPBAR: false,
                ORDER: '',
            }, 

            MEDICAL_RECORD: {
                ID: "patientsMedicalRecordItemMenu",
                ROUTE: "PATIENTS",
                PATH: "/patients/medicalRecord/:patientId",
                TEMPLATE_URL: "views/patient/medicalRecord/medicalRecord.html",
                CONTROLLER: "MedicalRecordController",
                RESOLVE: {
                    REST_ACTION: function() {
                        /**
                        *   Se le indica al controlador que se usara para abtener la informacion inicial de 
                        *   un registro.
                        */
                        return CONSTANTS.REST_ACTIONS.INDEX;
                    }
                },
                NAME: "Historia Clínica",
                DISPLAY_IN_TOPBAR: false,
                ORDER: '',
                ACTIONS: {
                    CREATE: {
                        ID: "patientsMedicalRecordCreateItemMenu",
                        ROUTE: "PATIENTS",
                        PATH: "/patients/medicalRecord/create",
                        TEMPLATE_URL: "views/patient/medicalRecord/medicalRecordForm.html",
                        CONTROLLER: "MedicalRecordController",
                        RESOLVE: {
                            REST_ACTION: function() {
                                /**
                                *   Se le indica al controlador que se usara para agregar un
                                *   registro.
                                */
                                return CONSTANTS.REST_ACTIONS.STORE;
                            }
                        },
                        NAME: "Nueva Evolución",
                        DISPLAY_IN_TOPBAR: false,
                        ORDER: '',
                    },
                }
            }, 

            MEDICAL_HISTORY: {
                ID: "patientsMedicalHistoryItemMenu",
                ROUTE: "PATIENTS",
                PATH: "/patients/medicalHistory/:patientId",
                TEMPLATE_URL: "views/patient/medicalHistory/medicalHistory.html",
                CONTROLLER: "MedicalHistoryController",
                RESOLVE: {
                    REST_ACTION: function() {
                        /**
                        *   Se le indica al controlador que se usara para abtener la informacion inicial.
                        */
                        return CONSTANTS.REST_ACTIONS.INDEX;
                    }
                },
                NAME: "Antecedentes Médicos",
                DISPLAY_IN_TOPBAR: false,
                ORDER: '',
            }
        }
    },

    CALENDAR: {
        ID: "calendarItemMenu",
        ROUTE: "CALENDAR",
        PATH: "/calendar",
        TEMPLATE_URL: "views/calendar/calendar.html",
        CONTROLLER: "CalendarController",
        NAME: "Calendario",
        DISPLAY_IN_TOPBAR: true,
        ORDER: '4',
    }
};


/**
*   Constante que contiene la configuración de los modals
*   que se muestran en la aplicación.
*/
var MODALS = {
    APP_ERROR: {
        templateUrl: 'views/app/modals/appErrorModal.html',
        controller: 'AppErrorModalController',
        resolve: {
            errorCode: function() {
                /**
                *   Se le indica al controlador el codigo del error que ocurrio.
                */
                return '-1';
            }
        }
    },
    
    NOT_DATA_FOUND: {
        templateUrl: 'views/app/modals/notDataFoundModal.html',
        controller: 'NotDataFoundModalController',
        resolve: {
            options: function() {
                /**
                *   Se le indica al controlador el codigo del registro no encontrado
                */
                return {};
            }
        }
    },

    LOCAL_STORAGE_UNSUPPORTED: {
        templateUrl: 'views/app/modals/localStorageUnsupportedModal.html',
        controller: 'LocalStorageUnsupportedModalController',
    },
};

/**
*   Constante que contiene configuraciones de negocio
*/
var BUSINESS = {
    USER: {
        PASSWORD_MIN_LENGTH: 5,
        PASSWORD_MAX_LENGTH: 15
        
    }
};


/*
*    Se registran las constantes en la variable principal.
*/
CONSTANTS.CONFIG = CONFIG;
CONSTANTS.MODULES = MODULES;
CONSTANTS.MODALS = MODALS;
CONSTANTS.BUSINESS = BUSINESS;

myApp.constant('CONSTANTS', CONSTANTS);

/**
*   accion por defecto, sirve para cuando a un controlador no 
*   le llega la accion rest por alguna razón.
*/

myApp.constant('REST_ACTION', CONSTANTS.REST_ACTIONS.UPDATE);

