<?php
/**
 * The Template for displaying page / post sidebar
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// No sidebar if No Sidebar layout is selected
$navein_main_layout = navein_get_layout_class();
if ( $navein_main_layout == 'dtr-fullwidth' ) return;

if ( true == navein_get_theme_option( 'navein_enable_widget_group_style', true ) ) {
	$widget_style = 'dtr-widget-group';
} else {
	$widget_style = '';
}
?>
<aside id="dtr-secondary-section" class="dtr-widget-area <?php echo esc_attr($widget_style) ?>">
	<?php if( is_page() ){
		if ( is_active_sidebar( 'widgets-page' ) ) {
			dynamic_sidebar('widgets-page');
		}
	} else {
		if ( is_active_sidebar( 'widgets-blog' ) ) {
			dynamic_sidebar('widgets-blog');
		}
	}
	?>
</aside>
<!-- #dtr-secondary-section -->