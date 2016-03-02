<?php

/**
 * Global header
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
 * @since		2016-02-22
 * @version		2.0.0
 * @license		http://www.gnu.org/licenses/gpl-3.0.txt
 */
namespace Template\Settings;

class Header {

	protected $_title;
	protected $_subtitle;
	protected $_image;

	/**
	 * Initializes header
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
		$this->_title	 = get_field("title");
		$this->_subtitle = get_field("subtitle");
		$this->_image	 = get_field("image");
	}

	/**
	 * @access public
	 * @return string
	 */
	public function getTitle() {
		return $this->_title;
	}

	/**
	 * @access public
	 * @return string
	 */
	public function getSubtitle() {
		return $this->_subtitle;
	}

	/**
	 * @access public
	 * @return string
	 */
	public function getImage() {
		return $this->_image;
	}
}
