<?php
/**
* The template for displaying Author Bio.
*
* @package NaveinTheme
* @version 1.0.0
*/
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
exit;
}
global $post;
$post_author = $post->post_author;
$url = '';
?>
<div class="dtr-author-info clearfix">
        <div class="dtr-author-avatar"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author" aria-label="<?php esc_attr_e( 'avatar', 'navein' ); ?>"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 130 ); ?></a> </div>
        <div class="dtr-author-contentbox">
            <h4 class="dtr-author-title"> <?php printf( esc_html( '%s', 'navein' ), get_the_author() ); ?></h4>
            <P class="dtr-author-jobtitle"><?php the_author_meta( 'navein_jobtitle' ); ?></P>
            <div class="dtr-author-description text-left">
                <?php the_author_meta( 'description' ); ?>
                <a class="dtr-user-url" href="<?php the_author_meta( 'user_url' ); ?>"  aria-label="<?php esc_attr_e( 'user-url', 'navein' ); ?>">
                <?php the_author_meta( 'user_url' ); ?>
                </a>
                <?php if ( get_the_author_meta( 'navein_twitter', $post_author ) || get_the_author_meta( 'navein_facebook', $post_author ) || get_the_author_meta( 'navein_instagram', $post_author ) || get_the_author_meta( 'navein_pinterest', $post_author ) || get_the_author_meta( 'navein_linkedin', $post_author ) || get_the_author_meta( 'navein_mail', $post_author ) ) { ?>
                <ul class="dtr-author-social dtr-social clearfix">
                    <?php if ( $url = get_the_author_meta( 'navein_twitter', $post_author ) ) { ?>
                    <li> <a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Twitter', 'navein' ) ?>" class="dtr-twitter"></a></li>
                    <?php } ?>
                    <?php if ( $url = get_the_author_meta( 'navein_facebook', $post_author ) ) { ?>
                    <li><a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Facebook', 'navein' ) ?>" class="dtr-facebook"></a></li>
                    <?php } ?>
                    <?php if ( $url = get_the_author_meta( 'navein_instagram', $post_author ) ) { ?>
                    <li><a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Instagram', 'navein' ) ?>" class="dtr-instagram"></a></li>
                    <?php } ?>
                    <?php if ( $url = get_the_author_meta( 'navein_pinterest', $post_author ) ) { ?>
                    <li> <a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Pinterest', 'navein' ) ?>" class="dtr-pinterest"></a></li>
                    <?php } ?>
                    <?php if ( $url = get_the_author_meta( 'navein_linkedin', $post_author ) ) { ?>
                    <li><a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Linkedin', 'navein' ) ?>" class="dtr-linkedin"></a></li>
                    <?php } ?>
                    <?php if ( $url = get_the_author_meta( 'navein_mail', $post_author ) ) { ?>
                    <li><a href="<?php echo esc_url( $url ); ?>" title="<?php esc_attr_e( 'Mail', 'navein' ) ?>" class="dtr-mail"></a></li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </div>
        </div>
</div>