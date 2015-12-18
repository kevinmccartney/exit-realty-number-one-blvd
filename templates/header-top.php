<?php
    /*
     * removes the signup message
     *
    */
?>

<div class="top-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 user-signup-header">
                <?php do_action( 'hjiUserGetSignUpLink' ); ?>
                <?php do_action( 'hjiUserGetWelcomeMessage' ); ?>
                <?php do_action( 'hjiUserGetFavoritesLink' ); ?>
                <?php do_action( 'hjiUserGetSavedSearchesLink' ); ?>
                <?php do_action( 'hjiUserGetLogoutLink' ); ?>
            </div>
            <div class="col-md-6">
                <?php if ( is_active_sidebar( 'blvd-topbar-sidebarwidgets' ) ) : ?>
                <div class="footer-widgets row">
                    <?php dynamic_sidebar( 'blvd-topbar-sidebarwidgets' ); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
