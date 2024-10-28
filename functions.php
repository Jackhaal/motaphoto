<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  
 
/**
 * Your code goes below.
 */
// Charger les styles du thème parent et du thème enfant
function theme_enqueue_styles() {

    
	//Script 
	wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/scripts.js', array(), filemtime(get_stylesheet_directory() . '/js/scripts.js'), true );

    // Charger le style du thème parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Charger le style du thème enfant
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version') );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//  Ajouter CSS + JS
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}