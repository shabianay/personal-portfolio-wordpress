<?php
namespace NaveinAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Portfolio Widget
 */
class Navein_Portfolio extends Widget_Base {

	/**
	 * Retrieve widget name.
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'dtr-grid-portfolio';
	}

	/**
	 * Retrieve widget title.
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Portfolio', 'navein' );
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
	 * Register the scripts widget depends on.
	 */
	public function __construct( $data = [], $args = null ) {
		parent::__construct( $data, $args );
		wp_register_script( 'isotope', NAVEIN_ELEMENTOR_ADDONS_URL . 'assets/js/isotope.pkgd.min.js', [ 'elementor-frontend' ], '1.0.0', true );
		wp_register_script( 'dtr-widgets', NAVEIN_ELEMENTOR_ADDONS_URL . 'assets/js/dtr-widgets.js', [ 'elementor-frontend' ], '1.0.0', true );
    } 
	
	/**
	 * Retrieve the list of scripts the widget depended on.
	 * Used to set scripts dependencies required to run the widget.
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
        return [
		  'imagesloaded',
		  'masonry',
		  'isotope',
		  'dtr-widgets'
        ];
    }

	/**
	 * Register widget controls.
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 * @access protected
	 */
	protected function register_controls() {
		
		// content control starts
		$this->start_controls_section(
			'section_portfolio_content',
			[
				'label'	=> esc_html__( 'Portfolio', 'navein' ),
			]
		);
        
		$this->add_control(
			'limit',
			[
				'label' 		=> esc_html__( 'Number of posts to show', 'navein' ),
				'type' 			=> Controls_Manager::NUMBER,
				'default' 		=> 6,
				'min' 			=> -1,
				'step' 			=> 1,
				'separator' 	=> 'before',
				'description'	=> esc_html__( '-1 to show all posts', 'navein' ),
			]
		);
		
		$this->add_control(
			'layout',
			[
				'label' 		=> esc_html__( 'Layout', 'navein' ),
				'type' 			=> Controls_Manager::SELECT,
				'default'		=> 'dtr-portfolio-fitrows',
				'separator' 	=> 'before',
				'description'	=> esc_html__( 'Save and check it - Frontend', 'navein' ),
				'options'		=> [
					'dtr-portfolio-fitrows'	=> esc_html__( 'Fit Rows', 'navein' ),
					'dtr-portfolio-masonry'	=> esc_html__( 'Masonry', 'navein' ),
				],
			]
		);
		
		$this->add_control(
			'columns',
			[
				'label' 	=> esc_html__( 'Number of columns', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default'	=> 'dtr-portfolio-grid-3col',
				'options'	=> [
					'dtr-portfolio-grid-2col'	=> esc_html__( '2', 'navein' ),
					'dtr-portfolio-grid-3col' 	=> esc_html__( '3', 'navein' ),
					'dtr-portfolio-grid-4col' 	=> esc_html__( '4', 'navein' ),
				],
			]
		);
		
        $this->add_control(
			'border_radius',
			[
				'label' 	=> esc_html__( 'Border Radius', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default' 	=> 'dtr-radius--rounded',
				'options'	=> [
					'dtr-radius--rounded'   => esc_html__( 'Rounded', 'navein' ),
					'dtr-radius--square'    => esc_html__( 'Square', 'navein' ),
				],
			]
		);
		
		$this->add_control(
			'post_orderby',
			[
				'label' 	=> esc_html__( 'Sort Posts By', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default'	=> 'date',
				'separator' 	=> 'before',
				'options' 	=> [
					'date'	=> esc_html__( 'Date', 'navein' ),
					'rand' 	=> esc_html__( 'Random', 'navein' ),
					'title'	=> esc_html__( 'Title', 'navein' ),
				],
			]
		);
		
		$this->add_control(
			'post_order',
			[
				'label' 	=> esc_html__( 'Arrange Sorted Posts', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default'	=> 'DESC',
				'options' 	=> [
					'DESC'	=> esc_html__( 'Descending', 'navein' ),
					'ASC'  	=> esc_html__( 'Ascending', 'navein' ),
				],
			]
		);
		
		// tax
		$this->add_control(
			'tax',
			[
				'label' 		=> esc_html__( 'Show only Selected Categories', 'navein' ),
				'type' 			=> Controls_Manager::TEXT,
				'default' 		=> '',
				'label_block'	=> true,
				'show_label' 	=> true,
				'separator' 	=> 'before',
				'description'	=> esc_html__( 'Add slugs of categories to be displayed, separated by comma', 'navein' ),
			]
		);
		
		// filter
		$this->add_control(
			'filter',
			[
				'label' 	=> esc_html__( 'Filter', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default' 	=> 'show',
				'separator'	=> 'before',
				'options' 	=> [
					'show'	=> esc_html__( 'Show', 'navein' ),
					'hide'	=> esc_html__( 'Hide', 'navein' ),
				],
			]
		);
        
        		
		// all link
		$this->add_control(
			'all_text',
			[
				'label' 		=> esc_html__( 'All Link Text', 'navein' ),
				'type' 			=> Controls_Manager::TEXT,
				'default' 		=> esc_html__( 'All', 'navein' ),
				'label_block'	=> true,
				'show_label'	=> true,
			]
		);
	
		// image
		$this->add_control(
			'image_settings',
			[
				'label' 	=> esc_html__( 'Image Settings', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'separator'	=> 'before',
			]
		);
		
		$this->add_control(
			'image_size',
			[
				'label' 	=> esc_html__( 'Image Size', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default'	=> 'img_default',
				'options' 	=> [
					'img_default'	=> esc_html__( 'Default', 'navein' ),
					'img_custom'	=> esc_html__( 'Custom - Hard Crop', 'navein' ),
				],
			]
		);
	
		$this->add_control(
			'image_size_default',
			[
				'label' 	=> esc_html__( 'Choose Image Size', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default' 	=> 'full',
				'condition'	=> [
					'image_size'	=> [ 'img_default' ],
				],
				'options'	=> [
					'full'		=> esc_html__( 'Full', 'navein' ),
					'medium'	=> esc_html__( 'Medium', 'navein' ),
					'thumbnail'	=> esc_html__( 'Thumbnail', 'navein' ),
				],
			]
		);

		$this->add_control(
			'img_crop_info',
			[
				'label' 	=> esc_html__( 'While using cropping - size of main image must be greater than specified for cropping.', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'condition'	=> [
					'image_size'	=> [ 'img_custom' ],
				],
			]
		);
		
		$this->add_control(
			'img_width',
			[
				'label' 	=> esc_html__( 'Hard Crop - Width ', 'navein' ),
				'type' 		=> Controls_Manager::NUMBER,
				'default' 	=> 600,
				'condition'	=> [
					'image_size'	=> [ 'img_custom' ],
				],
				'min'		=> 100,
				'step' 		=> 10,
				'separator' => 'none',
			]
		);
		
		$this->add_control(
			'img_height',
			[
				'label' 	=> esc_html__( 'Hard Crop - Height ', 'navein' ),
				'type' 		=> Controls_Manager::NUMBER,
				'default' 	=> 400,
				'condition'	=> [
					'image_size'	=> [ 'img_custom' ],
				],
				'min' 		=> 100,
				'step' 		=> 10,
				'separator' => 'none',
			]
		);	
		
		// heading
		$this->add_control(
			'heading_settings',
			[
				'label' 	=> esc_html__( 'Heading Settings', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'separator'	=> 'before',
			]
		);
		
		$this->add_control(
			'heading',
			[
				'label' 	=> esc_html__( 'Heading', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default'	=> 'show',
				'options' 	=> [
					'show'	=> esc_html__( 'Show', 'navein' ),
					'hide'	=> esc_html__( 'Hide', 'navein' ),
				],
			]
		);
		
		$this->add_control(
			'heading_size',
			[
				'label' 		=> esc_html__( 'Heading HTML Tag', 'navein' ),
				'type' 			=> Controls_Manager::SELECT,
				'options'		=> [
					'h1'	=> 'H1',
					'h2' 	=> 'H2',
					'h3' 	=> 'H3',
					'h4' 	=> 'H4',
					'h5' 	=> 'H5',
					'h6' 	=> 'H6',
					'p' 	=> 'p',
				],
				'label_block'	=> true,
				'default' 		=> 'h4',
			]
		);
		
		// excerpt
		$this->add_control(
			'excerpt',
			[
				'label' 	=> esc_html__( 'Excerpt', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default'	=> 'show',
				'separator'	=> 'before',
				'options' 	=> [
					'show'	=> esc_html__( 'Show', 'navein' ),
					'hide'	=> esc_html__( 'Hide', 'navein' ),
				],
			]
		);
		
		// link
		$this->add_control(
			'link_settings',
			[
				'label' 	=> esc_html__( 'Link Settings', 'navein' ),
				'type' 		=> Controls_Manager::HEADING,
				'separator'	=> 'before',
			]
		);
		
        $this->add_control(
			'link_icon',
			[
				'label' 	=> esc_html__( 'Show Link Icon', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default' 	=> 'yes',
				'separator'	=> 'before',
				'options' 	=> [
					'yes'	=> esc_html__( 'Yes', 'navein' ),
					'no'	=> esc_html__( 'No', 'navein' ),
				],
			]
		);
        
		$this->add_control(
			'link_wrap',
			[
				'label' 	=> esc_html__( 'Wrap in Link', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default' 	=> 'yes',
				'separator'	=> 'before',
				'options' 	=> [
					'yes'	=> esc_html__( 'Yes', 'navein' ),
					'no'	=> esc_html__( 'No', 'navein' ),
				],
			]
		);
		
		$this->add_control(
			'target',
			[
				'label' 	=> esc_html__( 'Open Link In', 'navein' ),
				'type' 		=> Controls_Manager::SELECT,
				'default' 	=> '_blank',
				'separator'	=> 'before',
				'options' 	=> [
					'_blank'	=> esc_html__( 'New Window', 'navein' ),
					'_self'	=> esc_html__( 'Same Window', 'navein' ),
				],
			]
		);
		
		
		$this->end_controls_section();
		// content control ends

		// style control starts
		$this->start_controls_section(
			'section_style_content',
			[
				'label'	=> esc_html__( 'Styles', 'navein' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_control(
			'background_color',
			[
				'label' => esc_html__( 'Portfolio Item Background Color', 'navein' ),
				'default' => '',
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dtr-portfolio-item__wrapper' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'filter_content_style',
			[
				'label' => esc_html__( 'Filter', 'navein' ),
				'type' 	=> Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		$this->add_control(
			'filter_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'navein' ),
				'default' => '',
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dtr-filter-nav a' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'filter_color',
			[
				'label' => esc_html__( 'Color', 'navein' ),
				'default' => '',
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dtr-filter-nav a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'filter_border_color',
			[
				'label' => esc_html__( 'Border Color', 'navein' ),
				'default' => '',
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dtr-filter-nav a' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'filter_hover_bg_color',
			[
				'label' => esc_html__( 'On hover: Background Color', 'navein' ),
				'default' => '',
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dtr-filter-nav a:hover, {{WRAPPER}} .dtr-filter-nav a.active' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'filter_hover_color',
			[
				'label' => esc_html__( 'On hover: Color', 'navein' ),
				'default' => '',
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dtr-filter-nav a:hover, {{WRAPPER}} .dtr-filter-nav a.active' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'filter_hover_border_color',
			[
				'label' => esc_html__( 'On hover: Border Color', 'navein' ),
				'default' => '',
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dtr-filter-nav a:hover, {{WRAPPER}} .dtr-filter-nav a.active' => 'border-color: {{VALUE}};',
				],
			]
		);	
		
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' 		=> 'filter_typo',
				'label' 	=> esc_html__( 'Typography', 'navein' ),
                'selector'	=> '{{WRAPPER}} .dtr-filter-nav a',
            ]
        );

		// heading
		$this->add_control(
			'item_heading_style',
			[
				'label' => esc_html__( 'Heading', 'navein' ),
				'type' 	=> Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		$this->add_control(
			'heading_color',
			[
				'label' 	=> esc_html__( 'Color', 'navein' ),
				'default' 	=> '',
				'type' 		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .dtr-portfolio-item__heading'	=> 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' 		=> 'main_heading_typo',
				'label' 	=> esc_html__( 'Typography', 'navein' ),
                'selector'	=> '{{WRAPPER}} .dtr-portfolio-item__heading',
            ]
        );	

		// Excerpt
		$this->add_control(
			'item_excerpt_style',
			[
				'label' => esc_html__( 'Excerpt', 'navein' ),
				'type' 	=> Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		$this->add_control(
			'excerpt_color',
			[
				'label' 	=> esc_html__( 'Color', 'navein' ),
				'default' 	=> '',
				'type' 		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .dtr-portfolio-item__excerpt'	=> 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' 		=> 'excerpt_typo',
				'label' 	=> esc_html__( 'Typography', 'navein' ),
                'selector'	=> '{{WRAPPER}} .dtr-portfolio-item__excerpt',
            ]
        );	
        
        // Icon
		$this->add_control(
			'btn_style',
			[
				'label' => esc_html__( 'Icon Link Style', 'navein' ),
				'type' 	=> Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        
		$this->add_control(
			'icon_color',
			[
				'label' => __( 'Color', 'navein' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .dtr-icon-btn' => 'color: {{VALUE}};',
				],
			]
		);
        
		$this->add_control(
			'icon_hover_color',
			[
				'label' => __( 'Hover: Color', 'navein' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .dtr-icon-btn:hover' => 'color: {{VALUE}};',
				],
			]
		);
      
		$this->end_controls_section();
		// style control ends
		
	}

	/**
	 * Render widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	 * @access protected
	 */
	 protected function render() {
		$settings = $this->get_settings_for_display();
		echo do_shortcode('[dtr_portfolio_grid limit="' . $settings['limit'] . '" orderby="' . $settings['post_orderby'] . '" order="' . $settings['post_order'] . '" tax="' . $settings['tax'] . '" filter="' . $settings['filter'] . '" heading="' . $settings['heading'] . '" heading_size="' . $settings['heading_size'] . '" image_size="' . $settings['image_size'] . '" image_size_default="' . $settings['image_size_default'] . '" img_width="' . $settings['img_width'] . '" img_height="' . $settings['img_height'] . '" layout="' . $settings['layout'] . '" columns="' . $settings['columns'] . '" border_radius="' . $settings['border_radius'] . '" all_text="' . $settings['all_text'] . '" excerpt="' . $settings['excerpt'] . '" link_wrap="' . $settings['link_wrap'] . '" link_icon="' . $settings['link_icon'] . '" target="' . $settings['target'] . '" ]');
	}

	/**
	 * Render widget output in the editor.
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 * @access protected
	 */
	protected function content_template() { }
}