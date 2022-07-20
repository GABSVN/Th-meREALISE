/**
 * Remove squared button style
 *
 * @since REALISE_Theme 3000.1.0
 */
/* global wp */
wp.domReady( function() {
	wp.blocks.unregisterBlockStyle( 'core/button', 'squared' );
} );
