<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function load_style()
{

    wp_register_style('stylesheet', get_template_directory_uri().'/Assets/css/bootstrap.min.css', array(),false,'all'); 
    wp_enqueue_style('stylesheet');

    wp_register_style('style', get_template_directory_uri().'/Assets/css/style.css', array(),false,'all'); 
    wp_enqueue_style('style');


}
add_action( 'wp_enqueue_scripts', 'load_style' );



function loadjs(){
    wp_register_script('bootstrap.js', get_template_directory_uri(). '/Assets/css/bootstrap.min.js','',1,true);  
    wp_enqueue_script('bootstrap.js');
    wp_register_script('custom.js', get_template_directory_uri(). '/Assets/js/script.js','',1,true);  
    wp_enqueue_script('custom.js');
}
add_action( 'wp_enqueue_scripts', 'loadjs' );

register_nav_menus(
    array(
        'top-menu' => __('Top Menu'),
        'footer-menu' => _( 'Footer Menu'),
    )
);

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );  // disable WooCommerce stylesheet


register_sidebar(

    array(

        'name' => 'Page Sidebar' ,
        'id' => 'page-sidebar' ,
        'class' => '',
        'before_widget' => '<h4>',
        'after_widget' => '</h4>',

    )

);


function customtheme_add_woocommerce_support(){
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );
function enqueue_wc_cart_fragments() { wp_enqueue_script('wc-cart-fragments'); } 
add_action('wp_enqueue_scripts','enqueue_wc_cart_fragments');



