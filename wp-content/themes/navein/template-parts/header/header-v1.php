<?php
/**
 * Template for displaying header v5
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}
?>
<?php if (true == navein_get_theme_option('navein_topbar_enable', true)) { ?>
    <?php if (is_active_sidebar('widget-header-three') && true == navein_get_theme_option('navein_header_widget_area_three_enable', true) || is_active_sidebar('widget-header-two') && true == navein_get_theme_option('navein_header_widget_area_two_enable', true)) { ?>
        <div id="dtr-topbar" class="clearfix">
            <div class="container">
                <div class="dtr-topbar-content">
                    <?php if (is_active_sidebar('widget-header-two') && true == navein_get_theme_option('navein_header_widget_area_two_enable', true)) { ?>
                        <div class="dtr-topbar-left dtr-header-widget-two">
                            <?php dynamic_sidebar('widget-header-two'); ?>
                        </div>
                    <?php } ?>
                    <?php if (is_active_sidebar('widget-header-three') && true == navein_get_theme_option('navein_header_widget_area_three_enable', true)) { ?>
                        <div class="dtr-topbar-right dtr-header-widget-three">
                            <?php dynamic_sidebar('widget-header-three'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
<div id="dtr-header-global" class="clearfix">
    <div class="container">
        <div class="dtr-header-global-content">
            <div class="dtr-header-left">
                <?php get_template_part('/template-parts/header/logo'); ?>
                <?php get_template_part('/template-parts/header/logo-alt'); ?>
            </div>
            <?php if (true == navein_get_theme_option('navein_header_menubar_enable', true)) { ?>
                <div class="main-navigation dtr-menu-default ms-auto">
                    <?php get_template_part('/template-parts/header/main-menu'); ?>
                </div>
            <?php } ?>
            <?php if (is_active_sidebar('widget-header-one') && true == navein_get_theme_option('navein_header_widget_area_one_enable', true)) { ?>
                <div class="dtr-header-widget-one dtr-header-widget-wrapper clearfix">
                    <?php dynamic_sidebar('widget-header-one'); ?>
                </div>
            <?php } ?>
            <?php if (true == navein_get_theme_option('navein_header_search_enable', false)) { ?>
                <a href="#dtr-search-modal" role="button" class="dtr-search-modal-trigger" aria-label="<?php esc_attr_e('Search Modal Button', 'navein'); ?>"></a>
            <?php } ?>
            <?php if (true == navein_get_theme_option('navein_header_button_enable', false)) {
                get_template_part('/template-parts/header/header-button');
            } ?>
        </div>
    </div>
</div>
<?php get_template_part('/template-parts/header/responsive-header'); ?>
<?php if (true == navein_get_theme_option('navein_header_search_enable', false)) {
    get_template_part('/template-parts/header/search-modal');
}