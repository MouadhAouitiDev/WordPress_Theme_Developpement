<?php
/**
 *
 * Theme Functions
 *
 * @package Mouadh 
 *
 */

 add_theme_support('title-tag');




 function mouadh_themes_scripts(){
    wp_register_style('stylesheet',get_stylesheet_uri(), [], filemtime( get_template_directory(). '/assets/css/style.css'), 'all');  
    wp_register_script('main-js',get_stylesheet_directory_uri().'/assets/js/main.js', [], filemtime( get_template_directory(). '/assets/js/main.js'), true);



    wp_enqueue_script('stylesheet');
    wp_enqueue_style('main-js');



 }


 add_action('wp_enqueue_scripts','mouadh_themes_scripts');

 ?>
