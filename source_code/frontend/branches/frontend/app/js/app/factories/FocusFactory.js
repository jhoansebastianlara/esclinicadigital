/**
*	Fábrica responsable de realizar el "focus" a un elemento
*	por su "id".
*
*	@author: Sebastián Lara <sebastianlara@mobigeek.co>
*
*	@date: 13/11/2014
*
*/

AppFactory.factory('FocusFactory', function($timeout) {
	return function(id) {
		// timeout makes sure that is invoked after any other event has been triggered.
		// e.g. click events that need to run before the focus or
		// inputs elements that are in a disabled state but are enabled when those events
		// are triggered.
		$timeout(function() {
			var element = document.getElementById(id);
			if (element) {
				element.focus();
			}
		});
	};
})