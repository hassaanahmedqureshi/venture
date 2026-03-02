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
    // Typography
    $wp_customize->add_section('typography_section', array(
        'title' => 'Typography',
        'priority' => 29,
    ));
    $wp_customize->add_setting('body_font', array('default' => 'Georgia'));
    $wp_customize->add_control('body_font', array(
        'label' => 'Body Font',
        'section' => 'typography_section',
        'type' => 'select',
        'choices' => array(
            'Georgia' => 'Georgia (Default)',
            'Arial' => 'Arial',
            'Helvetica' => 'Helvetica',
            'Times New Roman' => 'Times New Roman',
            'Verdana' => 'Verdana',
        ),
    ));
    
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
    
    // Values Images
    $wp_customize->add_section('values_images', array(
        'title' => 'Values Images',
        'priority' => 32,
    ));
    
    $values = array('quality', 'sustainability', 'customer');
    foreach($values as $value) {
        $wp_customize->add_setting($value . '_image');
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $value . '_image', array(
            'label' => ucfirst($value) . ' Image',
            'section' => 'values_images',
        )));
    }
    
    // Services Images
    $wp_customize->add_section('services_images', array(
        'title' => 'Services Images',
        'priority' => 33,
    ));
    
    $services = array('styling', 'tailoring', 'corporate', 'gift', 'consultation', 'alterations');
    foreach($services as $service) {
        $wp_customize->add_setting($service . '_image');
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $service . '_image', array(
            'label' => ucfirst($service) . ' Image',
            'section' => 'services_images',
        )));
    }
}
add_action('customize_register', 'venture_customize_register');

function venture_custom_font() {
    $font = get_theme_mod('body_font', 'Georgia');
    echo '<style>body { font-family: "' . esc_attr($font) . '", serif; }</style>';
}
add_action('wp_head', 'venture_custom_font');
?>