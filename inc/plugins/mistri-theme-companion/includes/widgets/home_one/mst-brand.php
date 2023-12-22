<?php
class Mistri_Brand extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_brand';
	}

	public function get_title() {
		return esc_html__( 'Mistri Brand Slider', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-facebook-comments';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'brand', 'section', 'slider'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_brand_head',
			[
				'label' => esc_html__( 'Brand Slider', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $brand_items = new \Elementor\Repeater();

        $brand_items->add_control(
			'mistri_brand_items_image',
			[
				'label' => esc_html__( 'Choose Slider Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'mistri_brand_items_list',
			[
				'label' => esc_html__( 'Brand Slider List', 'mistri' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $brand_items->get_controls(),
			]
		);
		
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
        $mistri_brand_items_list = $settings['mistri_brand_items_list'];
        ?>
        <div class="brand section-padding text-center">
            <div class="container">
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <?php foreach($mistri_brand_items_list as $index => $single_brand){ ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($single_brand['mistri_brand_items_image']['url']); ?>" alt="<?php echo esc_attr__('icon', 'mistri'); ?>">
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php 
	}

    protected function content_template() {
        ?>
        <div class="brand section-padding text-center">
            <div class="container">
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <# _.each( settings.mistri_brand_items_list, function( single_brand, index ) {  #>
                        <div class="swiper-slide">
                            <img src="{{{single_brand.mistri_brand_items_image.url}}}" alt="icon">
                        </div>
                        <#  });  #>
                    </div>
                </div>
            </div>
        </div>
        <?php 
    }
}