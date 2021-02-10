<?php

function my_enqueue_scripts() {
  wp_enqueue_style('easy-autocomplete.min.css', get_stylesheet_directory_uri().'/css/easy-autocomplete.min.css');
  wp_enqueue_style('easy-autocomplete.themes.min.css', get_stylesheet_directory_uri().'/css/easy-autocomplete.themes.min.css');
  wp_enqueue_script('jquery.easy-autocomplete.min.js', get_template_directory_uri().'/js/jquery.easy-autocomplete.min.js', array('jquery'), '1.3.5', true);
}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');