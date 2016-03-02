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
 * @since		2016-02-25
 * @version		2.0.0
 * @license		http://www.gnu.org/licenses/gpl-3.0.txt
 */
namespace Template\Controllers;

class Homepage extends AbstractController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->render("homepage/index");
    }
}
