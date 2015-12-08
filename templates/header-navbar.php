<header class="banner <?php hji_theme_navbar_class(); ?>" role="banner">
    <?php require_once locate_template( '/templates/header-top.php' ); ?>
    <?php do_action( 'hji_theme_before_navbar_brand' ); ?>
    <?php if ( is_active_sidebar( 'blvd-header-sidebarwidgets' ) ) : ?>
    <div class="header-widgets container">
        <div class="row">
            <?php dynamic_sidebar( 'blvd-header-sidebarwidgets' ); ?>
        </div>
    </div>
    <?php endif; ?>
    <?php do_action( 'hji_theme_after_navbar_nav' ); ?>
</header>
