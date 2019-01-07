<?php
/**
 * Enqueues blocks in editor and dynamic blocks
 *
 * @package blocks
 */

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

/**
 * Normally blocks are registered in JS, but here are mirroring the registration of our block in php, since we want to render via php. In this way, it is here, rather than in JS that e explicitly define the attributes for the block.
 *
 * We create a shortcode, [pbrocks-exploring-shortcode], which accepts three arguments, 'value_one', 'value_two', and  'value_three'. This shortcode would be used like so:
 *
 * [pbrocks-exploring-shortcode value_one="Input some value_one attribute value" value_two="Input some value_two attribute value" value_three="Input some value_three attribute value"]
 */

/**
 * Register our block and shortcode.
 *
 * Note that we use the same function signature in PHP and JS when doing server-side rendering.
 */
function pbrocks_block_init() {
	register_block_type(
		'pbrocks-exploring/pbrocks-block',
		array(
			'attributes'      =>
			array(
				'value_one'   => array(
					'type'    => 'string',
					'default' => 'A simple text box',
				),
				'value_two'   => array(
					'type'    => 'string',
					'default' => 'Ain\'t this purdy?',
				),
				'value_three' => array(
					'type'    => 'string',
					'default' => 'This will be more of a description.... And I could go on and on...',
				),
			),
			'editor_script'   => 'pbrocks-exploring', // The script name we gave in the wp_register_script() call.
			'render_callback' => 'pbrocks_block_render',
		)
	);

	add_shortcode( 'pbrocks-exploring-shortcode', 'pbrocks_block_render' );
}
add_action( 'init', 'pbrocks_block_init' );

/**
 * Although this might render on the frontend, the block will be broken in the editor.
 *
 * @param array $attributes The attributes set on the block or shortcode.
 */
function pbrocks_block_render( $attributes ) {
	echo '<h2 style="color:salmon;">' . $attributes['value_one'] . '</h2>';
	echo '<h4>' . $attributes['value_two'] . '</h4>';
	echo '<p>' . $attributes['value_three'] . '</p>';
}
