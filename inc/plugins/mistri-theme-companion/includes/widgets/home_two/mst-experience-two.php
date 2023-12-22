<?php
class Mistri_Exprience_Two extends \Elementor\Widget_Base {

	public function get_name() {
		return 'mistri_experience_two';
	}

	public function get_title() {
		return esc_html__( 'Mistri Home Experience Two', 'mistri' );
	}

	public function get_icon() {
		return 'eicon-library-download';
	}

	public function get_categories() {
		return [ 'mistri' ];
	}

	public function get_keywords() {
		return [ 'mistri', 'experience', 'two', 'section'];
	}

	protected function register_controls() {

        $this->start_controls_section(
			'mistri_experience_two_author_head',
			[
				'label' => esc_html__( 'Expeience Author Info', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_experience_two_author_name',
			[
				'label' => esc_html__( 'Author Name', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Robert Joe Kerry', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_two_author_url',
			[
				'label' => esc_html__( 'Author Link', 'mistri' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'mistri_experience_two_author_job_title',
			[
				'label' => esc_html__( 'Job Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Founder', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_two_author_head_show',
			[
				'label' => esc_html__( 'Show Author Info', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'mistri_experience_two_author_signature_image',
			[
				'label' => esc_html__( 'Author Signature Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> "before"
			]
		);

		$this->add_control(
			'mistri_experience_two_author_signature_show',
			[
				'label' => esc_html__( 'Show Signature Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'mistri_experience_two_author_image',
			[
				'label' => esc_html__( 'Author Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> "before"
			]
		);

		$this->add_control(
			'mistri_experience_two_author_image_show',
			[
				'label' => esc_html__( 'Author Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'mistri_experience_two_author_bg_image',
			[
				'label' => esc_html__( 'Author Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator'	=> "before"
			]
		);
		$this->add_control(
			'mistri_experience_two_author_bg_image_show',
			[
				'label' => esc_html__( 'Show Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'mistri' ),
				'label_off' => esc_html__( 'Hide', 'mistri' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_two_counter_head',
			[
				'label' => esc_html__( 'Expeience Counters', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_experience_two_counter_one_heading',
			[
				'label' => esc_html__( 'Counter One', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'mistri_experience_two_counter_one_number',
			[
				'label' => esc_html__( 'Counter Number', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '25', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_two_counter_one_symbol',
			[
				'label' => esc_html__( 'Counter Symbol', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_two_counter_one_title',
			[
				'label' => esc_html__( 'Counter Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Years Experience', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_two_counter_two_head',
			[
				'label' => esc_html__( 'Counter Two', 'mistri' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		$this->add_control(
			'mistri_experience_two_counter_two_number',
			[
				'label' => esc_html__( 'Counter Number', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '69', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_two_counter_two_symbol',
			[
				'label' => esc_html__( 'Counter Symbol', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->add_control(
			'mistri_experience_two_counter_two_title',
			[
				'label' => esc_html__( 'Counter Title', 'mistri' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Industries Served', 'mistri' ),
				'label_block'	=> true,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_two_icon_head',
			[
				'label' => esc_html__( 'Expeience Media', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'mistri_experience_two_icons',
			[
				'label' => esc_html__( 'Expeience Icon', 'mistri' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-play',
					'library' => 'fa-solid',
				],
			]
		);

		$this->add_control(
			'mistri_experience_two_youtube_video_link',
			[
				'label' => esc_html__( 'YouTube Video Link', 'mistri' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'mistri_experience_two_icon_bg_image',
			[
				'label' => esc_html__( 'Icon Background Image', 'mistri' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_two_style_head',
			[
				'label' => esc_html__( 'Author Info', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_experience_two_author_name_color',
			[
				'label' => esc_html__('Author Name Color', 'mistri'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .experience-two .image .info .info_con ul li h4 a' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_two_author_name_typography',
				'selector' => '{{WRAPPER}} .experience-two .image .info .info_con ul li h4',
			]
		);


		$this->add_control(
			'mistri_experience_two_author_job_title_color',
			[
				'label' => esc_html__( 'Job Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .experience-two .image .info .info_con ul li span' => 'color: {{VALUE}}',
				],
				'separator'		=> 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_two_author_job_title_typography',
				'selector' => '{{WRAPPER}} .experience-two .image .info .info_con ul li span',
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'mistri_experience_two_style_counter_head',
			[
				'label' => esc_html__( 'Counters', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'mistri_experience_two_style_counter_number_color',
			[
				'label' => esc_html__( 'Counter Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .experience-two .item h2 span' => 'color: {{VALUE}}',
					'{{WRAPPER}}  .experience-two .item h2 ' => 'color: {{VALUE}}',
				],
				'separator'		=> 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_two_style_counter_number_typography',
				'selector' => '{{WRAPPER}} .experience-two .item h2',
			]
		);

		$this->add_control(
			'mistri_experience_two_style_counter_title_color',
			[
				'label' => esc_html__( 'Counter Title Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .experience-two .item .content > span' => 'color: {{VALUE}}',
				],
				'separator'		=> 'before'
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mistri_experience_two_style_counter_title_typography',
				'selector' => '{{WRAPPER}} .experience-two .item .content > span',
			]
		);

		$this->add_control(
			'mistri_experience_two_border_color',
			[
				'label' => esc_html__( 'Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}  .experience-two .item' => 'border-color: {{VALUE}}',
					'{{WRAPPER}}  .experience-two .item .bor-bottom' => 'border-color: {{VALUE}}',
				],
				'separator'		=> 'before'
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mistri_experience_two_style_media_head',
			[
				'label' => esc_html__( 'Media Icon', 'mistri' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'mistri_experience_two_style_icons_color',
			[
				'label' => esc_html__( 'Icon Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .experience-two  a.video-popup '  => 'color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistri_experience_two_style_icons_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .experience-two  a.video-popup'  => 'background-color: {{VALUE}}'
                ]
			]
		);

        $this->add_control(
			'mistri_experience_two_style_icons_border_color',
			[
				'label' => esc_html__( 'Icon Border Color', 'mistri' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{{WRAPPER}}} .experience-two  .video-pulse::after,  .experience-two .video-pulse::before'  => 'border-color: {{VALUE}}'
                ],
                
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$mistri_experience_two_author_name = $settings['mistri_experience_two_author_name'];
		$mistri_experience_two_author_url = $settings['mistri_experience_two_author_url']['url'];
		$mistri_experience_two_author_job_title = $settings['mistri_experience_two_author_job_title'];
		$mistri_experience_two_author_head_show = $settings['mistri_experience_two_author_head_show'];
		$mistri_experience_two_author_signature_image = $settings['mistri_experience_two_author_signature_image']['url'];
		$mistri_experience_two_author_signature_show = $settings['mistri_experience_two_author_signature_show'];
		$mistri_experience_two_author_image = $settings['mistri_experience_two_author_image']['url'];
		$mistri_experience_two_author_image_show = $settings['mistri_experience_two_author_image_show'];
		$mistri_experience_two_author_bg_image = $settings['mistri_experience_two_author_bg_image']['url'];
		$mistri_experience_two_author_bg_image_show = $settings['mistri_experience_two_author_bg_image_show'];
		
		$mistri_experience_two_counter_one_number = $settings['mistri_experience_two_counter_one_number'];
		$mistri_experience_two_counter_one_symbol = $settings['mistri_experience_two_counter_one_symbol'];
		$mistri_experience_two_counter_one_title = $settings['mistri_experience_two_counter_one_title'];
		$mistri_experience_two_counter_two_number = $settings['mistri_experience_two_counter_two_number'];
		$mistri_experience_two_counter_two_symbol = $settings['mistri_experience_two_counter_two_symbol'];
		$mistri_experience_two_counter_two_title = $settings['mistri_experience_two_counter_two_title'];
		
		$mistri_experience_two_icons = $settings['mistri_experience_two_icons'];
		$mistri_experience_two_youtube_video_link = $settings['mistri_experience_two_youtube_video_link']['url'];
		$mistri_experience_two_icon_bg_image = $settings['mistri_experience_two_icon_bg_image']['url'];

		$this->add_inline_editing_attributes('mistri_experience_two_author_name', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_two_author_job_title', 'basic');

		$this->add_inline_editing_attributes('mistri_experience_two_counter_one_number', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_two_counter_one_title', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_two_counter_two_number', 'basic');
		$this->add_inline_editing_attributes('mistri_experience_two_counter_two_title', 'basic');

		$this->add_render_attribute(
				'mistri_experience_two_author_name',
				[
					' href' => __( esc_url($mistri_experience_two_author_url), 'mistri' ),
				]
			);
		$this->add_render_attribute(
				'mistri_experience_two_counter_one_number',
				[
					'class' => 'count',
				]
			);
		$this->add_render_attribute(
				'mistri_experience_two_counter_two_number',
				[
					'class' => 'count',
				]
			);
        ?>
		<div class="container">
			<div class="experience-two ">
				<div class="row g-4">
					<div class="col-lg-9 wow fadeInDown" data-wow-duration="1.3s" data-wow-delay=".3s">
						<div class="image">
							<?php if("yes" === $mistri_experience_two_author_bg_image_show): ?>
							<img src="<?php echo esc_attr__($mistri_experience_two_author_bg_image, 'mistri'); ?>" alt="<?php echo esc_attr__('image', 'msirit'); ?>">
							<?php endif; ?>
							<div class="info">
								<div class="info_con">
									<ul>
										<?php if("yes" === $mistri_experience_two_author_image_show): ?>
										<li>
											<img src="<?php echo esc_attr__($mistri_experience_two_author_image, 'mistri'); ?>" alt="<?php echo esc_attr__('image', 'msirit'); ?>">
										</li>
										<?php endif; ?>
										<?php if("yes" === $mistri_experience_two_author_head_show): ?>
										<li>
											<h4><a <?php echo $this->get_render_attribute_string( 'mistri_experience_two_author_name' ); ?> > <?php echo esc_html__($mistri_experience_two_author_name, 'mistri'); ?></a></h4>
											<span <?php echo $this->get_render_attribute_string( 'mistri_experience_two_author_job_title' ); ?> ><?php echo esc_html__($mistri_experience_two_author_job_title, 'mistri'); ?></span>
										</li>
										<?php endif; ?>
									</ul>
								</div>
								<?php if("yes" === $mistri_experience_two_author_signature_show): ?>
								<div class="signature">
									<img src="<?php echo esc_attr__($mistri_experience_two_author_signature_image, 'mistri'); ?>" alt="<?php echo esc_attr__('icon', 'msirit'); ?>">
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
						<div class="item">
							<div class="content bor-bottom pb-30">
								<h2><span <?php echo $this->get_render_attribute_string( 'mistri_experience_two_counter_one_number' ); ?>><?php echo esc_html__($mistri_experience_two_counter_one_number, 'mistri'); ?></span><?php echo esc_html__($mistri_experience_two_counter_one_symbol, 'mistri'); ?></h2>
								<span <?php echo $this->get_render_attribute_string( 'mistri_experience_two_counter_one_title' ); ?>><?php echo esc_html__($mistri_experience_two_counter_one_title, 'mistri'); ?></span>
							</div>
							<div class="content pt-30">
								<h2><span <?php echo $this->get_render_attribute_string( 'mistri_experience_two_counter_two_number' ); ?>><?php echo esc_html__($mistri_experience_two_counter_two_number, 'mistri'); ?></span><?php echo esc_html__($mistri_experience_two_counter_two_symbol, 'mistri'); ?></h2>
								<span <?php echo $this->get_render_attribute_string( 'mistri_experience_two_counter_two_title' ); ?>><?php echo esc_html__($mistri_experience_two_counter_two_title, 'mistri'); ?></span>
							</div>
						</div>
						<div class="experience_video overlay50">
							<img src="<?php echo esc_attr__($mistri_experience_two_icon_bg_image, 'mistri'); ?>" alt="<?php echo esc_attr__('image', 'mistri'); ?>">
							<div class="video-btn-wrp">
								<div class="video video-pulse">
									<a class="video-popup secondary-bg" href="<?php echo esc_url($mistri_experience_two_youtube_video_link); ?>"> <?php \Elementor\Icons_Manager::render_icon( $mistri_experience_two_icons, [ 'aria-hidden' => 'true' ] ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php 
	}

    protected function content_template() {
        ?>
		<#

            view.addInlineEditingAttributes( 'mistri_experience_two_author_name', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_two_author_job_title', 'basic' );
			
            view.addInlineEditingAttributes( 'mistri_experience_two_counter_one_number', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_two_counter_one_title', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_two_counter_two_number', 'basic' );
            view.addInlineEditingAttributes( 'mistri_experience_two_counter_two_title', 'basic' );

			var videoIcons = elementor.helpers.renderIcon( view, settings.mistri_experience_two_icons, { 'aria-hidden': true }, 'i' , 'object' );

			view.addRenderAttribute(
				'mistri_experience_two_counter_one_number',
				{
					'class': 'count',
				}
			);
			view.addRenderAttribute(
				'mistri_experience_two_counter_two_number',
				{
					'class': 'count',
				}
			);
		#>
		<div class="container">
			<div class="experience-two ">
				<div class="row g-4">
					<div class="col-lg-9 wow fadeInDown" data-wow-duration="1.3s" data-wow-delay=".3s">
						<div class="image">
							<# if("yes" === settings.mistri_experience_two_author_bg_image_show){ #>
							<img src="{{{settings.mistri_experience_two_author_bg_image.url}}}" alt="image">
							<# } #>
							<div class="info">
								<div class="info_con">
									<ul>
										<# if("yes" === settings.mistri_experience_two_author_image_show){ #>
										<li>
											<img src="{{{settings.mistri_experience_two_author_image.url}}}" alt="image">
										</li>
										<# } #>
										<# if("yes" === settings.mistri_experience_two_author_head_show){ #>
										<li>
											<h4><a href="{{{settings.mistri_experience_two_author_url.url}}}"  {{{ view.getRenderAttributeString( 'mistri_experience_two_author_name' )}}}>{{{settings.mistri_experience_two_author_name}}}</a></h4>
											<span {{{ view.getRenderAttributeString( 'mistri_experience_two_author_job_title' )}}}>{{{settings.mistri_experience_two_author_job_title}}}</span>
										</li>
										<# } #>
									</ul>
								</div>
								<# if("yes" === settings.mistri_experience_two_author_signature_show){ #>
								<div class="signature">
									<img src="{{{settings.mistri_experience_two_author_signature_image.url}}}" alt="icon">
								</div>
								<# } #>
							</div>
						</div>
					</div>
					<div class="col-lg-3 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
						<div class="item">
							<div class="content bor-bottom pb-30">
								<h2><span {{{ view.getRenderAttributeString( 'mistri_experience_two_counter_one_number' )}}}>{{{settings.mistri_experience_two_counter_one_number}}}</span>{{{settings.mistri_experience_two_counter_one_symbol}}}</h2>
								<span>{{{settings.mistri_experience_two_counter_one_title}}}</span>
							</div>
							<div class="content pt-30">
								<h2><span {{{ view.getRenderAttributeString( 'mistri_experience_two_counter_two_number' )}}}>{{{settings.mistri_experience_two_counter_two_number}}}</span>{{{settings.mistri_experience_two_counter_two_symbol}}}</h2>
								<span>{{{settings.mistri_experience_two_counter_two_title}}}</span>
							</div>
						</div>
						<div class="experience_video overlay50">
							<img src="{{{settings.mistri_experience_two_icon_bg_image.url}}}" alt="image">
							<div class="video-btn-wrp">
								<div class="video video-pulse">
									<a class="video-popup secondary-bg" href="{{{settings.mistri_experience_two_youtube_video_link.url}}}">{{{videoIcons.value}}}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php 
    }
}
