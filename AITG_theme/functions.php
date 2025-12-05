<?php
function mytheme_custom_excerpt_length( $length ) {
    return 10;
}



function load_stylesheets()

{


    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('aos', get_template_directory_uri() . '/assets/css/aos.css', array(), 1, 'all');
    wp_enqueue_style('aos');
    

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


//load js

function register_my_jquery() {
    wp_register_script('my-jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), null, true);
  }
  add_action('wp_enqueue_scripts', 'register_my_jquery');
  

function addjs()
{



    wp_register_script('bootstrap', get_template_directory_uri() . '/ssets/js/bootstrap.bundle.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array(), 1, 1, 1);
    wp_enqueue_script('aos');
    
}

add_action('wp_enqueue_scripts', 'addjs');


add_theme_support( 'menus');

register_nav_menus(

    array(
        'top-menu' =>__('Top Menu', 'theme'),
        'regular-menu' =>__('Regular Menu', 'theme'),
        'footer-menu' =>__('footer Menu', 'theme'),
        'footer-menu2' =>__('footer Menu2', 'theme'),
        'cta-menu' =>__('cta menu', 'theme'),
    )

     
    );


