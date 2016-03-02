<?php

/**
 * This file contains the small global functions (search, 404 etc)
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

class Index extends AbstractController {

    public function __construct() {
        parent::__construct();
    }

	/**
	 * Index page (other)
	 *
	 * @access public
	 * @return void
	 */
    public function index() {
        $this->render("index/index");
	}

	/**
	 * 404 Error page
	 *
	 * @access public
	 * @return void
	 */
	public function notFound() {
		$this->render("index/404");
	}
}
