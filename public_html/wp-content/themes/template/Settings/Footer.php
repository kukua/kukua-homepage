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

	/**
	 * Class constructor
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		$this->_title	= get_option("template_footer_title");

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
