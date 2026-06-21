<?php
/**
 * The Logo
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
$dtr_custom_logo_id = get_theme_mod( 'custom_logo' );
$dtr_custom_logo_image = wp_get_attachment_image_src( $dtr_custom_logo_id , 'full' );
if( get_theme_mod( 'navein_logo_type', 'navein_text_logo' ) == 'navein_img_logo' && $dtr_custom_logo_image != '' ) { ?>
<a class="dtr-logo logo-default" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo esc_url( $dtr_custom_logo_image[0] ) ?>" alt="<?php esc_attr( bloginfo( 'title' ) ); ?>" width="<?php echo esc_attr( get_theme_mod( 'navein_logo_width', '' ) ) ?>" height="<?php echo esc_attr( get_theme_mod( 'navein_logo_height', '' ) ) ?>"></a>
<?php } elseif ( get_theme_mod( 'navein_logo_type', 'navein_text_logo' ) == 'navein_text_logo' )  {
	$logo_text = get_theme_mod( 'navein_text_logo_text', esc_html__('Logo','navein') ); ?>
<a class="dtr-logo logo-default" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>"><?php echo esc_html( $logo_text ); ?> </a>
<?php } else { ?>
<a class="dtr-logo logo-default" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>">
<?php bloginfo('title'); ?>
</a>
<?php }