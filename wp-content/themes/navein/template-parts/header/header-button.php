<?php
/**
 * Button in Header
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
if (true == navein_get_theme_option('navein_header_button_enable', false)) { ?>
    <a href="<?php echo esc_url(navein_get_theme_option('navein_header_btn_link')); ?>" class="dtr-btn dtr-header-btn" target="_<?php echo esc_attr(navein_get_theme_option('navein_header_button_target', '')); ?>">
        <?php if ('header_btn_predef_icon' == navein_get_theme_option('navein_header_btn_select_icon_type', 'header_btn_predef_icon')) { ?>
            <span class="dtr-btn__text">
            <?php echo wp_kses(navein_get_theme_option('navein_header_btn_text'), wp_kses_allowed_html('post')); ?>
        </span>
            <span class="dtr-icon dtr-btn__icon"><i class="<?php echo navein_get_theme_option('navein_header_btn_icon_name'); ?>"></i></span>
        <?php } else { ?>
            <span class="dtr-icon dtr-btn__icon"><?php echo wp_kses(navein_get_theme_option('navein_header_btn_icon_code'), navein_wp_kses_extended_ruleset()); ?></span>
        <?php } ?>
    </a>
<?php }