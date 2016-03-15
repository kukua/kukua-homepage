<?php

/**
 * Global defaults
 *
 * LICENSE: This source file is subject to version 3-0.0 of the GPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/licenses/gpl-3.0.txt. If you did not receive a copy of
 * the GPL License and are unable to obtain it through the web, please
 * send a note to licenses@gnu.org so we can mail you a copy immediately.
 *
 * @category	Template
 * @package		Settings
 * @author		Siebren Kranenburg <siebren@kukua.cc>
 * @copyright	2016 Kukua B.V.
 *
 * @since		2016-02-25
 * @version		2.0.0
 * @license		http://www.gnu.org/licenses/gpl-3.0.txt
 */
namespace Template\Settings;

class Menu {

	/**
	 * Class constructor
	 *
	 * @access	public
	 * @return	void
	 */
	public function __construct() {

		/* Register header menu */
		add_action("init", function() {
			register_nav_menu(
				"header-menu", __("Header menu")
			);
		});
	}

	/**
	 * Render given navigation menu
	 *
	 * @static
	 * @access	public
	 * @param	string $menuId
	 * @return	Menu
	 */
	public static function render($menuId) {
		$args = [
			'menu' => $menuId,
			'container_class' => 'collapse navbar-collapse',
			'menu_class' => 'nav navbar-nav navbar-right',
			'depth' => 1,
		];

		wp_nav_menu($args);
	}
}
