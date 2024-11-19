<?php
/**
 * Shortcode: Music Generator (Elementor support)
 *
 * @package ThemeREX Addons
 * @since v2.30.4
 */

// Disable direct call
if ( ! defined( 'ABSPATH' ) ) { exit; }

use TrxAddons\AiHelper\Lists;
use TrxAddons\AiHelper\Utils;

use Elementor\Controls_Manager;
use Elementor\Repeater;
use Elementor\Modules\DynamicTags\Module as TagsModule;


// Elementor Widget
//------------------------------------------------------
if ( ! function_exists('trx_addons_sc_mgenerator_add_in_elementor')) {
	add_action( trx_addons_elementor_get_action_for_widgets_registration(), 'trx_addons_sc_mgenerator_add_in_elementor' );
	function trx_addons_sc_mgenerator_add_in_elementor() {
		
		if ( ! class_exists( 'TRX_Addons_Elementor_Widget' ) ) return;	

		class TRX_Addons_Elementor_Widget_MGenerator extends TRX_Addons_Elementor_Widget {

			/**
			 * Widget base constructor.
			 *
			 * Initializing the widget base class.
			 *
			 * @since 1.6.41
			 * @access public
			 *
			 * @param array      $data Widget data. Default is an empty array.
			 * @param array|null $args Optional. Widget default arguments. Default is null.
			 */
			public function __construct( $data = [], $args = null ) {
				parent::__construct( $data, $args );
				$this->add_plain_params([
					'prompt_width' => 'size',
					'sampling_rate' => 'size',
					'duration' => 'size',
				]);
			}

			/**
			 * Retrieve widget name.
			 *
			 * @since 1.6.41
			 * @access public
			 *
			 * @return string Widget name.
			 */
			public function get_name() {
				return 'trx_sc_mgenerator';
			}

			/**
			 * Retrieve widget title.
			 *
			 * @since 1.6.41
			 * @access public
			 *
			 * @return string Widget title.
			 */
			public function get_title() {
				return __( 'AI Helper Music Generator', 'trx_addons' );
			}

			/**
			 * Get widget keywords.
			 *
			 * Retrieve the list of keywords the widget belongs to.
			 *
			 * @since 2.27.2
			 * @access public
			 *
			 * @return array Widget keywords.
			 */
			public function get_keywords() {
				return [ 'ai', 'helper', 'generator', 'mgenerator', 'music', 'audio', 'sound' ];
			}

			/**
			 * Retrieve widget icon.
			 *
			 * @since 1.6.41
			 * @access public
			 *
			 * @return string Widget icon.
			 */
			public function get_icon() {
				return 'eicon-play trx_addons_elementor_widget_icon';
			}

			/**
			 * Retrieve the list of categories the widget belongs to.
			 *
			 * Used to determine where to display the widget in the editor.
			 *
			 * @since 1.6.41
			 * @access public
			 *
			 * @return array Widget categories.
			 */
			public function get_categories() {
				return ['trx_addons-elements'];
			}

			/**
			 * Register widget controls.
			 *
			 * Adds different input fields to allow the user to change and customize the widget settings.
			 *
			 * @since 1.6.41
			 * @access protected
			 */
			protected function register_controls() {

				// Detect edit mode
				$is_edit_mode = trx_addons_elm_is_edit_mode();
				$models = ! $is_edit_mode ? array() : Lists::get_list_ai_music_models( false );

				// Register controls
				$this->start_controls_section(
					'section_sc_mgenerator',
					[
						'label' => __( 'AI Helper Music Generator', 'trx_addons' ),
					]
				);

				$this->add_control(
					'prompt',
					[
						'label' => __( 'Default prompt', 'trx_addons' ),
						'label_block' => false,
						'type' => Controls_Manager::TEXT,
						'default' => ''
					]
				);

				$this->add_control(
					'placeholder_text',
					[
						'label' => __( 'Placeholder', 'trx_addons' ),
						'label_block' => false,
						'type' => Controls_Manager::TEXT,
						'default' => ''
					]
				);

				$this->add_control(
					'button_text',
					[
						'label' => __( 'Button text', 'trx_addons' ),
						'label_block' => false,
						'type' => Controls_Manager::TEXT,
						'default' => ''
					]
				);

				$this->add_control(
					'show_prompt_translated',
					[
						'label' => __( 'Show "Prompt translated"', 'trx_addons' ),
						'label_block' => false,
						'type' => Controls_Manager::SWITCHER,
						'default' => '1',
						'return_value' => '1',
					]
				);

				$this->add_responsive_control(
					'prompt_width',
					[
						'label' => __( 'Prompt field width (in %)', 'trx_addons' ),
						'type' => Controls_Manager::SLIDER,
						'default' => [
							'size' => 100,
							'unit' => 'px'
						],
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => 50,
								'max' => 100
							]
						],
						'selectors' => [
							'{{WRAPPER}} .sc_mgenerator_form_inner' => 'width: {{SIZE}}%;',
							'{{WRAPPER}} .sc_mgenerator_message' => 'max-width: {{SIZE}}%;',
							'{{WRAPPER}} .sc_mgenerator_limits' => 'max-width: {{SIZE}}%;',
						]
					]
				);

				$this->add_responsive_control(
					'align',
					[
						'label' => esc_html__( 'Alignment', 'elementor' ),
						'type' => Controls_Manager::CHOOSE,
						'options' => trx_addons_get_list_sc_flex_aligns_for_elementor(),
						'default' => '',
						'render_type' => 'template',
						'selectors' => [
							'{{WRAPPER}} .sc_mgenerator_form' => 'align-items: {{VALUE}};',
							'{{WRAPPER}} .sc_mgenerator_form_inner' => 'align-items: {{VALUE}};',
						],
					]
				);

				$this->add_control(
					'tags_label',
					[
						'label' => __( 'Tags label', 'trx_addons' ),
						'label_block' => false,
						'type' => Controls_Manager::TEXT,
						'default' => __( 'Popular Tags:', 'trx_addons' )
					]
				);

				$this->add_control(
					'tags',
					[
						'label' => __( 'Tags', 'trx_addons' ),
						'label_block' => true,
						'type' => Controls_Manager::REPEATER,
						'default' => apply_filters('trx_addons_sc_param_group_value', [
							[
								'title' => esc_html__( 'Disco 80s', 'trx_addons' ),
								'prompt' => esc_html__( 'Generate the music a-la disco 80s.', 'trx_addons' ),
							],
							[
								'title' => esc_html__( 'Rock 90s', 'trx_addons' ),
								'prompt' => esc_html__( 'Rock music from the 90s', 'trx_addons' ),
							],
							[
								'title' => esc_html__( 'Techno', 'trx_addons' ),
								'prompt' => esc_html__( 'Music in the style techno', 'trx_addons' ),
							],
						], 'trx_sc_mgenerator'),
						'fields' => apply_filters('trx_addons_sc_param_group_params', [
							[
								'name' => 'title',
								'label' => __( 'Title', 'trx_addons' ),
								'label_block' => false,
								'type' => Controls_Manager::TEXT,
								'placeholder' => __( "Tag's title", 'trx_addons' ),
								'default' => ''
							],
							[
								'name' => 'prompt',
								'label' => __( 'Prompt', 'trx_addons' ),
								'label_block' => false,
								'type' => Controls_Manager::TEXT,
								'placeholder' => __( "Prompt", 'trx_addons' ),
								'default' => ''
							],
						], 'trx_sc_mgenerator' ),
						'title_field' => '{{{ title }}}'
					]
				);

				$this->end_controls_section();

				// Section: Generator settings
				$this->start_controls_section(
					'section_sc_mgenerator_settings',
					[
						'label' => __( 'Generator Settings', 'trx_addons' ),
					]
				);

				$this->add_control(
					'premium',
					[
						'label' => __( 'Premium Mode', 'trx_addons' ),
						'label_block' => false,
						'description' => __( 'Enables you to set a broader range of limits for image generation, which can be used for a paid image generation service. The limits are configured in the global settings.', 'trx_addons' ),
						'type' => Controls_Manager::SWITCHER,
						'return_value' => '1',
					]
				);

				$this->add_control(
					'show_limits',
					[
						'label' => __( 'Show limits', 'trx_addons' ),
						'label_block' => false,
						'type' => Controls_Manager::SWITCHER,
						'return_value' => '1',
					]
				);

				$this->add_control(
					'model',
					[
						'label' => __( 'Default model', 'trx_addons' ),
						'label_block' => false,
						'separator' => 'before',
						'type' => Controls_Manager::SELECT,
						'options' => $models,
						'default' => Utils::get_default_music_model()
					]
				);

				$this->add_control(
					'sampling_rate',
					[
						'label' => __( 'Sampling Rate (Hz)', 'trx_addons' ),
						'label_block' => true,
						'type' => Controls_Manager::SLIDER,
						'default' => [
							'size' => 32000,
							'unit' => 'px'
						],
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => 10000,
								'max' => 48000,
								'step' => 100
							]
						],
					]
				);

				$this->add_control(
					'duration',
					[
						'label' => __( 'Duration (sec)', 'trx_addons' ),
						'label_block' => true,
						'type' => Controls_Manager::SLIDER,
						'default' => [
							'size' => 5,
							'unit' => 'px'
						],
						'size_units' => [ 'px' ],
						'range' => [
							'px' => [
								'min' => 5,
								'max' => 20,
								'step' => 0.1
							]
						],
					]
				);

				$this->add_control(
					'system_prompt',
					[
						'label' => __( 'System prompt (Context)', 'trx_addons' ),
						'label_block' => true,
						'description' => __( "These are instructions for the AI Model describing how it should generate music which will be added to the user's request.", 'trx_addons' ),
						'type' => Controls_Manager::TEXTAREA,
						'rows' => 5,
						'default' => ''
					]
				);

				$this->add_control(
					'show_settings',
					[
						'label' => __( 'Show button "Settings"', 'trx_addons' ),
						'label_block' => false,
						'type' => Controls_Manager::SWITCHER,
						'return_value' => '1'
					]
				);

				$this->add_control(
					'show_upload_audio',
					[
						'label' => __( 'Show field "Conditioning Melody"', 'trx_addons' ),
						'label_block' => false,
						'description' => __( "Show the 'Upload the conditioning melody' field to upload the melody (up to 30 seconds) that will serve as the basis for generation.", 'trx_addons' ),
						'type' => Controls_Manager::SWITCHER,
						'default' => '1',
						'return_value' => '1',
					]
				);

				$this->add_control(
					'base64',
					[
						'label' => __( 'Use Base64', 'trx_addons' ),
						'label_block' => false,
						'description' => __( "Pass the Conditioning Melody to the generation server inside a query (using Base64 encoding) or via a temporary URL (the file will be cached on your server for some time, not suitable for local installations inaccessible from the Internet)", 'trx_addons' ),
						'type' => Controls_Manager::SWITCHER,
						'default' => '',
						'return_value' => '1',
						'condition' => [
							'show_upload_audio' => '1'
						]
					]
				);

				$this->add_control(
					'show_download',
					[
						'label' => __( 'Show button "Download"', 'trx_addons' ),
						'label_block' => false,
						'type' => Controls_Manager::SWITCHER,
						'return_value' => '1',
					]
				);

				$this->end_controls_section();

				// Section: Demo music
				$this->start_controls_section(
					'section_sc_mgenerator_demo',
					[
						'label' => __( 'Demo Music', 'trx_addons' ),
					]
				);

				$repeater = new Repeater();
		
				$repeater->add_control(
					'music',
					[
						'label' => __( 'Audio', 'trx_addons' ),
						'description' => wp_kses_data( __("Selected files will be used instead of the music generator as a demo mode when limits are reached", 'trx_addons') ),
						'type' => Controls_Manager::MEDIA,
						'dynamic' => [
							'active' => true,
							'categories' => [
								TagsModule::MEDIA_CATEGORY,
							],
						],
						'media_types' => [
							'audio',
						],
						'default' => [],
					]
				);

				$this->add_control(
					'demo_music',
					[
						'type'        => Controls_Manager::REPEATER,
						'fields'      => $repeater->get_controls(),
						'title_field' => '{{{trx_addons_get_file_name(music.url,false)}}}',
					]
				);
		
				$this->end_controls_section();

				if ( apply_filters( 'trx_addons_filter_add_title_param', true, $this->get_name() ) ) {
					$this->add_title_param();
				}
			}

			/**
			 * Render widget's template for the editor.
			 *
			 * Written as a Backbone JavaScript template and used to generate the live preview.
			 *
			 * @since 1.6.41
			 * @access protected
			 */
			protected function content_template() {
				if ( ! Utils::is_music_api_available() ) {
					trx_addons_get_template_part( 'templates/tpe.sc_placeholder.php',
						'trx_addons_args_sc_placeholder',
						apply_filters( 'trx_addons_filter_sc_placeholder_args', array(
							'sc' => 'trx_sc_mgenerator',
							'title' => __('AI Music Generator is not available - token for access to the API for music generation is not specified', 'trx_addons'),
							'class' => 'sc_placeholder_with_title'
						) )
					);
				} else {
					trx_addons_get_template_part(TRX_ADDONS_PLUGIN_ADDONS . 'ai-helper/shortcodes/mgenerator/tpe.mgenerator.php',
						'trx_addons_args_sc_mgenerator',
						array('element' => $this)
					);
				}
			}
		}
		
		// Register widget
		trx_addons_elm_register_widget( 'TRX_Addons_Elementor_Widget_MGenerator' );
	}
}
