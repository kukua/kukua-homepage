<?php

/**
 * This file contains the sensordata request functions
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
 * @since		2016-03-18
 * @version		2.0.0
 * @license		http://www.gnu.org/licenses/gpl-3.0.txt
 */
namespace Template\Controllers;

require_once(\Template\Bootstrap\Init::$root . "../../../vendor/autoload.php");

class Sensordata extends AbstractController {

	private $_token;
	private $_url;
	private $_port;
	private $_db;
	private $_suffix;

	/**
	 * @access public
	 * @return void
	 */
    public function __construct() {
		parent::__construct();

		$this->_token  = "cm9vdDo2NjhiYjg1NDVjYmM2MTE1ZWY0Yjk1OTYz";
		$this->_url = "http://d.kukua.cc";
		$this->_port = ":9003";
		$this->_db = "data";
		$this->_suffix = "/query";
    }

	/**
	 * Get request
	 *
	 * @access public
	 * @return void
	 */
	public function get() {
		$data = [
			"country"	=> $_POST["country"],
			"type"		=> $_POST["type"],
			"dateFrom"	=> $_POST["from"],
			"dateTo"	=> $_POST["to"],
			"interval"	=> $_POST["interval"]
		];

		$result = $this->_call($data);
		echo $result;
		exit;
	}

	/**
	 * @access protected
	 * @return Curl::response
	 */
	protected function _call($data = Array()) {
		$curl = new \Curl\Curl();
		$curl->post("http://dashboard.kukua.cc/api/sensordata/get",
			$data
		);
		return $curl->response;
	}
}
