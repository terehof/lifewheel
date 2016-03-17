<?php

/***
 *  downloadable styles and scripts
 **/
function load_style_script () {
    wp_enqueue_script('jquery.min' , get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('main' , get_template_directory_uri() . '/js/main,js');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}
/***
 * load styles and scripts
 **/
add_action('wp_enqueue_scripts', 'load_style_script');


?>