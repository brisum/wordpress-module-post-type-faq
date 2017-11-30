<?php

use Brisum\Lib\ObjectManager;
use Brisum\Wordpress\PostType\FAQ\PostType\Breadcrumbs;
use Brisum\Wordpress\PostType\FAQ\PostType\FAQ;
use Brisum\Wordpress\PostType\FAQ\PostType\PostTypeRegistrator;

$objectManager = ObjectManager::getInstance();

/** @var PostTypeRegistrator */
$objectManager->create('Brisum\Wordpress\PostType\FAQ\PostType\PostTypeRegistrator');

/** @var Breadcrumbs */
$objectManager->create('Brisum\Wordpress\PostType\FAQ\PostType\Breadcrumbs');

$objectManager->create(
    'Brisum\Wordpress\PostHierarchy\PostHierarchy',
    [
        'postType' => FAQ::POST_TYPE,
        'assetsUri' => THEME_URI . '/vendor/brisum/wordpress-module-post-hierarchy/src/assets'
    ]
);
