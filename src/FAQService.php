<?php

namespace Brisum\Wordpress\PostType\FAQ;

use Brisum\Wordpress\PostType\FAQ\PostType\FAQ;

class FAQService
{
    /**
     * @return array
     */
    public function getAll()
    {
        $posts = get_posts([
            'post_type' => FAQ::POST_TYPE,
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        ]);
        $questions = [];

        foreach ($posts as $post) {
            $questions[] = [
                'id' => $post->ID,
                'title' => apply_filters('the_title', $post->post_title),
                'content' => apply_filters('the_content', $post->post_content),
            ];
        }

        return $questions;
    }
}
