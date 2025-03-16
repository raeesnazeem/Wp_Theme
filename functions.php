<?php
function medspa_files() {
    wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('medspa_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('medspa_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'medspa_files'); //This is to load the css and javascript. medspa_files is the name of the function that we created and wordpress will call when required. The function is declared above. wp_enqueue_scripts is the wordpress hook 

// function medspa_additional_features() {
//     add_theme_support('title_tag');
// }


// add_action('after_setup_theme', 'medspa_additional_features'); //This is to add theme features. hook os after_theme_setup and medspa_faetures is custom function we define above.

add_action('after_setup_theme', function() {
    remove_action('wp_head', '_wp_render_title_tag', 1);
    add_action('wp_head', function() {
        echo '<title>' . wp_get_document_title() . '</title>';
    });
});