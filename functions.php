<?php
function medspa_files() {
    wp_enqueue_style('medspa_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'medspa_files'); //medspa_files is the name of the function that wordpress will call when required. wp_enqueue_scripts is the wordpress hook   