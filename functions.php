<?php
function labb1_theme_support(){
    
    add_theme_support('title-tag'); //För att få en dynamisk sidtitel
    add_theme_support('custom-logo'); //För att kunna lägga till logo på sidan
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'labb1_theme_support');

function labb1_menus(){
    $locations = array(
        'primary' => "Desktop Primary Top Bar", 
        'footer' => "Footer Menu Items",
        'side-menu' => "Sidebar menu"

    );

    register_nav_menus($locations); 
}

add_action('init', 'labb1_menus');

    function labb1_register_styles(){ //Läser in de olika stylesheets
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('labb1-bootstrap', get_template_directory_uri(). "/assets/css/bootstrap.css", array(), '3.3.7', 'all');
        wp_enqueue_style('labb1-style', get_template_directory_uri(). "/assets/css/main.css", array('labb1-bootstrap'), $version, 'all');
        wp_enqueue_style('labb1-fontawesome', get_template_directory_uri(). "/assets/css/font-awesome.css", array(), '4.6.3', 'all');
    }
    add_action('wp_enqueue_scripts', 'labb1_register_styles' );

    function labb1_register_scripts(){ //Läser in de olika scripten
        wp_enqueue_script('labb1-jquery', get_template_directory_uri()."/assets/js/jquery.js", array(), '1.0', true );
        wp_enqueue_script('labb1-script', get_template_directory_uri()."/assets/js/script.js", array(), '1.0', true );
    }
    add_action('wp_enqueue_scripts', 'labb1_register_scripts' );

//Register sidebar
function my_sidebars(){

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Footer',
            'id' => 'footer',
            'before_widget' => '',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');

?> 