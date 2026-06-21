<?php
/**
 * Social network widget
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// class starts
if ( ! class_exists( 'NAVEIN_Social_Widget' ) ) {
	class NAVEIN_Social_Widget extends WP_Widget {

		/**
		 * Register widget
		 */
		public function __construct() {
			$widget_ops = array(
      			'classname' => 'navein_social_widget',
      			'description' => esc_html__( 'Display social icons.', 'navein' ),
    		);
    		parent::__construct( 'navein_social_widget', esc_html__( 'Custom: Social Network', 'navein' ), $widget_ops );
		}

		/**
		 * Output the content of the widget
		 */
		public function widget( $args, $instance ) {

			// Get social networks
			$social_networks = isset( $instance['social_networks'] ) ? $instance['social_networks'] : '';
			// return if null
			if ( ! $social_networks ) {
				return;
			}

			// vars
			$output = '';
			$title 	= isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
			$align  = isset( $instance['align'] ) ? $instance['align'] : 'left';
			$icon_style = isset( $instance['icon_style'] ) ? $instance['icon_style'] : 'dtr-social-circle';
			$target = isset( $instance['target'] ) ? $instance['target'] : 'blank';
			$target = 'blank' == $target ? ' target="_blank"' : '';
			$description	= isset( $instance['description'] ) ? $instance['description'] : '';

			// Before widget
			$output .= $args['before_widget'];

			// Widget title
			if ( $title ) {
				$output .= $args['before_title'];
					$output .= $title;
				$output .= $args['after_title'];
			}

			$output .= '<div class="dtr-social-widget clearfix '. esc_attr( $icon_style ) .' text-'. esc_attr( $align ) .'">';


			$output .= '<ul class="dtr-social">';

				foreach( $social_networks as $key => $network ) {

					$url = ! empty( $network['url'] ) ? esc_url( $network['url'] ) : '';
					$name = $network['name'];

					if ( $url ) {
						$output .= '<li>';
							$output .= '<a class="link-with-line-onhover dtr-'. strtolower ( esc_attr( $name ) ) .'" href="'. esc_url( $url ) .'" title="'. esc_attr( $name ) .'" '. $target .' rel="nofollow" aria-label="'. esc_attr( $name ) .'">';
                            $output .= '</a>';
						$output .= '</li>';
					}

				}

				$output .= wpautop( wp_kses_post( $description ) );

			$output .= '</ul>';
			$output .= '</div>'; // .dtr-social-widget

			// After widget
			$output .= $args['after_widget'];

			// output echo
			echo $output;

		}

		/**
		 *  Update the information in the WordPress database
		 */
		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			$instance['social_networks'] = $new_instance['social_networks'];
			$instance['title']           = ! empty( $new_instance['title'] ) ? strip_tags( $new_instance['title'] ) : null;
			$instance['align']           = ! empty( $new_instance['align'] ) ? strip_tags( $new_instance['align'] ) : 'left';
			$instance['icon_style'] = ! empty( $new_instance['icon_style'] ) ? strip_tags( $new_instance['icon_style'] ) : 'dtr-social-circle';
			$instance['target']          = ! empty( $new_instance['target'] ) ? strip_tags( $new_instance['target'] ) : 'blank';
			$instance['description']	 = wp_kses_post( $new_instance['description'] );
			return $instance;
		}

		/**
		 * Add form fields to the widget which will be displayed in the WordPress admin area.
		 */
		public function form( $instance ) {
			$defaults =  array(
			'title'           		=> '',
				'target'          	=> 'blank',
				'align'           	=> 'left',
				'icon_style'        => 'dtr-social-circle',
				'description'	    => '',
				'social_networks'	=> array(
					'instagram'	=> array(
						'name' 	=> 'Instagram',
						'url'  	=> '',
					),
					'facebook'	=> array(
						'name' 	=> 'Facebook',
						'url'  	=> '',
					),
					'twitter'	=> array(
						'name' 	=> 'Twitter / X',
						'url'  	=> '',
					),
					'pinterest'	=> array(
						'name' 	=> 'Pinterest',
						'url'  	=> '',
					),
					'google'	=> array(
						'name' 	=> 'Google',
						'url'  	=> '',
					),
					'linkedin'	=> array(
						'name' 	=> 'LinkedIn',
						'url'  	=> '',
					),
					'vimeo' 	=> array(
						'name'	=> 'Vimeo',
						'url'  	=> '',
					),
					'youtube' 	=> array(
						'name'	=> 'Youtube',
						'url'  	=> '',
					),
					'telegram'	=> array(
						'name'	=> 'Telegram',
						'url'  	=> '',
					),
					'whatsapp'	=> array(
						'name' 	=> 'Whatsapp',
						'url'  	=> '',
					),
					'skype'     => array(
						'name'  => 'Skype',
						'url'   => '',
					),
					'tumblr'    => array(
						'name'  => 'Tumblr',
						'url'   => '',
					),
					'xing'      => array(
						'name'  => 'Xing',
						'url'   => '',
					),
					'yelp'      => array(
						'name'  => 'Yelp',
						'url'   => '',
					),
					'vk'        => array(
						'name'  => 'VK',
						'url'   => '',
					),
					'behance' => array(
						'name'  => 'Behance',
						'url'   => '',
					),
					'medium' => array(
						'name'  => 'Medium',
						'url'   => '',
					),
					'dribbble' => array(
						'name'  => 'Dribbble',
						'url'   => '',
					),
					'github' => array(
						'name'  => 'GitHub',
						'url'   => '',
					),
					'shopify' => array(
						'name'  => 'Shopify',
						'url'   => '',
					),
					'figma' => array(
						'name'  => 'Figma',
						'url'   => '',
					),
					'framer' => array(
						'name'  => 'Framer',
						'url'   => '',
					),
					'webflow' => array(
						'name'  => 'Webflow',
						'url'   => '',
					),
					'mail' 		=> array(
						'name' => 'Mail',
						'url'  => '',
					),
				),
			);

			$instance = wp_parse_args( ( array ) $instance, $defaults ); ?>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
        <?php esc_html_e( 'Title', 'navein' ); ?>
        :</label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
</p>
<p>
    <label for="<?php echo esc_attr($this->get_field_id('target')); ?>">
        <?php esc_html_e( 'Open link in :', 'navein' ); ?>
    </label>
    <select class="widefat" name="<?php echo esc_attr($this->get_field_name('target')); ?>" id="<?php echo esc_attr($this->get_field_id('target')); ?>">
        <option value="blank" <?php selected( $instance[ 'target'], 'blank' ) ?>>
        <?php esc_html_e( 'New Window', 'navein' ); ?>
        </option>
        <option value="self" <?php selected( $instance[ 'target'], 'self' ) ?>>
        <?php esc_html_e( 'Self', 'navein' ); ?>
        </option>
    </select>
</p>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'align' ) ); ?>">
        <?php esc_html_e( 'Align', 'navein' ); ?>
        :</label>
    <br />
    <select name="<?php echo esc_attr( $this->get_field_name( 'align' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'align' ) ); ?>">
        <option value="left" <?php selected( $instance['align'], 'left' ); ?>>
        <?php esc_html_e( 'Left', 'navein' ); ?>
        </option>
        <option value="center" <?php selected( $instance['align'], 'center' ); ?>>
        <?php esc_html_e( 'Center', 'navein' ); ?>
        </option>
        <option value="right" <?php selected( $instance['align'], 'right' ); ?>>
        <?php esc_html_e( 'Right', 'navein' ); ?>
        </option>
    </select>
</p>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'icon_style' ) ); ?>">
        <?php esc_html_e( 'Icon Style', 'navein' ); ?>
    </label>
    <select class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'icon_style' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'icon_style' ) ); ?>">
        <option value="dtr-social-circle" <?php selected( $instance['icon_style'], 'dtr-social-circle' ); ?>>
            <?php esc_html_e( 'Circle Background', 'navein' ); ?>
        </option>
        <option value="dtr-social-square" <?php selected( $instance['icon_style'], 'dtr-social-square' ); ?>>
            <?php esc_html_e( 'Square Background', 'navein' ); ?>
        </option>
        <option value="dtr-social-default" <?php selected( $instance['icon_style'], 'none' ); ?>>
            <?php esc_html_e( 'Icon Only (No Background)', 'navein' ); ?>
        </option>
    </select>
</p>
<?php 	// field names and id
		$networks_field_id   = $this->get_field_id( 'social_networks' );
		$networks_field_name = $this->get_field_name( 'social_networks' ); ?>
<h3 style="margin-top:20px;margin-bottom:0;">
    <?php esc_html_e( 'Social Links', 'navein' ); ?>
</h3>
<ul id="<?php echo esc_attr( $networks_field_id ); ?>">
    <input type="hidden" id="<?php echo esc_attr( $networks_field_name ); ?>" value="<?php echo esc_attr( $networks_field_name ); ?>">
    <?php
				$social_networks_show = isset ( $instance['social_networks'] ) ? $instance['social_networks']: '';
				if ( ! empty( $social_networks_show ) ) {
					foreach( $social_networks_show as $key => $network ) {
						$url  = isset( $network['url'] ) ? $network['url'] : 0;
						$name = isset( $network['name'] )  ? $network['name'] : ''; ?>
    <li id="<?php echo esc_attr( $networks_field_id ); ?>_0<?php echo esc_attr( $key ); ?>">
        <p>
            <label for="<?php echo esc_attr( $networks_field_id . '-' . $key . '-url' ); ?>"><?php echo strip_tags( $name ); ?>:</label>
            <input type="hidden" id="<?php echo esc_attr( $networks_field_id . '-' . $key . '-name' ); ?>" name="<?php echo esc_attr( $networks_field_name . '[' . $key . '][name]' ); ?>" value="<?php echo esc_attr( $name ); ?>">
            <input type="text" class="widefat" id="<?php echo esc_attr( $networks_field_id . '-' . $key . '-url' ); ?>" name="<?php echo esc_attr( $networks_field_name . '[' . $key . '][url]' ); ?>" value="<?php echo esc_attr( $url ); ?>" />
        </p>
    </li>
    <?php }
				} ?>
</ul>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>">
        <?php esc_attr_e( 'Textarea to add Extra Social Icon If Needed. Add each icon as a list item. Refer help doc for more info', 'navein' ); ?>
    </label>
    <textarea class="widefat" rows="6" cols="20" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>"><?php if ( ! empty( $instance['description'] ) ) {  echo wp_kses_post( $instance['description'] ); } ?>
</textarea>
</p>
<?php
		}
// class ends
	}
}
register_widget( 'NAVEIN_Social_Widget' );