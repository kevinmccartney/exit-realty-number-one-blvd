<?php
/**
 * Dawn Houlf Child Theme Functions
 *
 * These are primarily sample functions for building a child theme.
 * You should remove or modify everthing below to suit your needs.
 */


if ( !function_exists( 'hji_boulevard_child_scripts' ) ) :
/**
* Overrides main boulevard js file with the child theme file
* To activate this un-comment the add_action below
*/
function hji_boulevard_child_scripts() {

    // properly removes the default boulevard javascript - but isn't
    // necessary if you enqueue your script with the same handle
    wp_dequeue_script( 'hji_theme_scripts' );

    // enqueues the child theme js file - built with grunt
    wp_enqueue_script( 'hji_child_scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', array( 'jquery' ), '2.0', true );

}
// add_action( 'wp_enqueue_scripts', 'hji_boulevard_child_scripts', 99 );
endif;


/**
 * Changes the output of the compiled css
 * Filters in after the compiler has run
 */
// function hji_theme_hijack_compiler( $css ) {
//     $css = str_replace( '', '', $css );
//     return $css;
// }
// add_filter( 'hji_theme_compiler_output' 'hji_theme_hijack_compiler' );



if ( !function_exists( 'hji_top_header_menu' ) ) :
/**
 * Creates a header area for the top menu above the
 * standard bootstrap header area.
 *
 * This uses an action hook for menu placement.
 * You could also override /templates/header-navbar.php
 */
function hji_top_header_menu() {

    // fail if no menu in position
    if ( !has_nav_menu('header-menu') ) :
        return;
    endif;

    $args = array(
        'theme_location' => 'header-menu',
        'menu_class'     => 'nav nav-pills',
        'items_wrap'     => '<div class="hjitw-top-header"><div class="container"><ul id="%1$s" class="%2$s pull-right">%3$s</ul></div></div>'
    );

    // grab our menu
    $menu = wp_nav_menu( $args );

    // display our new section and menu
    return $menu;
}
// add_action( 'hji_theme_before_navbar_brand', 'hji_top_header_menu' );
endif;


// Registers theme menu area for the above code.
// register_nav_menus(
//     array(
//         'header-menu'   => __( 'Top Header Menu', 'hji_themework' )
//     )
// );



/**
 * Sets our SCSS constant for the improved build process
 * REQUIRED
 *
 * @since 2.7.0
 */
if ( !defined( 'HJI_BLVD_SCSS' ) ) {
    define( 'HJI_BLVD_SCSS', true );
}


if ( !function_exists( 'hji_widgets_child_init' ) ) :
    function hji_widgets_child_init() {
        // Sidebars


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


    }


    add_action( 'widgets_init', 'hji_widgets_child_init' );
endif;
