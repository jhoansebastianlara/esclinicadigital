'use strict';

/**
*	Filtro responsable de mantener el tamaño de un numero fijo. 
*	Se rellena con "0" para llegar al tamaño especificado.
*
*	@author: Sebastián Lara <sebastian@mobigeek.co>
*
*	@date: 18/02/2015
*/

AppFilter.filter('NumberFixedLength', function () {
    return function (n, len) {
        var num = parseInt(n, 10);
        len = parseInt(len, 10);
        if (isNaN(num) || isNaN(len)) {
            return n;
        }
        num = '' + num;
        while (num.length < len) {
            num = '0' + num;
        }
        return num;
    };
});