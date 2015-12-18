<?php
/**
 * Sets our SCSS constant for the improved build process
 * REQUIRED
 *
 * @since 2.7.0
 */
if (!defined('HJI_BLVD_SCSS')) {
    define('HJI_BLVD_SCSS', true);
}

if (!function_exists('hji_widgets_child_init')) {
    function hji_widgets_child_init() {
        register_sidebar( array(
            'id'            => 'hjitw-home-first-widgets',
            'name'          => __( 'Home Page First Widget', 'hji_themework' ),
            'description'   => __( 'First Widget Here' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<div class="widget-title"><h2>',
            'after_title'   => '</h2></div>',
        ));
        register_sidebar( array(
            'id'            => 'hjitw-home-second-widgets',
            'name'          => __( 'Home Page Second Widget', 'hji_themework' ),
            'description'   => __( 'Second Widget Here' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<div class="widget-title"><h2>',
            'after_title'   => '</h2></div>',
        ));
        register_sidebar( array(
            'id'            => 'hjitw-home-third-widgets',
            'name'          => __( 'Home Page Third Widget', 'hji_themework' ),
            'description'   => __( 'Third Widget Here' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget'  => "</div>",
            'before_title'  => '<div class="widget-title"><h2>',
            'after_title'   => '</h2></div>',
        ));
        unregister_sidebar( 'idx-horizontal-search');
        unregister_sidebar( 'blvd-main-sidebarwidgets');
        unregister_sidebar( 'blvd-footerwidgets');
        unregister_sidebar( 'blvd-homewidgets');
    }
    add_action('widgets_init', 'hji_widgets_child_init', 11);
}


if (!function_exists('hji_dawn_houlf_enqueue_scripts')) {
    function hji_dawn_houlf_enqueue_scripts() {
        wp_enqueue_script( 'hji_dawn_houlf_scripts', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), null, true );
    }
    add_action('wp_enqueue_scripts', 'hji_dawn_houlf_enqueue_scripts', 11);
}
