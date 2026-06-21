<?php
/**
 * The template for displaying search forms
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
$navein_placeholder	=  navein_get_theme_option('navein_search_form_text', esc_html__( 'Search...','navein' )); ?>
<div class="dtr-search-form">
    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" class="dtr-search-field" placeholder="<?php echo esc_attr( $navein_placeholder ); ?>" value="<?php get_search_query(); ?>" name="s" />
        <button type="submit" class="dtr-search-submit" aria-label="<?php esc_attr_e( 'Search Button', 'navein' ); ?>"></button>
    </form>
</div>