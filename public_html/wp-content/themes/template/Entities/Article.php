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
	public $subtitle;
	public $content;
	public $excerpt;
	public $link;
	public $image;

	/**
	 * Populate object
	 */
	public function populate($wpQuery) {
		$this->title   = apply_filters("the_title", $wpQuery->post_title);
		$this->subtitle= get_field("article_subtitle", $wpQuery->ID);
		$this->content = apply_filters("the_content", $wpQuery->post_content);
		$this->excerpt = wp_trim_words($wpQuery->post_content);
		$this->link	   = get_the_permalink($wpQuery->ID);
		$this->image   = get_field("article_image", $wpQuery->ID);
		return $this;
	}

	/**
	 * Get a single article
	 */
	public static function find($id) {
		$args = [
			'p'			=> $id,
			'post_type' => 'post'
		];
		$query = new \WP_Query($args);

		$article = new Article();
		$article->populate($query->posts[0]);
		return $article;
	}

	/**
	 * Load all articles
	 *
	 * @access public
	 * @return void
	 */
	public static function load() {
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
