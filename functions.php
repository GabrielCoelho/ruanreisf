<?php 

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//habilitar menu
add_theme_support('menu');
//registrar menu
function register_my_menu()
{
    register_nav_menu('menu-principal', __('Header Menu'));
}
add_action('init', 'register_my_menu');
// remove classes dos links do menu
function remove_css_id_filter($var)
{
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('page_css_class', 'remove_css_id_filter', 100, 1);
add_filter('nav_menu_item_id', 'remove_css_id_filter', 100, 1);
add_filter('nav_menu_css_class', 'remove_css_id_filter', 100, 1);

// adiciona classe especifica para o link
function add_specific_menu_location_atts( $atts, $item, $args ) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

// adiciona suporte para thumbnails
add_theme_support( 'post-thumbnails' );