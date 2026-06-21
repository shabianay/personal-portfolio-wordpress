<?php
namespace NaveinAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Widget
 */
class Navein_Process extends Widget_Base {

	/**
	 * Retrieve widget name.
	 * @access public
	 * @return string Widget name
	 */
	public function get_name() {
		return 'dtr-process';
	}

	/**
	 * Retrieve widget title.
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Process', 'navein' );
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
			'section_process',
			[
				'label' => __( 'Process', 'navein' ),
			]
		);
        
        $this->add_responsive_control(
			'box_height',
			[
				'label' => esc_html__( 'Box Minimum Height', 'navein' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 1000,
					],
				],
				'default' => [
				'size' => '',
				],
				'selectors' => [
					'{{WRAPPER}} .dtr-process' => 'min-height: {{SIZE}}{{UNIT}}',
				],
			]
		);
        
        $this->add_control(
			'border_radius',
			[
				'label' 	=> esc_html__( 'Box Border Radius', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default' 	=> 'dtr-radius--rounded',
                'separator' 	=> 'before',
				'options'	=> [
					'dtr-radius--rounded'   => esc_html__( 'Rounded', 'navein' ),
					'dtr-radius--square'    => esc_html__( 'Square', 'navein' ),
				],
			]
		);
        
        $this->add_control(
			'number',
			[
				'label' 		=> esc_html__( 'Number', 'navein' ),
				'type' 			=> Controls_Manager::TEXT,
				'default' 		=> esc_html__( '01', 'navein' ),
				'placeholder' 	=> esc_html__( '01', 'navein' ),
				'label_block'	=> true,
				'show_label'	=> true,
				'separator' 	=> 'before',
			]
		); 
    
		$this->add_control(
			'heading',
			[
				'label' 		=> esc_html__( 'Heading', 'navein' ),
				'type' 			=> Controls_Manager::TEXTAREA,
				'default' 		=> esc_html__( 'Heading Goes Here', 'navein' ),
				'placeholder' 	=> esc_html__( 'Heading Goes Here', 'navein' ),
				'label_block'	=> true,
				'show_label'	=> true,
				'separator' 	=> 'before',
			]
		); 
			
		$this->add_control(
			'heading_size',
			[
				'label' 	=> esc_html__( 'Heading - HTML Tag', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'separator'		=> 'after',
				'options'	=> [
					'h1' 	=> 'H1',
					'h2' 	=> 'H2',
					'h3' 	=> 'H3',
					'h4' 	=> 'H4',
					'h5' 	=> 'H5',
					'h6'	=> 'H6',
					'p' 	=> 'p',
				],
				'default' => 'h4',
			]
		);
		
		$this->add_control(
			'feature_box_content',
			[
				'label' 		=> esc_html__( 'Content', 'navein' ),
				'type' 			=> Controls_Manager::TEXTAREA,
				'default' 		=> esc_html__( 'Content Goes Here', 'navein' ),
				'separator'		=> 'after',
				'placeholder' 	=> esc_html__( 'Your Content', 'navein' ),
				'label_block' 	=> true,
			]
		);
		
		$this->add_control(
			'keywords',
			[
				'label' => __( 'Keywords', 'navein' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'keyword',
						'label' => __( 'Keyword', 'navein' ),
						'type' => Controls_Manager::TEXT,
						'default' => __( 'Keyword 1', 'navein' ),
						'placeholder' => __( 'Enter a keyword', 'navein' ),
					],
					[
						'name' => 'highlighted',
						'label' => __( 'Highlighted', 'navein' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => __( 'Yes', 'navein' ),
						'label_off' => __( 'No', 'navein' ),
						'return_value' => 'yes',
						'default' => 'no',
					],
				],
				'title_field' => '{{{ keyword }}}', // Show the keyword as the title in the repeater
				'default' => [
					[
						'keyword' => __( 'Keyword 1', 'navein' ),
						'highlighted' => 'no',
					],
					[
						'keyword' => __( 'Keyword 2', 'navein' ),
						'highlighted' => 'yes',
					],
				],
			]
		);
			
        $this->add_control(
			'link',
			[
				'label' 		=> esc_html__( 'Wrap Box in a Link', 'navein' ),
				'type' 			=> Controls_Manager::URL,
				'placeholder'	=> 'http://your-link.com',
				'separator'	=> 'before',
				'default' 		=> [
					'url'	=> '#',
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
			'box_bg_color',
			[
				'label' 	=> esc_html__( 'Box Background Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-process'	=> 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'box_border_color',
			[
				'label' 	=> esc_html__( 'Box Border Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-process'	=> 'border-color: {{VALUE}};',
				],
			]
		);
         		
		// number
		$this->add_control(
			'number_style_control',
			[
				'label' 	=> esc_html__( 'Number', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'separator'	=> 'before',
			]
		);

		$this->add_control(
			'number_color',
			[
				'label' 	=> esc_html__( 'Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-process__number'	=> 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' 		=> 'number_typo',
				'label' 	=> esc_html__( 'Typography', 'navein' ),
                'selector' 	=> '{{WRAPPER}} .dtr-process__number',
            ]
        );
        
		// heading
		$this->add_control(
			'heading_style_control',
			[
				'label' 	=> esc_html__( 'Heading', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'separator'	=> 'before',
			]
		);
		
		$this->add_control(
			'heading_color',
			[
				'label' 	=> esc_html__( 'Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-process__heading'	=> 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' 		=> 'heading_typo',
				'label' 	=> esc_html__( 'Typography', 'navein' ),
                'selector' 	=> '{{WRAPPER}} .dtr-process__heading',
            ]
        );
			
		// content
		$this->add_control(
			'content_style_control',
			[
				'label' 	=> esc_html__( 'Content', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'separator'	=> 'before',
			]
		);
		
		$this->add_control(
			'content_color',
			[
				'label' 	=> esc_html__( 'Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-process__text'	=> 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' 		=> 'content_typo',
				'label' 	=> esc_html__( 'Typography', 'navein' ),
                'selector' 	=> '{{WRAPPER}} .dtr-process__text',
            ]
        );

		// keyword
		$this->add_control(
			'keyword_style_control',
			[
				'label' 	=> esc_html__( 'Keyword', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'separator'	=> 'before',
			]
		);

		$this->add_control(
			'keyword_color',
			[
				'label' 	=> esc_html__( 'Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-process__keyword'	=> 'color: {{VALUE}};',
				],
			]
		);
	
		$this->add_control(
			'keyword_bg_color',
			[
				'label' 	=> esc_html__( 'Background Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-process__keyword'	=> 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'keyword_border_color',
			[
				'label' 	=> esc_html__( 'Border Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .dtr-process__keyword'	=> 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'highlighted_keyword_color',
			[
				'label' 	=> esc_html__( 'Highlighted: Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .highlighted-keyword'	=> 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'highlighted_keyword_bg_color',
			[
				'label' 	=> esc_html__( 'Highlighted: Background Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .highlighted-keyword'	=> 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'highlighted_keyword_border_color',
			[
				'label' 	=> esc_html__( 'Highlighted: Border Color', 'navein' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> '',
				'selectors'	=> [
					'{{WRAPPER}} .highlighted-keyword'	=> 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' 		=> 'keyword_typo',
				'label' 	=> esc_html__( 'Typography', 'navein' ),
                'selector' 	=> '{{WRAPPER}} .dtr-process__keyword',
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
        if ( ! empty( $settings['link']['url'] ) ) {
			$this->add_link_attributes( 'button', $settings['link'] );
		}
		$this->add_render_attribute( 'button', 'role', 'button' );
		?>
        <div class="dtr-process <?php echo $settings['border_radius']; ?>"> 
			<?php if ( ! empty( $settings['link']['url'] ) ) { ?>
			<a class="dtr-wrapping-link" <?php echo $this->get_render_attribute_string( 'button' ); ?>></a>
			<?php } ?>           
			<div class="dtr-process__header">
                <?php if ( ! empty( $settings['heading'] ) ) { ?>
                    <<?php echo esc_attr( $settings['heading_size'] ) ?> class="dtr-process__heading"><?php echo wp_kses_post( $settings['heading'] ); ?></<?php echo esc_attr( $settings['heading_size'] ) ?>>
                <?php } ?>
				<?php if ( ! empty( $settings['number'] ) ) { ?>
					<div class="dtr-process__number"><?php echo esc_html( $settings['number'] ); ?></div>
				<?php } ?> 
            </div>
            <div class="dtr-process__footer">              
                <?php if ( ! empty( $settings['feature_box_content'] ) ) { ?>
                     <div class="dtr-process__text">
						<?php echo wp_kses_post( $settings['feature_box_content'] ) ?>
					</div>
					<?php if ( ! empty( $settings['keywords'] ) ) { ?>
						<div class="dtr-process__keyword-wrapper">
							<?php 
							if ( ! empty( $settings['keywords'] ) ) {
								foreach ( $settings['keywords'] as $keyword ) {
									// Check if the keyword is highlighted
									$class = ! empty( $keyword['highlighted'] ) && $keyword['highlighted'] === 'yes' ? 'highlighted-keyword' : '';
									echo '<span class="dtr-process__keyword ' . esc_attr( $class ) . '">' . esc_html( $keyword['keyword'] ) . '</span>';
								}
							}
							?>
						</div>
					<?php } ?>
                <?php } ?>
            </div>
        </div>
<?php	}

	/**
	 * Render widget output in the editor.
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 * @access protected
	 */
	protected function content_template() {
		?>        
        <div class="dtr-process {{ settings.border_radius }}">
			<# if ( settings.link.url ) { #>
			<a class="dtr-wrapping-link" href="{{ settings.link.url }}"></a>
			<# } #>
			<div class="dtr-process__header">
				<{{ settings.heading_size }} class="dtr-process__heading">{{{ settings.heading }}}</{{ settings.heading_size }}>
				<# if ( settings.number != '' ) { #>
                	<div class="dtr-process__number">{{{ settings.number }}}</div>
           		<# } #>
			</div>          
            <div class="dtr-process__footer">             
                <# if ( settings.feature_box_content != '' ) { #>
                <div class="dtr-process__text">{{{ settings.feature_box_content }}}</div>
                <# } #>
				<# if ( settings.keywords && settings.keywords.length ) { #>
					<div class="dtr-process__keyword-wrapper">
						<# _.each( settings.keywords, function( keyword ) { #>
							<# var className = keyword.highlighted === 'yes' ? 'highlighted-keyword' : ''; #>
							<span class="dtr-process__keyword {{ className }}">{{{ keyword.keyword }}}</span>
						<# }); #>
					</div> 
				<# } #>
            </div>
        </div> 
		<?php
	}
}