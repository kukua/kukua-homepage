(function(kukua) {
    'use strict';

    kukua.onDomReady = function() {
		kukua.matchHeight();
    };

	/**
	 * Match the heights on the blog page
	 */
	kukua.matchHeight = function() {
		$(".js-match-height").matchHeight();
	}

})(window.kukua = window.kukua || {});
$(document).ready(kukua.onDomReady);
