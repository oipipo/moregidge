<?php

function enqueue_styles() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles');
function enqueue_scripts() {

    wp_enqueue_script( 'jqslim', get_template_directory_uri() . '/js/vendor/jquery-3.0.0.slim.min.js' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/vendor/popper.min.js' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');