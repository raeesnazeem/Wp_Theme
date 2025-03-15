<?php
function medspa_files() {
    wp_enqueue_style('medspa_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'medspa_files');