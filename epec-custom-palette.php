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
            'name' => __( 'Brand Color 1', 'themeLangDomain' ),
            'slug' => 'strong-magenta',
            'color' => '#6128A1',
        ),
        array(
            'name' => __( 'Brand Color 2', 'themeLangDomain' ),
            'slug' => 'red',
            'color' => '#E94B59',
        ),
        array(
            'name' => __( 'black', 'themeLangDomain' ),
            'slug' => 'black',
            'color' => '#111111',
        ),
        array(
            'name' => __( 'white', 'themeLangDomain' ),
            'slug' => 'white',
            'color' => 'White',
        ),
    ) );
   wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
   wp_enqueue_style( 'prefix-style' );
}
 
  add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

