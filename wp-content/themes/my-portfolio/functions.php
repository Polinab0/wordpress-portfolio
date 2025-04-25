<?php
// Ваш код здесь
add_theme_support('post-thumbnails');

function create_work_post_type() {
    register_post_type('work',
        array(
            'labels' => array(
                'name' => __('Works'),
                'singular_name' => __('Work')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'works'),
        )
    );
}
add_action('init', 'create_work_post_type');
