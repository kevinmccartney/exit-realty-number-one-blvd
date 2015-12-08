<?php
/**
 * Sets our SCSS constant for the improved build process
 * REQUIRED
 *
 * @since 2.7.0
 */
if ( !defined( 'HJI_BLVD_SCSS' ) ) {
    define( 'HJI_BLVD_SCSS', true );
}

if ( !function_exists( 'hji_widgets_child_init' ) ) {
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
    add_action( 'widgets_init', 'hji_widgets_child_init' );
}

 wp_register_script( 'hji_dawn-houlf-scripts', HJI_THEME_ASSETS_URL . '/js/main.js', array( 'jquery' ), false, true );
 wp_enqueue_script( 'hji_dawn-houlf-scripts' );
