<?php
namespace NaveinAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Icons_Manager;
use Elementor\Control_Media;
use Elementor\Group_Control_Image_Size;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Widget
 */
class Navein_Theme_Icon extends Widget_Base {

	/**
	 * Retrieve widget name.
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'dtr-theme_icon';
	}

	/**
	 * Retrieve widget title.
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Theme Icon', 'navein' );
	}

	/**
	 * Retrieve widget icon.
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-favorite';
	}

	/**
	 * Retrieve the list of categories widget belongs to.
	 * Used to determine where to display the widget in the editor.
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return array('dtr-element');
	}

	/**
	 * Register widget controls.
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_theme_icon',
			[
				'label' => __( 'Icon', 'navein' ),
			]
		);
	
		$this->add_control(
			'theme_icon_icon_type',
			[
				'label' 	=> esc_html__( 'Icon Type', 'navein' ),
				'type'		=> Controls_Manager::SELECT,
				'default'	=> 'icon-type-icon',
				'separator'	=> 'before',
				'options' 	=> [
					'icon-type-icon'		=> esc_html__( 'Font Awesome Icon', 'navein' ),
					'icon-type-img'			=> esc_html__( 'Image', 'navein' ),
					'icon-type-custom-icon'	=> esc_html__( 'Theme Icon', 'navein' ),
					'icon-type-html'		=> esc_html__( 'Custom HTML', 'navein' ),
				],
			]
		);

		$this->add_control(
			'default_icon',
			[
				'label' => esc_html__( 'Font Awesome Library', 'navein' ),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'icon',
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'fa-solid',
				],
				'label_block' => true,
				'condition' => [
					'theme_icon_icon_type' => [ 'icon-type-icon' ],
				],
			]
		);

		$this->add_control(
			'custom_icon',
			[
				'label' => esc_html__( 'Theme Custom Library', 'navein' ),
				'type' => Controls_Manager::SELECT2,
				'default' => 'icon-star-fill',
				'label_block' => true,
				'condition' => [
					'theme_icon_icon_type'	=> [ 'icon-type-custom-icon' ],
				],
				'description' => esc_html__( 'Icon demo file for extra icons is included in help document.', 'navein' ),
				'options' => navein_icons(),
			]
		);

		// image
		$this->add_control(
			'theme_icon_image_control',
			[
				'label' 	=> esc_html__( 'Image', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'condition' => [
					'theme_icon_icon_type'	=> [ 'icon-type-img' ],
				],
			]
		);

		$this->add_control(
			'image',
			[
				'label' 	=> esc_html__( 'Choose Image', 'navein' ),
				'type' 		=> Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
				'default'	=> [
					'url'	=>
                    NAVEIN_ELEMENTOR_ADDONS_URL . 'assets/img/img-circle-100x100.png',
				],
				'condition'	=> [
					'theme_icon_icon_type'	=> [ 'icon-type-img' ],
				],
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name' 		=> 'thumbnail',
				'default' 	=> 'full',
				'separator'	=> 'none',
				'condition' => [
					'theme_icon_icon_type'	=> [ 'icon-type-img' ],
				],
			]
		);

		$this->add_control(
			'theme_icon_icon_html',
			[
				'label' => __( 'Custom HTML', 'navein' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => '',
				'label_block' => true,
				'condition' => [
					'theme_icon_icon_type'	=> [ 'icon-type-html' ],
				],
			]
		);	

        $this->add_control(
			'dimensions_control',
			[
				'label' 	=> esc_html__( 'Dimensions', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'separator'	=> 'before',
			]
		);

        $this->add_control(
			'icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'navein' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .dtr-theme-icon' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);
      
		// button
		$this->add_control(
			'link',
			[
				'label' 		=> esc_html__( 'Link to Icon', 'navein' ),
				'type' 			=> Controls_Manager::URL,
				'placeholder'	=> 'http://your-link.com',
				'default'	=> [
					'url'	=> '',
				],
			]
		);

		$this->add_control(
			'view',
			[
				'label' => __( 'View', 'navein' ),
				'type' => Controls_Manager::HIDDEN,
				'default' => 'traditional',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Styles', 'navein' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
     
		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Icon Color', 'navein' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
                'separator' 	=> 'before',
				'selectors' => [
					'{{WRAPPER}} .dtr-theme-icon' => 'color: {{VALUE}};',
				],
			]
		);
	
		$this->end_controls_section();
	}

		/**
	 * Render widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings();
		// button
		if ( ! empty( $settings['link']['url'] ) ) {
			$this->add_link_attributes( 'button', $settings['link'] );
		}
		// icon
		if ( ! empty( $settings['custom_icon'] ) ) {
			$this->add_render_attribute( 'custom_icon', 'class', $settings['custom_icon'] );
			$this->add_render_attribute( 'custom_icon', 'aria-hidden', 'true' );
		}
		?>   
        <div class="dtr-icon dtr-theme-icon">
			<?php if ( ! empty( $settings['link']['url'] ) ) { ?>
				<a class="dtr-theme-icon__link" <?php echo $this->get_render_attribute_string( 'button' ); ?>>
			<?php } ?>   
             <?php if ( $settings['theme_icon_icon_type'] == 'icon-type-icon' && ! empty( $settings['default_icon'] ) ) {
                    Icons_Manager::render_icon( $settings['default_icon'], [ 'aria-hidden' => 'true' ] );
                } elseif ( $settings['theme_icon_icon_type'] == 'icon-type-custom-icon' && ! empty( $settings['custom_icon'] ) ) { ?>
                    <i <?php echo $this->get_render_attribute_string( 'custom_icon' ); ?>></i>
             <?php } elseif ( $settings['theme_icon_icon_type'] == 'icon-type-img' && ! empty( $settings['image']['url'] ) ) {
                    $this->add_render_attribute( 'image', 'src', $settings['image']['url'] );
                    $this->add_render_attribute( 'image', 'alt', Control_Media::get_image_alt( $settings['image'] ) );
                    $this->add_render_attribute( 'image', 'title', Control_Media::get_image_title( $settings['image'] ) );
                    $image_html = Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'image' );
                    echo $image_html;
                } elseif ( $settings['theme_icon_icon_type'] == 'icon-type-html' && ! empty( $settings['theme_icon_icon_html'] ) ) {
                    echo $settings['theme_icon_icon_html'];
              } else {}  ?>
			<?php if ( ! empty( $settings['link']['url'] ) ) { ?>
            	</a>
        	<?php } ?>
        </div>       
<?php	}

	/**
	 * Render widget output in the editor.
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 * @access protected
	 */
	protected function content_template() {
		?>
        <# iconHTML = elementor.helpers.renderIcon( view, settings.default_icon, { 'aria-hidden': true }, 'i' , 'object' ); #>
            <div class="dtr-icon dtr-theme-icon">
				<# if ( settings.link.url != '' ) { #>
					<a class="dtr-theme-icon__link" href="{{ settings.link.url }}" role="button">
				<# } #>
                <# if ( settings.theme_icon_icon_type == 'icon-type-icon' ) { #>
                    {{{ iconHTML.value }}}
                <# } else if ( settings.theme_icon_icon_type == 'icon-type-custom-icon' ) { #>
                    <i class="{{ settings.custom_icon }}"></i>
                <# } else if ( settings.theme_icon_icon_type == 'icon-type-img' ) { #>
                    <#
                    var image = {
                    id: settings.image.id,
                    url: settings.image.url,
                    size: settings.thumbnail_size,
                    dimension: settings.thumbnail_custom_dimension,
                    model: view.getEditModel()
                    };
                    var image_url = elementor.imagesManager.getImageUrl( image );  #>
                    <img src="{{ image_url }}"/>
                <# } else if ( settings.theme_icon_icon_type == 'icon-type-html' ) { #>
                    {{{ settings.theme_icon_icon_html }}}
                <# } else { } #>
            </div>
            <# if ( settings.link.url != '' ) { #>
                </a>
            <# } #>
		<?php
	}
}