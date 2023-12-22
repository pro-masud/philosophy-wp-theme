<?php
class Mistri_Trust_Slider extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_trust';
	}

	public function get_title() {
		return esc_html__('Mistri Home Trust', 'mistri');
	}

	public function get_icon() {
		return 'eicon-slideshow';
	}

	public function get_categories() {
		return ['mistri'];
	}

	public function get_keywords() {
		return ['mistri', 'trust', 'slider', 'section'];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'mistri_trust_slider_head',
			[
				'label' => esc_html__('Trust Slider', 'mistri'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_trust_slider_title',
			[
				'label' => esc_html__('Title', 'mistri'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'Trusted by industry-leading organizations including',
				'label_block' => true,
			]
		);

		$trust_slider = new \Elementor\Repeater();

		$trust_slider->add_control(
			'mistri_trust_slider_image',
			[
				'label' => esc_html__('Choose Slider Image', 'mistri'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_trust_slider_list',
			[
				'label' => esc_html__('Slider List', 'mistri'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $trust_slider->get_controls(),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_trust_shape_image_head',
			[
				'label' => esc_html__('Shape Image', 'mistri'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_trust_shape_image',
			[
				'label' => esc_html__('Choose Image', 'mistri'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'mistri_home_shape_switcher',
			[
				'label' => esc_html__('Show Image', 'mistri'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Show', 'mistri'),
				'label_off' => esc_html__('Hide', 'mistri'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_trust_background_head',
			[
				'label' => esc_html__('Section Background', 'mistri'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_background_image',
			[
				'label' => esc_html__('Choose Background Image', 'mistri'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mistri_trust_background',
				'types' => ['classic', 'gradient', 'video'],
				'selector' => '{{WRAPPER}} .trust.bg-image',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_trust_style_head',
			[
				'label' => esc_html__('Trust Heading', 'mistri'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_trust_style_title_color',
			[
				'label' => esc_html__('Title Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{{WRAPPER}}} .trust  h4 ' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'trust_style_title_typography',
				'selector' => '{{WRAPPER}} .trust  h4',
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$mistri_trust_slider_title = $settings['mistri_trust_slider_title'];
		$mistri_trust_slider_list = $settings['mistri_trust_slider_list'];
		$mistri_trust_shape_image = $settings['mistri_trust_shape_image']['url'];
		$mistri_home_shape_switcher = $settings['mistri_home_shape_switcher'];
		$mistri_background_image = $settings['mistri_background_image']['url'];

		$this->add_inline_editing_attributes('mistri_trust_slider_title', 'basic');

		$this->add_render_attribute(
			'mistri_trust_slider_title',
			[
				'class' => 'mb-65 text-center',
			]
		);
		?>
		<section class="trust bg-image section-padding" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo esc_url($mistri_background_image) ? esc_url($mistri_background_image) : " "; ?>)">
			<?php if("yes" === $mistri_home_shape_switcher): ?>
				<div class="shape1 d-none d-md-block float-bob-y">
					<img src="<?php echo esc_attr__($mistri_trust_shape_image, 'mistri'); ?>" alt="<?php echo esc_attr__('image', 'msirit'); ?>">
				</div>
			<?php endif; ?>
			<div class="container">
				<?php if($mistri_trust_slider_title): ?>
				<h4 <?php echo __($this->get_render_attribute_string('mistri_trust_slider_title'), 'mistri'); ?>>
					<?php echo esc_html__($mistri_trust_slider_title, 'mistri'); ?>
				</h4>
				<?php endif; ?>
				<?php if($mistri_trust_slider_list) { ?>
				<div class="item">
					<div class="swiper trust-slider">
						<div class="swiper-wrapper">
							<?php
								foreach($mistri_trust_slider_list as $single_slider) {
									$slider_image = $single_slider['mistri_trust_slider_image']['url'];
									?>
									<div class="swiper-slide">
										<img src="<?php echo esc_url($slider_image); ?>" alt="<?php echo esc_attr__('image', 'msirit'); ?>">
									</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</section>
	<?php
	}
	protected function content_template() {
		?>
		<# view.addInlineEditingAttributes( 'mistri_trust_slider_title' , 'basic' );
			view.addRenderAttribute( 'mistri_trust_slider_title' , { 'class' : 'mb-65 text-center' , } ); #>
			<section class="trust bg-image section-padding" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{{settings.mistri_background_image.url}}})">
				<# if("yes" === settings.mistri_home_shape_switcher){ #>
				<div class="shape1 d-none d-md-block float-bob-y">
					<img src="{{{settings.mistri_trust_shape_image.url}}}" alt="image">
				</div>
				<# } #>
				<div class="container">
					<# if(settings.mistri_trust_slider_title){ #>
					<h4 {{{ view.getRenderAttributeString( 'mistri_trust_slider_title' )}}}>
						{{{settings.mistri_trust_slider_title}}}
					</h4>
					<# } #>
					<# if( settings.mistri_trust_slider_list.length ) { #>
					<div class="item">
						<div class="swiper trust-slider">
							<div class="swiper-wrapper">
								<#  _.each( settings.mistri_trust_slider_list, function( single_slider ) { #>
									<div class="swiper-slide">
										<img src="{{{single_slider.mistri_trust_slider_image.url}}}" alt="image">
									</div>
									<# }); #>
							</div>
						</div>
					</div>
					<# } #>
				</div>
			</section>
		<?php
	}
}
