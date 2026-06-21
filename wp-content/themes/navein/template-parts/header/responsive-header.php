<?php
/**
 * The template for displaying responsive header
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
?>
<div id="dtr-responsive-header">
    <div class="container">
        <?php if (navein_get_theme_option('navein_resp_logo_type', 'navein_resp_main_logo') == 'navein_resp_main_logo') {
            get_template_part('/template-parts/header/logo');
        } else {
            get_template_part('/template-parts/header/logo-alt');
        }
        ?>
        <button id="dtr-menu-button" class="dtr-hamburger" type="button" aria-label="<?php esc_attr_e('Menu Button', 'navein'); ?>"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
    </div>
    <div class="dtr-responsive-header-menu"></div>
</div>