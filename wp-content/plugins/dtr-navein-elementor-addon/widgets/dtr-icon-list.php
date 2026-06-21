<?php
namespace NaveinAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Icons_Manager;
use Elementor\Control_Media;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Repeater;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Widget
 */
class Navein_Icon_List extends Widget_Base {

	/**
	 * Retrieve widget name.
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'dtr-icon-list';
	}

	/**
	 * Retrieve widget title.
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Icon List', 'navein' );
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
			'section_icon_list',
			[
				'label' => __( 'Icon List', 'navein' ),
			]
		);

		$repeater = new Repeater();

		$this->add_control(
			'list_icon_style',
			[
				'label' => esc_html__( 'Icon Style', 'navein' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'dtr-icon-list--icon-default',
                'separator'	=> 'after',
				'label_block' => true,
				'options' => [
					'dtr-icon-list--icon-default'	=> esc_html__( 'Default', 'navein' ),
					'dtr-icon-list--icon-circle' 	=> esc_html__( 'Circle Background', 'navein' ),
					'dtr-icon-list--icon-square'	=> esc_html__( 'Square Background', 'navein' ),
				],
			]
		);

		$repeater->add_control(
			'icon_type',
			[
				'label' 	=> esc_html__( 'Icon Type', 'navein' ),
				'type'		=> Controls_Manager::SELECT,
				'default'	=> 'icon-type-custom-icon',
				'options' 	=> [
					'icon-type-icon'		=> esc_html__( 'Font Awesome Icon', 'navein' ),
					'icon-type-custom-icon'	=> esc_html__( 'Theme Icon', 'navein' ),
				],
			]
		);

		$repeater->add_control(
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
					'icon_type' => [ 'icon-type-icon' ],
				],
			]
		);

		$repeater->add_control(
			'custom_icon',
			[
				'label' => esc_html__( 'Theme Custom Library', 'navein' ),
				'type' => Controls_Manager::SELECT2,
				'default' => 'icon-star-fill',
				'label_block' => true,
				'condition' => [
					'icon_type'	=> [ 'icon-type-custom-icon' ],
				],
				'description' => esc_html__( 'Icon demo file for extra icons is included in help document.', 'navein' ),
				'options' => navein_icons(),
			]
		);

		$repeater->add_control(
			'list_text',
			[
				'label' => __( 'Text', 'navein' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'List Item', 'navein' ),
				'default' => __( 'List Item', 'navein' ),
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => __( 'Link', 'navein' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'navein' ),
			]
		);

		$this->add_control(
			'icon_list',
			[
				'label' => __( 'List Items', 'navein' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_text' => __( 'List Item #1', 'navein' ),
					],
					[
						'list_text' => __( 'List Item #2', 'navein' ),
					],
					[
						'list_text' => __( 'List Item #3', 'navein' ),
					],
				],
				'title_field' => '{{{ list_text }}}',
			]
		);

         $this->add_control(
			'icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'navein' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
				'size' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .dtr-icon-list__icon' => 'font-size: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$this->add_control(
			'icon_m_right',
			[
				'label' => esc_html__( 'Margin Right to Icon', 'navein' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
				'size' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .dtr-icon-list__icon' => 'margin-right: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$this->add_control(
			'list_spacing',
			[
				'label' => esc_html__( 'Spacing in List Items', 'navein' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
				'size' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .dtr-icon-list__list-item' => 'padding-bottom: {{SIZE}}{{UNIT}}; margin-bottom: {{SIZE}}{{UNIT}}',
				],
			]
		);

        $this->add_control(
			'border_bottom_width',
			[
				'label' => esc_html__( 'Border Bottom', 'navein' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
				'size' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .dtr-icon-list__list-item' => 'border-bottom-width: {{SIZE}}{{UNIT}};',
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
				'label' 	=> esc_html__( 'Icon Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-icon-list__icon'	=> 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'icon_bg_color',
			[
				'label' 	=> esc_html__( 'Icon Background Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'condition' => [
					'list_icon_style'	=> [ 'dtr-icon-list--icon-circle', 'dtr-icon-list--icon-square' ],
				],
				'selectors'	=> [
					'{{WRAPPER}} .dtr-icon-list__icon'	=> 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'icon_border_color',
			[
				'label' 	=> esc_html__( 'Icon Border Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'condition' => [
					'list_icon_style'	=> [ 'dtr-icon-list--icon-circle', 'dtr-icon-list--icon-square' ],
				],
				'selectors'	=> [
					'{{WRAPPER}} .dtr-icon-list__icon'	=> 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' 	=> esc_html__( 'Content Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-icon-list__list-text'	=> 'color: {{VALUE}};',
				],
			]
		);

        $this->add_control(
			'list_border_color',
			[
				'label' 	=> esc_html__( 'Border Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-icon-list__list-item'	=> 'border-color: {{VALUE}};',
				],
			]
		);


		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' 		=> 'text_typo',
				'label' 	=> esc_html__( 'Content Typography', 'navein' ),
                'selector' 	=> '{{WRAPPER}} .dtr-icon-list__list-text',
            ]
        );

		$this->add_control(
			'onhover_style_control',
			[
				'label' 	=> esc_html__( 'On Hover', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'separator'	=> 'before',
			]
		);

		$this->add_control(
			'onhover_text_color',
			[
				'label' 	=> esc_html__( 'Text Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-icon-list__list-item:hover .dtr-icon-list__list-text, {{WRAPPER}} .dtr-icon-list__list-item:hover .dtr-icon-list__icon'	=> 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'onhover_icon_color',
			[
				'label' 	=> esc_html__( 'Icon Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-icon-list__list-item:hover .dtr-icon-list__icon'	=> 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'onhover_icon_bg_color',
			[
				'label' 	=> esc_html__( 'Icon Background Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'condition' => [
					'list_icon_style'	=> [ 'dtr-icon-list--icon-circle', 'dtr-icon-list--icon-square' ],
				],
				'selectors'	=> [
					'{{WRAPPER}} .dtr-icon-list__list-item:hover .dtr-icon-list__icon'	=> 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'onhover_icon_border_color',
			[
				'label' 	=> esc_html__( 'Icon Border Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'condition' => [
					'list_icon_style'	=> [ 'dtr-icon-list--icon-circle', 'dtr-icon-list--icon-square' ],
				],
				'selectors'	=> [
					'{{WRAPPER}} .dtr-icon-list__list-item:hover .dtr-icon-list__icon'	=> 'border-color: {{VALUE}};',
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
		?>
        <ul class="dtr-icon-list <?php echo esc_attr( $settings['list_icon_style'] ); ?>">
            <?php
            foreach ( $settings['icon_list'] as $index => $item ) :
                $repeater_setting_key = $this->get_repeater_setting_key( 'list_text', 'icon_list', $index );
                $this->add_render_attribute( $repeater_setting_key, 'class', 'dtr-icon-list__list-text' );
                $this->add_inline_editing_attributes( $repeater_setting_key );
                ?>
                <li class="dtr-icon-list__list-item">
                    <?php
                    if ( ! empty( $item['link']['url'] ) ) {
                        $link_key = 'link_' . $index;
                        $this->add_link_attributes( $link_key, $item['link'] );
                        echo '<a class="dtr-icon-list__link" ' . $this->get_render_attribute_string( $link_key ) . '>';
                    }
                    ?>
                    <span class="dtr-icon dtr-icon-list__icon">
                    <?php if ( $item['icon_type'] == 'icon-type-custom-icon' ) { ?>
                    	<i class="<?php echo $item['custom_icon']; ?>"></i>
                    <?php } else { ?>
                    	<?php Icons_Manager::render_icon( $item['default_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    <?php } ?>
                    </span>
                     <span <?php echo $this->get_render_attribute_string( $repeater_setting_key ); ?>><?php echo $item['list_text']; ?></span>
                    <?php if ( ! empty( $item['link']['url'] ) ) { ?>
                        </a>
                    <?php } ?>
                </li>
            <?php endforeach; ?>
        </ul>
<?php	}

	/**
	 * Render widget output in the editor.
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 * @access protected
	 */
	protected function content_template() {
		?>
       	<# var iconsHTML = {}; #>
        <# if ( settings.icon_list ) { #>
            <ul class="dtr-icon-list {{ settings.list_icon_style }}">
            <# _.each( settings.icon_list, function( item, index ) {
                    var iconTextKey = view.getRepeaterSettingKey( 'list_text', 'icon_list', index );
                    view.addRenderAttribute( iconTextKey, 'class', 'dtr-icon-list__list-text' );
                    view.addInlineEditingAttributes( iconTextKey ); #>
                    <li class="dtr-icon-list__list-item">
                        <# if ( item.link && item.link.url ) { #>
                            <a class="dtr-icon-list__link" href="{{ item.link.url }}">
                        <# } #>

                        <span class="dtr-icon dtr-icon-list__icon">
                        <# if ( item.icon_type == 'icon-type-custom-icon' ) { #>
                        	<i class="{{ item.custom_icon }}"></i>
                        <# } else { #>
                        	<# iconsHTML[ index ] = elementor.helpers.renderIcon( view, item.default_icon, { 'aria-hidden': true }, 'i', 'object' ); #>
                            {{{ iconsHTML[ index ].value }}}
                        <# } #>
                         </span>
                        <span {{{ view.getRenderAttributeString( iconTextKey ) }}}>{{{ item.list_text }}}</span>
                        <# if ( item.link && item.link.url ) { #>
                            </a>
                        <# } #>
                    </li>
                <#
                } ); #>
            </ul>
        <#	} #>
		<?php
	}
}