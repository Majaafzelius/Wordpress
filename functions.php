<?php 
// registrera dynamiska menyer
add_action('init', 'register_my_menus');
function register_my_menus() {
    register_nav_menus([
        'main-menu' => 'Huvudmeny'
    ]);}
// custom-header
add_theme_support( 'custom-header' );
// custom-logo
function theme_name_logo_setup() {
    add_theme_support( 'custom-logo', array(
        'height' => 120,
        'width' => 350,
        'flex-width' => true,
        'header-text' => array( 'site-title', 'site-description' ),));}
add_action( 'after_setup_theme', 'theme_name_logo_setup' );
// new widget areas
function register_custom_widget_area() {
    register_sidebar(
    array(
    'id' => 'new-widget-area',
    'name' => esc_html__( 'My new widget area', 'theme-domain' ),
    'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'));
    register_sidebar(
    array(
    'id' => 'second-widget-area',
    'name' => esc_html__( 'My second widget area', 'theme-domain' ),
    'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'));
    register_sidebar(
        array(
        'id' => 'third-widget-area',
        'name' => esc_html__( 'My third widget area', 'theme-domain' ),
        'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
        'after_title' => '</h3></div>'));}
add_action( 'widgets_init', 'register_custom_widget_area' );
add_theme_support( 'post-thumbnails' );

