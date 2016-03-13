<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_header(hji_theme_template_base()); ?>
    <body <?php body_class(); ?>>
        <?php do_action('hji_theme_body_start'); ?>
        <!--[if lt IE 9]>
        <div class="alert alert-warning">
            <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'hji-textdomain'); ?>
        </div>
        <![endif]-->
        <div id="wrapper" class="body-wrapper">
            <?php do_action('hji_theme_before_navbar'); ?>
            <?php get_template_part('templates/header-navbar'); ?>
            <?php do_action('hji_theme_after_navbar'); ?>
            <div class="blvd-slideshow"></div>
            <section id="primary" class="primary-wrapper container">
                <?php do_action('hji_theme_layout_before'); ?>
                <div class="row">
                    <?php do_action('hji_theme_before_content'); ?>
                    <div id="content" class="<?php echo hji_theme_main_class(); ?>" role="main">
                        <?php if ( is_page_template('template-homepage.php') ) {
                            include_once('template-homepage.php');
                        } else {
                            do_action('hji_theme_before_content_col');
                            include hji_theme_template_path();
                            do_action('hji_theme_after_content_col');
                            get_template_part('templates/cta-boxes');
                        }
                        ?>
                    </div>
                    <?php do_action('hji_theme_before_sidebar'); ?>
                    <?php (hji_theme_display_sidebar() ? get_sidebar(hji_theme_template_base()) : '') ?>
                    <?php do_action('hji_theme_after_sidebar'); ?>
                </div>
                <?php do_action('hji_theme_layout_after'); ?>
            </section>
            <?php do_action('hji_theme_after_primary'); ?>
            <?php if (is_active_sidebar('hjitw-home-first-widgets')) : ?>
                <div class="first-widget">
                    <section class="container">
                        <div class="row">
                            <?php dynamic_sidebar('hjitw-home-first-widgets'); ?>
                        </div>
                    </section>
                </div>
            <?php endif; ?>
            <?php if (is_active_sidebar('hjitw-home-second-widgets')) : ?>
                <div class="second-widget">
                    <div class="row">
                        <?php dynamic_sidebar('hjitw-home-second-widgets'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (is_active_sidebar('hjitw-home-third-widgets')) : ?>
                <div class="third-widget">
                    <section class="container third-widget-container">
                        <div class="row">
                            <?php dynamic_sidebar('hjitw-home-third-widgets'); ?>
                        </div>
                    </section>
                </div>
            <?php endif; ?>
            <?php get_footer(hji_theme_template_base()); ?>
        </div>
        <?php do_shortcode('hji_theme_body_end'); ?>
    </body>
</html>
