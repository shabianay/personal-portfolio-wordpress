<?php
/**
 * Alt logo
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
if( get_theme_mod( 'custom_logo' ) != '' && get_theme_mod( 'navein_logo_type', 'navein_text_logo' ) == 'navein_img_logo' && get_theme_mod( 'navein_alt_img_logo', '' ) == '' ) {
	$dtr_custom_logo_id = get_theme_mod( 'custom_logo' );
	$dtr_custom_logo_image = wp_get_attachment_image_src( $dtr_custom_logo_id , 'full' ); ?>
<a class="dtr-logo logo-alt" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo esc_url( $dtr_custom_logo_image[0] ) ?>" alt="<?php esc_attr( bloginfo( 'title' ) ); ?>" width="<?php echo esc_attr( get_theme_mod( 'navein_logo_width', '' ) ) ?>" height="<?php echo esc_attr( get_theme_mod( 'navein_logo_height', '' ) ) ?>"></a>
<?php } elseif( get_theme_mod( 'navein_logo_type', 'navein_text_logo' ) == 'navein_img_logo' && get_theme_mod( 'navein_alt_img_logo', '' ) !== '' ) { ?>
<a class="dtr-logo logo-alt" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php echo esc_url( get_theme_mod( 'navein_alt_img_logo' ) ); ?>" alt="<?php esc_attr( bloginfo( 'title' ) ); ?>" width="<?php echo esc_attr( get_theme_mod( 'navein_alt_logo_width', '' ) ) ?>" height="<?php echo esc_attr( get_theme_mod( 'navein_alt_logo_height', '' ) ) ?>"></a>
<?php } elseif ( get_theme_mod( 'navein_logo_type', 'navein_text_logo' ) == 'navein_text_logo' )  {
	$logo_text = get_theme_mod( 'navein_text_logo_text', esc_html__('Logo','navein') ); ?>
<a class="dtr-logo logo-alt" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>"><?php echo esc_html( $logo_text ); ?> </a>
<?php } else { ?>
<a class="dtr-logo logo-alt" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('title'); ?>">
<?php bloginfo('title'); ?>
</a>
<?php }