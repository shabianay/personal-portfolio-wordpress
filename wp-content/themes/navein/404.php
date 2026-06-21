<?php
/**
 * The template for displaying 404.
 *
 * @package ManthaTheme
 * @version 1.0.0
 */
get_header(); ?>

<div id="dtr-wrapper" class="clearfix">
<?php
 	$text 		=  navein_get_theme_option('navein_404_text', esc_html__('We are sorry, but something went wrong.','navein'));
	$subtext 	=  navein_get_theme_option('navein_404_subtext', esc_html__('Oops...','navein'));
	$linktext	=  navein_get_theme_option('navein_404_link_text', esc_html__('Back To Home','navein')); ?>
<div id="dtr-main-wrapper" class="container dtr-fullwidth">
    <main id="dtr-primary-section" class="dtr-content-area clearfix">
        <div class="dtr-primary-section--content">
            <div class="error-404 clearfix">
                <div class="error-form-wrapper">
                    <p class="subtext-404"><?php echo esc_html( $subtext ); ?></p>
                    <p class="text-404"><?php echo wp_kses_post( $text ); ?></p>
                </div>
               <a class="dtr-btn link-404" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $linktext ); ?> </a></div>
        </div>
    </main>
</div>
<!-- #content-wrapper -->
<?php get_footer();