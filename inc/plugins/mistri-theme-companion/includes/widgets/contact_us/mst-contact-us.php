<?php
class Mistri_Contact_Us_One extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_contact_us_one';
	}

	public function get_title() {
		return esc_html__( 'Mistri Contact Us', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-facebook-comments';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'contact', 'section', 'us'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_contact_us_one_head',
			[
				'label' => esc_html__( 'Contact Us', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'mistri_contact_us_one_style_head',
			[
				'label' => esc_html__( 'Contact Us Style', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

        $mistri_contact_us_one_list = $settings['mistri_contact_us_one_list'];

        $formShortCode = $settings['mistri_home_three_contact_form_shortcode'];
        $formShortCode = do_shortcode( shortcode_unautop( $formShortCode ) );
        $mistri_home_three_contact_form_shortcode_show = $settings['mistri_home_three_contact_form_shortcode_show'];
        ?>


        <?php 
	}

    protected function content_template() {
        ?>

        <?php 
    }
}
