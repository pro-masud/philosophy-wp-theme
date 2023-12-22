<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Plugin class.
 *
 * The main class that initiates and runs the addon.
 *
 * @since 1.0.0
 */
final class Plugin {

	/**
	 * Addon Version
	 *
	 * @since 1.0.0
	 * @var string The addon version.
	 */
	const VERSION = '1.0.0';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 * @var string Minimum Elementor version required to run the addon.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '3.16.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 * @var string Minimum PHP version required to run the addon.
	 */
	const MINIMUM_PHP_VERSION = '7.4';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 * @access private
	 * @static
	 * @var \Elementor_Test_Addon\Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 * @return \Elementor_Test_Addon\Plugin An instance of the class.
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Constructor
	 *
	 * Perform some compatibility checks to make sure basic requirements are meet.
	 * If all compatibility checks pass, initialize the functionality.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function __construct() {

		if ( $this->is_compatible() ) {
			add_action( 'elementor/init', [ $this, 'init' ] );
		}

	}

	/**
	 * Compatibility Checks
	 *
	 * Checks whether the site meets the addon requirement.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function is_compatible() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return false;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return false;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return false;
		}

		return true;

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have Elementor installed or activated.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'mistri-elementor-addon' ),
			'<strong>' . esc_html__( 'Mistri Elementor Addon', 'mistri-elementor-addon' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'mistri-elementor-addon' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required Elementor version.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'mistri-elementor-addon' ),
			'<strong>' . esc_html__( 'Mistri Elementor Addon', 'mistri-elementor-addon' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'mistri-elementor-addon' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'mistri-elementor-addon' ),
			'<strong>' . esc_html__( 'Mistri Elementor Addon', 'mistri-elementor-addon' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'mistri-elementor-addon' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Initialize
	 *
	 * Load the addons functionality only after Elementor is initialized.
	 *
	 * Fired by `elementor/init` action hook.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function init() {

		add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );
		add_action( 'elementor/controls/register', [ $this, 'register_controls' ] );

		/**
		 * including Mistir categorys 
		 * @ function name 'mistri_plugin_categores_register_controls'
		 * */ 
		add_action( 'elementor/elements/categories_registered', [ $this, 'mistri_plugin_categores_register_controls' ] );

	}

	/**
	 * Register Widgets
	 *
	 * Load widgets files and register new Elementor widgets.
	 *
	 * Fired by `elementor/widgets/register` action hook.
	 *
	 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
	 */
	public function register_widgets( $widgets_manager ) {

        // Add more widget here
		require_once( __DIR__ . '/../widgets/home_one/mst-slider-one.php' );
        require_once( __DIR__ . '/../widgets/home_two/mst-slider-two.php' );
        require_once( __DIR__ . '/../widgets/home_three/mst-slider-three.php' );
		require_once( __DIR__ . '/../widgets/home_one/mst-about-us-one.php' );
        require_once( __DIR__ . '/../widgets/home_two/mst-about-us-two.php' );
		require_once( __DIR__ . '/../widgets/about_us/mst-about-us-three.php' );
		require_once( __DIR__ . '/../widgets/home_one/mst-trust-slider.php' );
		require_once( __DIR__ . '/../widgets/home_one/mst-marquee.php' );
		require_once( __DIR__ . '/../widgets/home_one/mst-service-one.php' );
		require_once( __DIR__ . '/../widgets/home_two/mst-service-two.php' );
        require_once( __DIR__ . '/../widgets/service/mst-service-post.php' );
        require_once( __DIR__ . '/../widgets/single/mis-service-single.php' );
        require_once( __DIR__ . '/../widgets/single/mis-service-benefit.php' );
		require_once( __DIR__ . '/../widgets/home_one/mst-project-one.php' );
		require_once( __DIR__ . '/../widgets/home_one/mst-experience-one.php' );
        require_once( __DIR__ . '/../widgets/home_two/mst-experience-two.php' );
        require_once( __DIR__ . '/../widgets/home_three/mst-experience-three.php' );
        require_once( __DIR__ . '/../widgets/home_three/mst-experience-four.php' );
		require_once( __DIR__ . '/../widgets/home_one/mst-brand.php' );
		require_once( __DIR__ . '/../widgets/home_one/mst-testimonial-one.php' );
		require_once( __DIR__ . '/../widgets/home_two/mst-testimonial-two.php' );
		require_once( __DIR__ . '/../widgets/home_three/mst-testimonial-three.php' );
        require_once( __DIR__ . '/../widgets/home_one/mst-blog.php' );
        require_once( __DIR__ . '/../widgets/home_two/mst-video.php' );
        require_once( __DIR__ . '/../widgets/home_three/mst-our-portfolio.php' );
        require_once( __DIR__ . '/../widgets/about_us/mst-choose.php' );
        require_once( __DIR__ . '/../widgets/about_us/mst-team-slider.php' );
        require_once( __DIR__ . '/../widgets/teams/mst-team-one.php' );
        require_once( __DIR__ . '/../widgets/teams/mst-team-two.php' );
        require_once( __DIR__ . '/../widgets/teams/mst-team-three.php' );
        require_once( __DIR__ . '/../widgets/single/mst-team-single-details.php' );
        require_once( __DIR__ . '/../widgets/single/mis-team-education.php' );
        require_once( __DIR__ . '/../widgets/about_us_two/mst-story-one.php' );
        require_once( __DIR__ . '/../widgets/about_us_two/mst-story-two.php' );
        require_once( __DIR__ . '/../widgets/service/mst-service-slider.php' );
        require_once( __DIR__ . '/../widgets/portfolio/mis-portfolio.php' );
        require_once( __DIR__ . '/../widgets/faq/mst-faq.php' );
        require_once( __DIR__ . '/../widgets/woocommerce/product-carousel.php' );

        // initilize more widget here 
		$widgets_manager->register( new Mistri_Slider_One() );
		$widgets_manager->register( new Mistri_Slider_Two() );
		$widgets_manager->register( new Mistri_Slider_Three() );
		$widgets_manager->register( new Mistri_Brand() );
		$widgets_manager->register( new Mistri_About_Us_One() );
		$widgets_manager->register( new Mistri_About_Us_Two() );
		$widgets_manager->register( new Mistri_About_Us_Three() );
		$widgets_manager->register( new Mistri_Trust_Slider() );
		$widgets_manager->register( new Mistri_Marquee() );
		$widgets_manager->register( new Mistri_Service_One() );
		$widgets_manager->register( new Mistri_Service_Two() );
		$widgets_manager->register( new Mistri_Service_Post() );
		$widgets_manager->register( new Mistri_Service_Single() );
		$widgets_manager->register( new Mistri_Service_Benefit() );
		$widgets_manager->register( new Mistri_Project_One() );
		$widgets_manager->register( new Mistri_Experience_One() );
		$widgets_manager->register( new Mistri_Exprience_Two() );
		$widgets_manager->register( new Mistri_Exprience_Three() );
		$widgets_manager->register( new Mistri_Exprience_Four() );
		$widgets_manager->register( new Mistri_Blog_Section_Widget() );
		$widgets_manager->register( new Mistri_Testimonial_One() );
		$widgets_manager->register( new Mistri_Testimonial_Two() );
		$widgets_manager->register( new Mistri_Testimonial_Three() );
		$widgets_manager->register( new Mistri_Video_Area() );
		$widgets_manager->register( new Mistri_Our_Portfolio() );
		$widgets_manager->register( new Mistri_Choose() );
		$widgets_manager->register( new Mistri_Team_Slider() );
		$widgets_manager->register( new Mistri_Team_One() );
		$widgets_manager->register( new Mistri_Team_Two() );
		$widgets_manager->register( new Mistri_Team_Three() );
		$widgets_manager->register( new Mistri_Team_Details() );
		$widgets_manager->register( new Mistri_Team_Education_Details() );
		$widgets_manager->register( new Mistri_Stroy_One() );
		$widgets_manager->register( new Mistri_Portfolio_Story_Two() );
		$widgets_manager->register( new Mistri_Home_Service_Slider() );
		$widgets_manager->register( new Mistri_Portfolio() );
		$widgets_manager->register( new Mistri_FAQ() );
        $widgets_manager->register( new Mistri_Products() );
	}

	/**
	 * Register Controls
	 *
	 * Load controls files and register new Elementor controls.
	 *
	 * Fired by `elementor/controls/register` action hook.
	 *
	 * @param \Elementor\Controls_Manager $controls_manager Elementor controls manager.
	 */
	public function register_controls( $controls_manager ) {

		// require_once( __DIR__ . '/includes/controls/control-1.php' );
		// require_once( __DIR__ . '/includes/controls/control-2.php' );

		// $controls_manager->register( new Control_1() );
		// $controls_manager->register( new Control_2() );

	}

	/**
	 * Mistir Elementor Categories function creating
	 * */ 
	 public function mistri_plugin_categores_register_controls($elemnets_manager){
		$elemnets_manager -> add_category(
			'mistri',
			[
				'title' => esc_html__( 'Mistri', 'elementor-addon'),
				'icon' => 'fa fa-plug',
			]
		);
	 }

}