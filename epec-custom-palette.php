<?php
/*
Plugin Name: fadeil plugin
Plugin URI: http://fadeil-plugin.com
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Abdelfadeil Shareif
Author URI: https://wordpress-4143-0.cloudclusters.net
License: GPL2
*/



function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'Brand Color 1', 'epec-custom-palette' ),
            'slug' => 'strong-magenta',
            'color' => '#6128A1',
        ),
        array(
            'name' => __( 'Brand Color 2', 'epec-custom-palette' ),
            'slug' => 'violet',
            'color' => '#E94B59',
        ),
        array(
            'name' => __( 'black', 'epec-custom-palette' ),
            'slug' => 'black',
            'color' => '#111111',
        ),
        array(
            'name' => __( 'white', 'epec-custom-palette' ),
            'slug' => 'white',
            'color' => 'White',
        ),
    ) );
   wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
   wp_enqueue_style( 'prefix-style' );
}
 
  add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

function my_scripts() {
wp_enqueue_script( 'jquery' );
wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
wp_enqueue_style( 'prefix-style' );
}
add_action('wp_enqueue_scripts','my_scripts');

