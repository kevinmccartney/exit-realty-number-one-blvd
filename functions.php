<?php
/**
 * Sets our SCSS constant for the improved build process
 * REQUIRED
 *
 * @since 2.7.0
 */
if( !defined( 'HJI_BLVD_SCSS' ) ) :
    define( 'HJI_BLVD_SCSS', true );
endif;


/**
 * registering the child widget areas & deregistering a few 
 * uneeded widget areas
 */
if( !function_exists( 'hji_exit_number_one_widgets' ) ) :
    function hji_exit_number_one_widgets() {
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
    add_action('widgets_init', 'hji_exit_number_one_widgets', 11);
endif;

/**
 * Loading in extra fonts
 */
if ( !function_exists( 'hji_exit_number_one_load_fonts' ) ) :
    function hji_exit_number_one_load_fonts() {
        wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Dancing+Script' );
    }
    add_action( 'wp_enqueue_scripts', 'hji_exit_number_one_load_fonts' );
endif;
