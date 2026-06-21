<?php
/**
 * The template for displaying header.
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KLNMBQ67');</script>
<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLNMBQ67"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
<?php wp_body_open(); ?>
<div id="dtr-wrapper" class="clearfix">
<header id="dtr-main-header">
	<?php
    if( 'header-v1' == navein_get_theme_option( 'navein_header_layout', 'header-v1' ) ) {
    	get_template_part( '/template-parts/header/header-v1' );
    } elseif ( 'header-v2' == navein_get_theme_option( 'navein_header_layout', 'header-v1' ) ) {
    	get_template_part( '/template-parts/header/header-v2' );
    } elseif ( 'header-v3' == navein_get_theme_option( 'navein_header_layout', 'header-v1' ) ) {
    	get_template_part( '/template-parts/header/header-v3' );
    } elseif ( 'header-v4' == navein_get_theme_option( 'navein_header_layout', 'header-v1' ) ) {
    	get_template_part( '/template-parts/header/header-v4' );
    } else {
    	get_template_part( '/template-parts/header/header-v1' );
    }
    // page title
    if ( is_page() ) {
        get_template_part( '/template-parts/page-title/page-header-page' );
    } elseif ( is_single() ) {
        get_template_part( '/template-parts/page-title/page-header-single' );
    } else {
       navein_default_page_header_hook();
    }
    ?>
</header>