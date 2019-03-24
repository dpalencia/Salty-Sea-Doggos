<?php 
/* Salty Sea Doggos functions */
function doggos_scripts() {    
    wp_enqueue_style('boostrap-grid', get_stylesheet_directory_uri() .'/assets/css/bootstrap-grid.min.css');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('g-script-font', 'https://fonts.googleapis.com/css?family=Dancing+Script');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('ultros', get_stylesheet_directory_uri() . '/assets/js/ultros.js', [], false, true);
    wp_enqueue_script('twitter-embed', 'https://platform.twitter.com/widgets.js'); // Twitter embed
}
add_action('wp_enqueue_scripts', 'doggos_scripts');

function register_nav() {
    register_nav_menu('header-nav', 'Main Navigation');
}
add_action('init', 'register_nav');

function bootstrap_menu_classes($classes, $item, $args) {
    if('header-nav' == $args->theme_location) {
      $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'bootstrap_menu_classes', 10, 3 );


function bootstrap_menu_links( $atts, $item, $args ) {
    // Perhaps there's a better way to check for the current post
    $currentID = get_the_ID();
    $atts['class'] = 'nav-link';
    if($item->object_id == $currentID)
        $atts['class'] .= ' active';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'bootstrap_menu_links', 10, 3 );



?>
