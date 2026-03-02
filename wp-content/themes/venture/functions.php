<?php
function venture_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));
}
add_action('after_setup_theme', 'venture_setup');

function venture_styles() {
    wp_enqueue_style('venture-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'venture_styles');

function venture_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => 'Hero Section',
        'priority' => 30,
    ));
    $wp_customize->add_setting('hero_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => 'Hero Background Image',
        'section' => 'hero_section',
    )));
    
    // Collection Images
    $wp_customize->add_section('collection_images', array(
        'title' => 'Collection Images',
        'priority' => 31,
    ));
    
    $collections = array('men', 'women', 'kids', 'accessories');
    foreach($collections as $collection) {
        $wp_customize->add_setting($collection . '_image');
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $collection . '_image', array(
            'label' => ucfirst($collection) . ' Image',
            'section' => 'collection_images',
        )));
    }
}
add_action('customize_register', 'venture_customize_register');
?>