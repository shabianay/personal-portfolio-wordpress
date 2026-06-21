<?php
/**
 * The Entry Image for post
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}
if (has_post_thumbnail() && true == navein_get_theme_option('navein_archive_image_enable', true)) { ?>
    <div class="dtr-entry-thumb <?php echo esc_attr( navein_get_theme_option( 'navein_blog_entry_corner', 'dtr-radius--rounded' ) ) ?>"> 
        <a href="<?php echo esc_url(get_permalink()); ?>">
            <?php the_post_thumbnail('full'); ?>
        </a>       
    </div>
<?php }