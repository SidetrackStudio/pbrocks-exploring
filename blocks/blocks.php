<?php
/**
 * Enqueues blocks in editor and dynamic blocks
 *
 * @package blocks
 */
defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

/**
 * Dynamic Block Requires
 */
require_once 'pbrocks-block/block.php';


/**
 * Enqueue block editor only JavaScript and CSS
 */
function pbrocks_block_editor_scripts() {
	wp_enqueue_script(
		'pbrocks-blocks-js',
		plugins_url( 'js/editor.blocks.js', __DIR__ ),
		array( 'wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-api', 'wp-editor' ),
		time()
	);
}
add_action( 'enqueue_block_editor_assets', 'pbrocks_block_editor_scripts' );

