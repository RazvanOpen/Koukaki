<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );

function theme_enqueue_assets() {
    // Enqueue parent theme style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue child theme style
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/sass/style.css', array(), filemtime(get_stylesheet_directory() . '/sass/style.css'));

    // Enqueue style et script swiper JS
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-script', "https://unpkg.com/swiper/swiper-bundle.min.js", [], false, true );

    // Enqueue child theme scripts
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/script.js', [], false, true );
    wp_enqueue_script('menu-script', get_stylesheet_directory_uri() . '/js/navigation-menu.js', [], false, true );
    wp_enqueue_script('parallax-script', get_stylesheet_directory_uri() . '/js/parallax.js', [], false, true );
    wp_enqueue_script('part-slider-script', get_stylesheet_directory_uri() . '/js/part-slider.js', [], false, true );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
