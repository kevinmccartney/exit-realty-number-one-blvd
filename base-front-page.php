<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <?php get_header( hji_theme_template_base() ); ?>

    <body <?php body_class(); ?>>

        <?php do_action( 'hji_theme_body_start' ); ?>

        <!--[if lt IE 9]>
            <div class="alert alert-warning">
                <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'hji-textdomain'); ?>
            </div>
        <![endif]-->

        <div id="wrapper" class="body-wrapper">

            <?php do_action( 'hji_theme_before_navbar' ); ?>
            
            <?php get_template_part( 'templates/header-navbar' ); ?>
            
            <?php do_action( 'hji_theme_after_navbar' ); ?>

            <div class="blvd-slideshow"></div>

            <section id="primary" class="primary-wrapper container">

                <?php do_action( 'hji_theme_layout_before' ); ?>

                <div class="row">

                    <?php do_action( 'hji_theme_before_content' ); ?>

                    <div id="content" class="<?php echo hji_theme_main_class(); ?>" role="main">

                        <?php if ( is_page_template( 'template-homepage.php' ) ) : ?>

                            <?php include_once( 'template-homepage.php' ); ?>

                        <?php else : ?>

                            <?php do_action( 'hji_theme_before_content_col' ); ?>

                            <?php include hji_theme_template_path(); ?>

                            <?php do_action( 'hji_theme_after_content_col' ); ?>

                            <?php get_template_part( 'templates/cta-boxes' ); ?>

                        <?php endif; ?>

                    </div>

                    <?php do_action( 'hji_theme_before_sidebar' ); ?>
                    
                    <?php ( hji_theme_display_sidebar() ? get_sidebar( hji_theme_template_base() ) : '' ) ?>

                    <?php do_action( 'hji_theme_after_sidebar' ); ?>

                </div>

                <?php do_action( 'hji_theme_layout_after' ); ?>
            
            </section>

            <?php do_action( 'hji_theme_after_primary' ); ?>

            <section class="container">

                <?php if ( is_active_sidebar( 'blvd-homewidgets' ) ) : ?>

                    <div class="blvd-home-widgets row">
                        <?php dynamic_sidebar( 'blvd-homewidgets'); ?>
                    </div>

                <?php endif; ?>

                <?php if ( is_active_sidebar( 'blvd-hometabwidgets' ) ) : ?>

                    <div class="blvd-tabwrap">
                        <ul class="nav nav-tabs"></ul>

                        <div class="blvd-tabs-container tab-content">
                            <?php dynamic_sidebar('blvd-hometabwidgets'); ?>
                        </div>
                        
                    </div>

                <?php endif; ?>

            </section>


            <div class="first-widget">

                <section class="container">

                  <div class="col-xs-12">

                    <?php if ( is_active_sidebar( 'hjitw-home-first-widgets' ) ) : ?>

                        <div class="row">

                            <?php dynamic_sidebar( 'hjitw-home-first-widgets'); ?>

                        </div>

                    <?php endif; ?>

                  </div>

                </section>

            </div>

            <div class="second-widget">

                    <?php if ( is_active_sidebar( 'hjitw-home-second-widgets' ) ) : ?>

                        <div class="row">

                            <?php dynamic_sidebar( 'hjitw-home-second-widgets'); ?>

                        </div>

                    <?php endif; ?>

            </div>

            <div class="third-widget">

                <section class="container third-widget-container">



                        <?php if ( is_active_sidebar( 'hjitw-home-third-widgets' ) ) : ?>

                            <div class="row">

                                <?php dynamic_sidebar( 'hjitw-home-third-widgets'); ?>

                            </div>

                        <?php endif; ?>



                </section>

            </div>


            <?php get_footer( hji_theme_template_base() ); ?>

        </div>

        <?php do_shortcode( 'hji_theme_body_end' ); ?>

    </body>

</html>