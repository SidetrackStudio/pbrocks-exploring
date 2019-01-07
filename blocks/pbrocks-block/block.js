/**
 * Before registering the block in JavaScript, we want
 * to deconstruct the necessary variables.
 */
const el = wp.element.createElement,
	registerBlockType = wp.blocks.registerBlockType,
	ServerSideRender = wp.components.ServerSideRender,
    TextControl = wp.components.TextControl,
    TextareaControl = wp.components.TextareaControl,
	InspectorControls = wp.editor.InspectorControls;

/**
 * Even though we registered the block already in PHP, we also
 * need to do so in JavaScript for the editor to work properly.
 */
registerBlockType( 'pbrocks-exploring/pbrocks-block', {
	title: 'PBrocks Block',
	icon: {
		background: '#29c8aa',
		foreground: '#ffffff',
		src: 'sos',
	},
	category: 'common',

	/**
	 * If we hadn't registered our block in PHP, we'd want to  
	 * define attributes here.
	 */
	edit: function( props ) {
		return [
			/**
			 * The ServerSideRender element uses the REST API to call
			 * the rendering of the block in the PHP code.
			 */
			el( ServerSideRender, {
				block: 'pbrocks-exploring/pbrocks-block',
				attributes: props.attributes,
			} ),

			el( TextControl, {
				label: 'Title Box',
				value: props.attributes.value_one,
				onChange: ( value ) => { props.setAttributes( { value_one: value } ); }
			} ),
		]

	},
	// We're rendering in PHP, so return null in save().
	save: function() {
		return null;
	},
} );