<?php

/**
 * Global footer
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

class Footer {

	protected $_title;
	protected $_street;
	protected $_postalcode;
	protected $_city;
	protected $_email;
	protected $_phone_number;
	protected $_facebook;
	protected $_twitter;
	protected $_linkedin;

	/**
	 * Class constructor
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		$this->_title		= get_option("template_footer_title");

		if (function_exists("get_field")) {
			$this->_street		= get_field("street", "option");
			$this->_postalcode	= get_field("postalcode", "option");
			$this->_city		= get_field("city", "option");
			$this->_email		= get_field("email", "option");
			$this->_phone_number= get_field("phone_number", "option");
			$this->_facebook	= get_field("facebook", "option");
			$this->_twitter		= get_field("twitter", "option");
			$this->_linkedin	= get_field("linkedin", "option");
		}

		//check if saving, before any output started so we can redirect
		if (isset($_POST["update_appearance_footer"])) {
			if ($this->_save()) {
				wp_redirect("/wp-admin/themes.php?page=footer&success=true");
				exit;
			}
		}

		add_action("admin_menu", array($this, "adminMenu"));
	}

	/**
	 * Get footer title
	 *
	 * @access public
	 * @return string
	 */
	public function getTitle() {
		return $this->_title;
	}

	/**
	 * Return street
	 *
	 * @access public
	 * @return string
	 */
	public function getStreet() {
		return $this->_street;
	}

	/**
	 * Return postalcode
	 *
	 * @access public
	 * @return string
	 */
	public function getPostalCode() {
		return $this->_postalcode;
	}

	/**
	 * Return city
	 *
	 * @access public
	 * @return string
	 */
	public function getCity() {
		return $this->_city;
	}

	/**
	 * Return e-mail address
	 *
	 * @access public
	 * @return string
	 */
	public function getEmail() {
		return $this->_email;
	}
	/**
	 * Return phone number
	 *
	 * @access public
	 * @return string
	 */
	public function getPhoneNumber() {
		return $this->_phone_number;
	}

	/**
	 * Return facebook account url
	 *
	 * @access public
	 * @return string
	 */
	public function getFacebook() {
		return $this->_facebook;
	}
	/**
	 * Return twitter account url
	 *
	 * @access public
	 * @return string
	 */
	public function getTwitter() {
		return $this->_twitter;
	}
	/**
	 * Return linked in account url
	 *
	 * @access public
	 * @return string
	 */
	public function getLinkedin() {
		return $this->_linkedin;
	}

	/**
	 * Add submenu in the Appearance menu "footer"
	 *
	 * @access public
	 * @return void
	 */
	public function adminMenu() {
		add_submenu_page('themes.php', 'Footer elements', 'Footer', 'manage_options', 'footer', array($this, "render"));
	}

	/**
	 * Rendering admin footer
	 *
	 * @access public
	 * @return void
	 */
	public function render() {
		wp_enqueue_media();

		$notify = false;
		if (isset($_GET["success"]) && $_GET["success"] == true) {
			$notify = true;
		}

		$footer = $this;
		$path = ABSPATH . Constants::DIR_VIEWS_ADMIN . DIRECTORY_SEPARATOR;
		require($path . "footer.php");
	}

	/**
	 * Save footer settings
	 *
	 * @access protected
	 * @return boolean
	 */
	protected function _save() {
		$title = esc_attr($_POST["title"]);

		update_option("template_footer_title", $title);
		return true;
	}
}
