<?php
function newtheme_support() {
    //this adds dynamic title to the page
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'newtheme_support' );


//this adds custom menus to the theme
function newtheme_menus(){

    $location = array(

    'primary' => "Desktop Primary Left sidebar ",
    'footer' => "footer menu items"
    );

    register_nav_menus( $location );
}
add_action( 'init', 'newtheme_menus' );


function newtheme_register_styles() {
    $version = wp_get_theme()->get( 'Version' );

    // 1. FontAwesome
   wp_enqueue_style( 'newtheme-style', get_template_directory_uri() . '/style.css', array( 'newtheme-bootstrap' ), $version, 'all' );

    // 2. Bootstrap
    wp_enqueue_style( 'newtheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );

    // 3. Theme CSS (depends on Bootstrap so it loads after)
   

    wp_enqueue_style( 'newtheme-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'newtheme_register_styles' );

function newtheme_register_scripts() {
   wp_enqueue_script( 'newtheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
   wp_enqueue_script( 'newtheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
   wp_enqueue_script( 'newtheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
   wp_enqueue_script( 'newtheme-main', get_template_directory_uri() . '/assets/javascript/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'newtheme_register_scripts' );
?>