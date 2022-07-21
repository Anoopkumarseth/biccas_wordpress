<?php
/**
 * The template for displaying the footer
 *
 */
?>

<footer class="site-footer dark-bg-color">
    <div class="ctr">
        <div class="wp-row">
            <div class="col first-container">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<h2><a class="footer_logo" href="'.  home_url()  .'">' . get_bloginfo('name') . '</a></h2>';
                    }

                    if ( is_active_sidebar( 'footer_1' ) ) { ?>

                    <div class="">
                        <?php dynamic_sidebar( 'footer_1' ); ?>
                    </div>

                <?php } ?>
            </div>

            <div class="col">
                <div class="wp-row">
                    <div class="col">
                        <?php if ( is_active_sidebar( 'footer_2' ) ) { ?>

                            <div class="">
                                <?php dynamic_sidebar( 'footer_2' ); ?>
                            </div>

                        <?php } ?>

                        </div>
                        <div class="col">

                        <?php if ( is_active_sidebar( 'footer_3' ) ) { ?>

                            <div class="">
                                <?php dynamic_sidebar( 'footer_3' ); ?>
                            </div>

                        <?php } ?>

                        </div>
                        <div class="col">

                        <?php if ( is_active_sidebar( 'footer_4' ) ) { ?>

                            <div class="">
                                <?php dynamic_sidebar( 'footer_4' ); ?>
                            </div>

                        <?php } ?>

                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    <div class="ctr copyright-section">
       <div>
            <?php echo get_theme_mod('footer_copyright', '&copy; Copyright 2017'); ?>
       </div>
       <div>
       <?php if ( is_active_sidebar( 'footer_bottom_end' ) ) { ?>

            <div class="">
                <?php dynamic_sidebar( 'footer_bottom_end' ); ?>
            </div>

            <?php } ?>
       </div>

    </div>
</footer>
		
		

</div>
<?php wp_footer(); ?>
</body>
</html>