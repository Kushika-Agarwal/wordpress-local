<?php

function shopco_theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','shopco_theme_setup');


/* LOAD CSS FILE */
function shopco_load_styles(){

    wp_enqueue_style(
        'shopco-style',
        get_stylesheet_uri(),
        array(),
        '1.0',
        'all'
    );

}

add_action('wp_enqueue_scripts','shopco_load_styles');

?>
