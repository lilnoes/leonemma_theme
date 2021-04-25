<?php

function leon_add_menus(){
    register_nav_menus( array(
        'header_menu' => 'Header Menu',
        'extra_menu' => 'Extra Menu',
        'footer1' => 'Footer 1',
        'footer2' => 'Footer 2',
        'footer3' => 'Footer 3',
    ) );
}

function leon_add_style(){
    wp_enqueue_style( "mycss", get_template_directory_uri()."/style.css", "", rand());
    wp_enqueue_script( "myjs", get_template_directory_uri()."/assets/js/home.js", null, rand(), true );
}

add_action( "wp_enqueue_scripts", "leon_add_style" );
add_action( 'init', 'leon_add_menus');
