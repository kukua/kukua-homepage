<?php

/**
 * This file contains the abstract controller
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
namespace Template\Controllers;

use \Template\Bootstrap\Init as Bootstrap;
use \Template\Settings\Constants as Constants;

class AbstractController {

    public $data = array();

	/**
	 * Class constructor
	 *
	 * @access public
	 * @return void
	 */
    public function __construct() {
        $this->_viewPaths();
		$this->_defineTitle();
		$this->_footer();
    }

    /**
     * Renders the views
     *
     * @access public
     * @param  String $template
     * @param  Array  $viewData
     * @return void
     */
    public function render($template){
        foreach($this->data as $key => $val) {
            ${$key} = $val;
        }

        $path = ABSPATH . Constants::DIR_VIEWS . DIRECTORY_SEPARATOR;

        get_header();
        require_once $path . 'header.php';
        require_once $path .  $template . '.php';
        get_footer();
        require_once $path . 'footer.php';
    }

	/**
	 * Sets basic info
	 *
	 * @access protected
	 * @return void
     */
    protected function _defineTitle() {
        $blogName = get_option('blogname');
        $metaTitle = $blogName;
        $pageTitle = wp_title('', false);
        if (single_post_title('', false) != "") {
            $pageTitle = single_post_title('', false);
        }

        if ($pageTitle != "") {
            $metaTitle = $metaTitle . " | ". $pageTitle;
        } else {
            $pageTitle = $metaTitle;
        }

        //Page title
        $this->data["blogName"]     = $blogName;
        $this->data["pageTitle"]    = $pageTitle;
        $this->data["metaTitle"]    = $metaTitle;
    }

    /**
	 * @access protected
	 * @return void
     */
    protected function _viewPaths() {
        $this->data["base"]   = Constants::DIR_BASE;
        $this->data["assets"] = Constants::DIR_ASSETS;
        $this->data["views"]  = Constants::DIR_VIEWS;
	}

	/**
	 * Set footer variable
	 *
	 * @access protected
	 * @return void
	 */
	protected function _footer() {
		$footer = new \Template\Settings\Footer();
		$this->data["footer"] = $footer;
	}
}
