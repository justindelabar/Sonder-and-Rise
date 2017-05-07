<?php

add_theme_support( 'post-thumbnails' ); 
wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/main.css' );

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Secondary Image',
            'id' => 'secondary-image',
            'post_type' => 'post'
        )
    );
}