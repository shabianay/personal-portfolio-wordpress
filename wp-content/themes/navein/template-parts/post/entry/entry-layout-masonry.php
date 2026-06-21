<?php
/**
 * Template for displaying content - archive
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// Exit if accessed directly
if (! defined('ABSPATH')) {
  exit;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="clearfix">
    <?php if (has_post_thumbnail()) { ?>
      <?php if (! post_password_required()) {
        get_template_part('/template-parts/post/media/entry-thumb');
      } ?>
    <?php  } ?>
    <div class="dtr-post-item__content">
      <?php if (!has_post_thumbnail() && true == navein_get_theme_option('navein_blog_page_category_enable', true) || true == navein_get_theme_option('navein_blog_page_date_enable', true) || true == navein_get_theme_option('navein_blog_page_author_enable', true)) { ?>
        <header class="dtr-entry-header entry-header">
          <?php get_template_part('/template-parts/post/meta/blog-meta'); ?>
        </header>
      <?php } ?>
      <?php get_template_part('/template-parts/post/title/entry-title'); ?>
      <?php get_template_part('/template-parts/post/content/entry-content');
      if (true == navein_get_theme_option('navein_read_more_enable', true)) {
        navein_read_more();
      } ?>
    </div>
  </div>
</article>