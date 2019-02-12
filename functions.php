<?php 
/* Salty Sea Doggos functions */
function doggos_scripts() {
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('boostrap-grid', get_stylesheet_directory_uri() .'/assets/css/boostrap-grid.min.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('ultros', get_stylesheet_directory_uri() . '/assets/js/ultros.js', [], false, true);
    wp_enqueue_script('twitter-embed', 'https://platform.twitter.com/widgets.js'); // Twitter embed
}

add_action('wp_enqueue_scripts', 'doggos_scripts');

?>
