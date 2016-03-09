<?php

/**
 * Bootstrap our application
 *
 * LICENSE: This source file is subject to version 3-0.0 of the GPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/licenses/gpl-3.0.txt. If you did not receive a copy of
 * the GPL License and are unable to obtain it through the web, please
 * send a note to licenses@gnu.org so we can mail you a copy immediately.
 *
 * @category	Template
 * @package		Controllers
 * @author		Siebren Kranenburg <siebren@kukua.cc>
 * @copyright	2016 Kukua B.V.
 *
 * @since		2016-02-22
 * @version		2.0.0
 * @license		http://www.gnu.org/licenses/gpl-3.0.txt
 */
namespace Template\Bootstrap;

class Init {

    public static $root;

    /**
     * \Bootstrap\Init Constructor
     * Triggers spl_autoload, if the class has not been
     * included / found yet.
     *
     * @access public
     * @return void
     */
    public function __construct() {
        self::$root = get_template_directory() . DIRECTORY_SEPARATOR;
        spl_autoload_register(array($this, 'autoload'));
    }

    /**
     * Autoload | Only autoload our own namespaces
     *
     * @access public
     * @param  string $class | path of file
     * @return void
     */
    public function autoload($class) {
        if (preg_match('/^Template/', $class)) {
            $class = preg_replace("/^Template\\\\/", "", $class);
            $class = preg_replace("/\\\\/", DIRECTORY_SEPARATOR, $class);
            require_once self::$root . $class . ".php";
        }
    }

	/**
	 * Initiate default wordpress settings
	 *
	 * @access public
	 * @return void
	 */
    public function initWordPress() {
		(new \Template\Settings\Defaults());
		(new \Template\Settings\Footer());
    }
}
