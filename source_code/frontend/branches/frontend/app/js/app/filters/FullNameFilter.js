'use strict';

/**
*	Filtro responsable de devolver el nombre completo de un usuario, cliente, ...
*
*	@author: Sebastián Lara <sebastian@mobigeek.co>
*
*	@date: 17/11/2014
*/

AppFilter.filter('FullNameFilter', ['UtilitiesFactory', 'CONSTANTS', function(UtilitiesFactory, CONSTANTS) {
    return function(name, lastname) {
      	var fullname = null;

      	if (!UtilitiesFactory.isEmpty(name)) {
      		fullname = name;
      	}

      	if (!UtilitiesFactory.isEmpty(lastname)) {
      		fullname = fullname.concat(CONSTANTS.SPACE, lastname);;
      	}

    	return fullname;
    };
}]);

