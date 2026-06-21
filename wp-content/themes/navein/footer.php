<?php

/**
 * The template for displaying the footer
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
if (true == navein_get_theme_option('navein_footer_enable', true)) : ?>
    <footer id="dtr-footer-section" class="dtr-footer-section-wrap clearfix <?php echo esc_attr( navein_get_theme_option( 'navein_footer_corner', 'dtr-radius--rounded' ) ) ?>">
        <div class="container">
            <?php // footer main row
            if (true == navein_get_theme_option('navein_footer_columns_enable', true)) {
                if (is_active_sidebar('footer-column-1') || is_active_sidebar('footer-column-2') || is_active_sidebar('footer-column-3') || is_active_sidebar('footer-column-4')) {
                    get_template_part('/template-parts/footer/footer-main');
                }
            } ?>
            <?php // copyright row
            if (true == navein_get_theme_option('navein_copyright_enable', true)) {
                if (is_active_sidebar('copyright-column-1')) {
                    get_template_part('/template-parts/footer/copyright');
                }
            } ?>
            <?php if (true == navein_get_theme_option('navein_enable_scroll_top', false)) { ?>
                <a id="take-to-top" href="#" class="<?php echo esc_attr(navein_get_theme_option('navein_enable_mobile_scroll_top', '')); ?>" aria-label="<?php esc_attr_e('Scroll To Top', 'navein'); ?>"></a>
            <?php } ?>
        </div>
    </footer>
<?php endif; ?>
</div>
<!-- #dtr-wrapper -->
<?php if ( true == navein_get_theme_option( 'navein_enable_custom_cursor', true ) ) { ?>
<div class="dtr-cursor-wrapper dtr-cursor"></div>
<?php } ?>
<?php wp_footer(); ?>
</body>

</html>