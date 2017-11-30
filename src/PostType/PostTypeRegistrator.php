<?php

namespace Brisum\Wordpress\PostType\FAQ\PostType;

use \Brisum\Wordpress\PostType\PostTypeRegistrator as ParentPostTypeRegistator;

class PostTypeRegistrator extends ParentPostTypeRegistator
{
	protected $postType = FAQ::POST_TYPE;

	protected $config = [
		'label' => 'FAQ',
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'author',
		),
		'has_archive' => true
	];

	protected $rewriteRules = [
		"^faq/?$" => 'index.php?post_type=faq'
	];
}
