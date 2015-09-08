'use strict';

/**
 *	@description
 *  Fábrica que contiene utilidades generales de la aplicación.
 *
 *	@author: Sebastián Lara <sebastianlara@mobigeek.co>
 *
 *	@date: 08/11/2014
 */

AppFactory.factory('UtilitiesFactory', ['$rootScope', '$filter', '$log', '$q', 
    function($rootScope, $filter, $log, $q) {
    
        var utilities = {
            isEmpty : function (obj) {
                // por defecto se asume que el objeto no esta vacío
                var isEmpty = false;

                if (obj == null) {
                    isEmpty = true;
                } else {
                    // se valida el tipo de objeto
                    if (typeof something === 'undefined') {
                        // es un string simple
                        if ((obj.length == 0) || (obj == '')) {
                            isEmpty = true;
                        }
                    }

                    // ...
                }

                return isEmpty;
            },

            /**
            *   Función responsable de validar si 
            */
            isString : function(obj) {
                return (typeof obj == 'string');  
            },

            /**
            *   Función responsable de verificar si el objeto que llega por parémetro
            *   es una función.
            *
            *   @param: functionToCheck, objeto que representa la función a validar.
            *
            *   @return: boolean, true: el objeto de entrada si es una función,
            *   false: el objeto de entrada no es una función.
            */
            isFunction: function (functionToCheck) {
                var getType = {};
                return functionToCheck && getType.toString.call(functionToCheck) === '[object Function]';
            },

            objectHasProperty: function (obj, prop) {
                var proto = obj.__proto__ || obj.constructor.prototype;
                return (prop in obj) &&
                    (!(prop in proto) || proto[prop] !== obj[prop]);
            },
            
            /**
            *   Función responsable de verificar si dos strings coinciden.
            */
            matchStrings : function (str1, str2) {
                var matchStrings = false;

                //$log.info('str1: ' + str1 + ', str2:' + str2);
                // se verifica que no vengan
                if (!utilities.isEmpty(str1) && !utilities.isEmpty(str2)) {
                    if (str1 == str2) {
                        matchStrings = true;
                    }
                }

                return matchStrings;
            },
            /**
            * Función encargada de verificar si la imagen existe 
            */
            isImage : function (src) {

                var deferred = $q.defer();

                var image = new Image();
                
                image.onerror = function() {
                    deferred.resolve(false);
                };
                image.onload = function() {
                    deferred.resolve(true);
                };
                image.src = src;

                return deferred.promise;
            },
            date: {
                getCurrentDate: function () {
                    return $filter('date')(new Date(), $rootScope.CONSTANTS.APP.DATE_FORMATS.yyyy_MM_dd);
                },
                /**
                *   Función responsable de parsear una fecha de tal forma que 
                *   cumpla con el formato ISO 8601 de AngularJS.
                *
                */
                parseTheDate: function(dateString) {
                    if (utilities.isString(dateString) && !utilities.isEmpty(dateString)) {
                        var properlyFormattedDate = dateString.split(" ").join("T");
                        return new Date(properlyFormattedDate);
                    } else {
                        return null;
                    }
                },

            },

            /**
            *   Contiene validaciones genéricas para uso general en la aplicación
            */
            validations : {
                /**
                *   @description
                *   Función responsable de verificar la validéz de una fecha.
                */
                isValidDate : function (dateString, format) {
                    // suponemos el peor de los casos: la fecha no es valida
                    var isValidDate = false;

                    // rangos de año para validar la fecha
                    var minYear = 1920;
                    var maxYear = 2099;
                    // dias por mes
                    var monthLength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

                    var separatorsList = ['/', '-'];
                    // se verfica el separador
                    var separator = '';
                    for (var i = 0; (i < separatorsList.length) && separator == ''; i++) {
                        if (format.indexOf(separatorsList[i]) > -1) {
                            // se encontro el separador
                            separator = separatorsList[i];
                        }
                    }

                    if (separator == '') {
                        // el separador del formato no esta soportado, se retona false                        
                        return ;
                    }

                    // posiciones del dia, mes y año para las fechas.
                    var posD = 0;
                    var posM = 1;
                    var posY = 2;

                    var avaliableDateFormatsList = [
                        $rootScope.CONSTANTS.APP.DATE_FORMATS.yyyy_mm_dd,
                        $rootScope.CONSTANTS.APP.DATE_FORMATS.mm_dd_yyyy,
                        $rootScope.CONSTANTS.APP.DATE_FORMATS.dd_mm_yyyy,
                        $rootScope.CONSTANTS.APP.DATE_FORMATS.mmddyyyy,
                        $rootScope.CONSTANTS.APP.DATE_FORMATS.ddmmyyyy
                    ];
                    // lista de formatos disponibles para validar
                    
                    // lista de index para saber cual posición es el dia, mes y año luego de hacer el split de la fecha
                    var indexesByFormatsList = [[posY, posM, posD], [posM, posD, posY], [posD, posM, posY], [posM, posD, posY], [posD, posM, 2]];

                    // se valida que las entradas no esten vacias
                    if (!utilities.isEmpty(dateString) && !utilities.isEmpty(format)) {
                        // se busca entre los formatos disponibles el formato a validar
                        var formatIndex = avaliableDateFormatsList.indexOf(format);

                        if (formatIndex >= 0) {
                            // el formato a validar esta disponible, se verifica que sea una fecha real

                            // se separa la fecha para obtener el día, el mes y el año.
                            var parts = dateString.split(separator);

                            var day   = parseInt(parts[indexesByFormatsList[formatIndex][posD]], 10);
                            var month = parseInt(parts[indexesByFormatsList[formatIndex][posM]], 10);
                            var year  = parseInt(parts[indexesByFormatsList[formatIndex][posY]], 10);

                            var isValidYear = false;
                            var isValidMonth = false;
                            var isValidDay = false;

                            // se verifica el rango para el año y el mes
                            if ((year > minYear && year < maxYear)) {
                                isValidYear = true;
                            }

                            if (month > 0 && month <= 12) {
                                isValidMonth = true;
                            }

                            // validación para los años bisiestos
                            if ((year % 400) == 0 || (year % 100 != 0 && year % 4 == 0)) {
                                monthLength[1] = 29;
                            }

                            // se verifica la validez del día
                            if ((day > 0) && (day <= monthLength[month - 1])) {
                                isValidDay = true;
                            }

                            isValidDate = (isValidYear && isValidMonth && isValidDay);                        
                        }
                    }
                    
                    return isValidDate;   
                },

                /**
                *   Función responsable de validar todos los campos de un formulario
                */
                validateForm : function (formToValidate) {
                    var isValidForm = true;

                    // se valida que el formulario no este vacio
                    if (!formToValidate || (formToValidate == null)) {
                        isValidForm = false;                
                    } else {
                        for (var formItemKey in formToValidate) {
                            
                            var formItem = formToValidate[formItemKey];
                            
                            for (var prop in formItem) {
                                // solo los inputs del form tienen la propiedad $invalid
                                if (prop == '$invalid' && formItem[prop]) {
                                    if (isValidForm && formItem['$name']) {
                                        //  si isValidForm es true, quiere decir que es el 
                                        //  primer elemento inválido encontrado, se le hace focus (se referencia por nombre)
                                        //angular.element('[name="' + formItem['$name'] + '"]').trigger('focus');
                                        $rootScope.focus(formItem['$name'])
                                    }
                                    // la validación del form falla
                                    isValidForm = false;
                                    // se "ensucia" el campo para que se muestren los msjs de error
                                    formToValidate[formItemKey].$dirty = true;
                                }
                            }
                        }               
                    }

                    return isValidForm;
                }
            },
            localStorage : {
                /**
                *   Función responsable de verificar si el almacenamiento local html5 
                *   esta disponible.
                */
                isSupport : function () {
                    try {
                        return (('localStorage' in window) && (window['localStorage'] !== null));
                    } catch (e) {
                        return false;
                    }
                },

                /**
                *   Función responsable de crear un nuevo item en el "local storage"
                */
                addItem : function(key, value) {
                    // se asume el peor de los casos
                    var result = false;

                    if (utilities.isString(key) && !utilities.isEmpty(value)) {
                        localStorage.setItem(key, value);
                        result = true;
                    }

                    return result;
                },

                /**
                *   Función responsable de obtener el valor de una variable del 
                *   "local storage" por su llave
                **/
                getItem : function (key) {
                    var result = null;

                    if (utilities.isString(key)) {
                        result = localStorage.getItem(key);
                    }

                    return result;
                },

                /**
                *   Función responsable de eliminar un item del "local storage"
                */
                removeItem : function (key) {
                    var result = null;

                    if (utilities.isString(key)) {
                        localStorage.removeItem(key);
                        result = true;
                    }

                    return result;
                },

                /**
                *   Función responsable de obtener todos items almacenados
                *   en el "local storage".
                */
                viewItems : function() {

                },

                /**
                *   Función responsable de obtener todos items almacenados
                *   en el "local storage".
                */
                clear : function() {
                    localStorage.clear();
                }

            },
            encrypt : {
                /**
                *  Funcion responsable de encriptar los datos enviados
                */
                encryptToB64: function (key, amount) {
                    if (utilities.isEmpty(amount)) {
                        // por defecto se hace solo una iteración.
                        amount = 1;
                    }

                    var data = key + "/" + $rootScope.CONSTANTS.APP.PEPPER;

                    for (var i = 0; i < amount; i++){
                        data = window.btoa(data);
                    }

                    return data;
                },
                //  discuss at: http://phpjs.org/functions/sha1/
                // original by: Webtoolkit.info (http://www.webtoolkit.info/)
                // improved by: Michael White (http://getsprink.com)
                // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
                //    input by: Brett Zamir (http://brett-zamir.me)
                //  depends on: utf8_encode8
                //   example 1: sha1('Kevin van Zonneveld');
                //   returns 1: '54916d2e62f65b3afa6e192e6a601cdbe5cb5897'
                sha1: function (str) {                

                    var rotate_left = function(n, s) {
                        var t4 = (n << s) | (n >>> (32 - s));
                        return t4;
                    };

                    /*var lsb_hex = function (val) { // Not in use; needed?
                      var str="";
                      var i;
                      var vh;
                      var vl;

                      for ( i=0; i<=6; i+=2 ) {
                        vh = (val>>>(i*4+4))&0x0f;
                        vl = (val>>>(i*4))&0x0f;
                        str += vh.toString(16) + vl.toString(16);
                      }
                      return str;
                    };*/

                    var cvt_hex = function(val) {
                        var str = '';
                        var i;
                        var v;

                        for (i = 7; i >= 0; i--) {
                            v = (val >>> (i * 4)) & 0x0f;
                            str += v.toString(16);
                        }
                        return str;
                    };

                    var blockstart;
                    var i, j;
                    var W = new Array(80);
                    var H0 = 0x67452301;
                    var H1 = 0xEFCDAB89;
                    var H2 = 0x98BADCFE;
                    var H3 = 0x10325476;
                    var H4 = 0xC3D2E1F0;
                    var A, B, C, D, E;
                    var temp;

                    str = utilities.encode.utf8_encode(str);
                    var str_len = str.length;

                    var word_array = [];
                    for (i = 0; i < str_len - 3; i += 4) {
                        j = str.charCodeAt(i) << 24 | str.charCodeAt(i + 1) << 16 | str.charCodeAt(i + 2) << 8 | str.charCodeAt(i + 3);
                        word_array.push(j);
                    }

                    switch (str_len % 4) {
                        case 0:
                            i = 0x080000000;
                            break;
                        case 1:
                            i = str.charCodeAt(str_len - 1) << 24 | 0x0800000;
                            break;
                        case 2:
                            i = str.charCodeAt(str_len - 2) << 24 | str.charCodeAt(str_len - 1) << 16 | 0x08000;
                            break;
                        case 3:
                            i = str.charCodeAt(str_len - 3) << 24 | str.charCodeAt(str_len - 2) << 16 | str.charCodeAt(str_len - 1) <<
                                8 | 0x80;
                            break;
                    }

                    word_array.push(i);

                    while ((word_array.length % 16) != 14) {
                        word_array.push(0);
                    }

                    word_array.push(str_len >>> 29);
                    word_array.push((str_len << 3) & 0x0ffffffff);

                    for (blockstart = 0; blockstart < word_array.length; blockstart += 16) {
                        for (i = 0; i < 16; i++) {
                            W[i] = word_array[blockstart + i];
                        }
                        for (i = 16; i <= 79; i++) {
                            W[i] = rotate_left(W[i - 3] ^ W[i - 8] ^ W[i - 14] ^ W[i - 16], 1);
                        }

                        A = H0;
                        B = H1;
                        C = H2;
                        D = H3;
                        E = H4;

                        for (i = 0; i <= 19; i++) {
                            temp = (rotate_left(A, 5) + ((B & C) | (~B & D)) + E + W[i] + 0x5A827999) & 0x0ffffffff;
                            E = D;
                            D = C;
                            C = rotate_left(B, 30);
                            B = A;
                            A = temp;
                        }

                        for (i = 20; i <= 39; i++) {
                            temp = (rotate_left(A, 5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1) & 0x0ffffffff;
                            E = D;
                            D = C;
                            C = rotate_left(B, 30);
                            B = A;
                            A = temp;
                        }

                        for (i = 40; i <= 59; i++) {
                            temp = (rotate_left(A, 5) + ((B & C) | (B & D) | (C & D)) + E + W[i] + 0x8F1BBCDC) & 0x0ffffffff;
                            E = D;
                            D = C;
                            C = rotate_left(B, 30);
                            B = A;
                            A = temp;
                        }

                        for (i = 60; i <= 79; i++) {
                            temp = (rotate_left(A, 5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6) & 0x0ffffffff;
                            E = D;
                            D = C;
                            C = rotate_left(B, 30);
                            B = A;
                            A = temp;
                        }

                        H0 = (H0 + A) & 0x0ffffffff;
                        H1 = (H1 + B) & 0x0ffffffff;
                        H2 = (H2 + C) & 0x0ffffffff;
                        H3 = (H3 + D) & 0x0ffffffff;
                        H4 = (H4 + E) & 0x0ffffffff;
                    }

                    temp = cvt_hex(H0) + cvt_hex(H1) + cvt_hex(H2) + cvt_hex(H3) + cvt_hex(H4);
                    return temp.toLowerCase();
                }
            },
            encode: {
                utf8_encode: function(argString) {
                    //  discuss at: http://phpjs.org/functions/utf8_encode/
                    // original by: Webtoolkit.info (http://www.webtoolkit.info/)
                    // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

                    if (argString === null || typeof argString === 'undefined') {
                        return '';
                    }

                    var string = (argString + ''); // .replace(/\r\n/g, "\n").replace(/\r/g, "\n");
                    var utftext = '',
                        start, end, stringl = 0;

                    start = end = 0;
                    stringl = string.length;
                    for (var n = 0; n < stringl; n++) {
                        var c1 = string.charCodeAt(n);
                        var enc = null;

                        if (c1 < 128) {
                            end++;
                        } else if (c1 > 127 && c1 < 2048) {
                            enc = String.fromCharCode(
                                (c1 >> 6) | 192, (c1 & 63) | 128
                            );
                        } else if ((c1 & 0xF800) != 0xD800) {
                            enc = String.fromCharCode(
                                (c1 >> 12) | 224, ((c1 >> 6) & 63) | 128, (c1 & 63) | 128
                            );
                        } else { // surrogate pairs
                            if ((c1 & 0xFC00) != 0xD800) {
                                throw new RangeError('Unmatched trail surrogate at ' + n);
                            }
                            var c2 = string.charCodeAt(++n);
                            if ((c2 & 0xFC00) != 0xDC00) {
                                throw new RangeError('Unmatched lead surrogate at ' + (n - 1));
                            }
                            c1 = ((c1 & 0x3FF) << 10) + (c2 & 0x3FF) + 0x10000;
                            enc = String.fromCharCode(
                                (c1 >> 18) | 240, ((c1 >> 12) & 63) | 128, ((c1 >> 6) & 63) | 128, (c1 & 63) | 128
                            );
                        }
                        if (enc !== null) {
                            if (end > start) {
                                utftext += string.slice(start, end);
                            }
                            utftext += enc;
                            start = end = n + 1;
                        }
                    }

                    if (end > start) {
                        utftext += string.slice(start, stringl);
                    }

                    return utftext;
                }
            },            

        };

        return utilities;
      
    }
]);
