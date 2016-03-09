<?php

/**
 * This file contains the partial entity
 *
 * LICENSE: This source file is subject to version 3-0.0 of the GPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/licenses/gpl-3.0.txt. If you did not receive a copy of
 * the GPL License and are unable to obtain it through the web, please
 * send a note to licenses@gnu.org so we can mail you a copy immediately.
 *
 * @category	Template
 * @package		Entities
 * @author		Siebren Kranenburg <siebren@kukua.cc>
 * @copyright	2016 Kukua B.V.
 *
 * @since		2016-03-02
 * @version		2.0.0
 * @license		http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace Template\Entities;

use \Template\Settings\Constants;

class Partial {

    public $layoutName = "";
    public $fields = array();

	/**
	 * Load partials
	 *
	 * @static
	 * @access public
	 * @param  Array	$params
	 * @param  boolean	$full
	 * @return void
	 */
    public static function load(Array $params, $full = true) {
        $return = Array();
        $validParams = self::validateParams($params);
        if ($validParams !== true) {
            return $return;
        }

        $partials = get_field("partial", $params["p"]);
        $validPartials = self::validatePartials($partials);
        if ($validPartials !== true) {
            return $return;
        }

        foreach($partials as $partial) {
            $return[] = self::acfFieldsToObject($partial);
        }

        return $return;
    }

	/**
	 * Load partials
	 *
	 * @static
	 * @access public
	 * @param  Array	$params
	 * @param  boolean	$full
	 * @return void
	 */
    public static function validateParams($params) {
        return isset($params["p"]) && is_numeric($params["p"]);
    }

	/**
	 * Validate partials
	 *
	 * @static
	 * @access public
	 * @param  Array	$partials
	 * @return void
	 */
    public static function validatePartials($partials) {
        return is_array($partials) && count($partials) > 0;
    }

	/**
	 * convert ACF Fields to object
	 *
	 * @static
	 * @access public
	 * @param  Array	$acfArray
	 * @return void
	 */
    public static function acfFieldsToObject($acfArray) {
        $partial = new Partial();
        $partial->layoutName = $acfArray["acf_fc_layout"];
        $partial->fields     = $acfArray;

        return $partial;
    }

	/**
	 * render partial
	 *
	 * @static
	 * @access public
	 * @return void
	 */
    public function render() {
        foreach($this->fields as $key => $val) {
            ${$key} = $val;
        }

		$path = \Template\Bootstrap\Init::$root .
                Constants::DIR_PARTIALS .
                DIRECTORY_SEPARATOR;

        include $path . $this->layoutName . '.php';
    }
}
