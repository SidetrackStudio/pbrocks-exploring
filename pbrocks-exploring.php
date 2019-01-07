<?php
/**
 * Plugin Name: PBrocks Exploring
 * Plugin URI: https://github.com/SidetrackStudio/pbrocks-exploring
 * Author: pbrocks
 * Author URI: https://pbrocks.sidetrack.studio/exploring-the-block-api/
 * Description: Exploring the Blocks API creates a basic WP Block and uses PHP to deliver a shortcode with properties.
 * Version: 1.0.1
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: pbrocks-exploring
 * Domain Path: /languages
 */

defined( 'ABSPATH' ) || die( 'Nothing to see here, folks!' );

require 'blocks/blocks.php';
/**
 * [load_exploring_blocks_api_textdomain] Tie in to GlotPress to handle translations.
 *
 * @return null
 */
function load_exploring_blocks_api_textdomain() {
	load_plugin_textdomain( 'pbrocks-exploring', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'load_exploring_blocks_api_textdomain' );
