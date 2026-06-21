<?php
/**
 * Template for displaying header v3
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}
?>
<div id="dtr-header-global" class="fixed-top">
    <div class="container">
        <div class="dtr-header-global-content">
            <div class="dtr-header-left">
                <?php get_template_part('/template-parts/header/logo'); ?>
                <?php get_template_part('/template-parts/header/logo-alt'); ?>
            </div>
            <div class="dtr-header-right ms-auto">
                <?php if (true == navein_get_theme_option('navein_header_menubar_enable', true)) { ?>
                    <div class="main-navigation dtr-menu-default">
                        <?php get_template_part('/template-parts/header/main-menu'); ?>
                    </div>
                <?php } ?>
            </div>
            <?php if (is_active_sidebar('widget-header-one') && true == navein_get_theme_option('navein_header_widget_area_one_enable', true)) { ?>
                <div class="dtr-header-widget-one dtr-header-widget-wrapper clearfix">
                    <?php dynamic_sidebar('widget-header-one'); ?>
                </div>
            <?php } ?>
            <?php if (true == navein_get_theme_option('navein_header_button_enable', false)) {
                get_template_part('/template-parts/header/header-button');
            } ?>
            <?php if (true == navein_get_theme_option('navein_header_search_enable', false)) { ?>
                <a href="#dtr-search-modal" role="button" class="dtr-search-modal-trigger" aria-label="<?php esc_attr_e('Search Modal Button', 'navein'); ?>"></a>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_template_part('/template-parts/header/responsive-header'); ?>
<?php if (true == navein_get_theme_option('navein_header_search_enable', false)) {
    get_template_part('/template-parts/header/search-modal');
}