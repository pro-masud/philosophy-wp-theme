<?php 
/**
 * Plugin Name: Mistri theme companion
 * Plugin URI:  
 * Description: This is a helper of mistri theme.
 * Version:     1.0
 * Author:      ShalikTheme
 * Author URI:  https://shaliktheme.com
 * Text Domain: mistri
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Requires at least: 5.4
 * Requires PHP: 7.0
 * Requires Plugins: Required plugins
 *
 * @package     mistri
 * @author      ShalikTheme
 * @copyright   2024 ShalikTheme
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 *
 * Prefix:      mistri
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );
/**
 * Initialize the 'Mistri' plugin.
 */
add_action('plugins_loaded', function () {
    // Load plugin text domain for translation.
    load_plugin_textdomain('mistri', false, dirname(plugin_basename(__FILE__)) . '/languages');
    
    // Load plugin file
    require_once(__DIR__ . '/includes/Elementor/Plugin.php');

    // Run the plugin
    Plugin::instance();

    // Initialize Mistri Elementor Widgets
    new Mistri_Elementor_Widgets();
});

/**
 * The main class handling Mistri Elementor widgets and features.
 *
 * @since 1.0
 */
final class Mistri_Elementor_Widgets {

    /**
     * Plugin constructor.
     *
     * Initializes plugin constants and activation/deactivation hooks.
     */
    public function __construct() {
        $this->define_constants();
        $this->init();
        register_activation_hook(__FILE__, array($this, 'activate_plugin'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate_plugin'));
    }

    /**
     * Initialize additional plugin features.
     */
    private function init() {
        require_once __DIR__ . '/includes/Custom_Post_Type/Custom_Post_Type.php';
        require_once __DIR__ . '/includes/WP_Widget/Recent_Post.php';
        require_once __DIR__ . '/includes/WP_Widget/Gallery_Widget.php';
        require_once __DIR__ . '/includes/WP_Widget/Info_Widget.php';
        require_once __DIR__ . '/includes/WP_Widget/Social_Icon.php';
        require_once __DIR__ . '/includes/WP_Widget/Chat_Widget.php';

        new Custom_Post_Type();
    }

    /**
     * Define plugin's constants.
     *
     * @since 1.0
     */
    private function define_constants(){
        define('MISTRI_VERSION', '1.0');
        define('MISTRI_PLUGIN', __FILE__);
        define('MISTRI_PLUGIN_URL', plugin_dir_url(__FILE__));
        define('MISTRI_PLUGIN_PATH', plugin_dir_path(__FILE__));
    }

    /**
     * Activate the plugin.
     *
     * @since 1.0
     */
    public function activate_plugin() {
        flush_rewrite_rules();
    }

    /**
     * Deactivate the plugin.
     *
     * @since 1.0
     */
    public function deactivate_plugin() {
        flush_rewrite_rules();
    }
}
