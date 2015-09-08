'use strict';

/**
*	Filtro responsable de devolver un texto con su letra inicial mayucula 
*
*	@author: Johan Vallejo
*
*	@date: 18/01/2015
*/

AppFilter.filter('capitalize', function() {
    return function(input, scope) {
        return input.substring(0,1).toUpperCase()+input.substring(1);
    }
});