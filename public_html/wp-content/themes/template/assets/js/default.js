(function(kukua) {
    'use strict';

    kukua.onDomReady = function() {
		kukua.matchHeight();
		kukua.video();
    };

	/**
	 * Match the heights on the blog page
	 */
	kukua.matchHeight = function() {
		$(".js-match-height").matchHeight();
	};

	/**
	 * Modal box with video
	 */
	kukua.video = function() {

	};
})(window.kukua = window.kukua || {});
$(document).ready(kukua.onDomReady);
