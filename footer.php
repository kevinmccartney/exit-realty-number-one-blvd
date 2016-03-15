<?php
/**
 * Allows us to pull in the footer menu into the footer automagically.
 */

do_action( 'hji_theme_before_footer' ); ?>

<footer id="footer" class="content-info" role="contentinfo">
    
    <div class="container">
        
        <div class="footer-menu-wrapper">
            
            <?php if( has_nav_menu( 'footer-menu' ) ) :
                
                wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav nav-pills' ) );
            
            endif; ?>
        
        </div>
        
        <?php do_action('hji_theme_above_copyright'); ?>
    
    </div>
    
    <div id="copyright" class="fineprint">
        
        <div class="container">
            
            <span class="copyright"><?php hji_footer_copyright(); ?></span>
            
            <span class="hji-powered"><a href="http://www.homejunction.com/" target="_blank">Real Estate Website Design</a> powered by Home Junction.</span>
        
        </div>
    
    </div>
    
    <?php wp_footer(); ?>

</footer>

<?php do_action( 'hji_theme_after_footer' ); ?>