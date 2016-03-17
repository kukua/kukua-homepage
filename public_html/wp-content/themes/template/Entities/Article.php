<?php

/**
 * This file contains the article entity
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

class Article {

	public $title;
	public $content;
	public $excerpt;
	public $link;

	/**
	 * Populate object
	 */
	public function populate($wpQuery) {
		$this->title   = apply_filters("the_title", $wpQuery->post_title);
		$this->content = apply_filters("the_content", $wpQuery->post_content);
		$this->content = wp_trim_words($wpQuery->post_content);
		$this->link	   = get_the_permalink($wpQuery->ID);
		return $this;
	}

	/**
	 * Load all articles
	 *
	 * @access public
	 * @return void
	 */
	public function load() {
		$args = [
			'post_type' => 'post'
		];
		$query = new \WP_Query($args);
		$result = [];
		foreach($query->posts as $postData) {
			$article = new Article();
			$result[] = $article->populate($postData);
		}
		return $result;
	}
}
