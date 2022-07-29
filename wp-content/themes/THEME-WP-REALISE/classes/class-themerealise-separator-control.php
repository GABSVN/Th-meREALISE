<?php
/**
 * Customizer Separator Control settings for this theme.
 *
 * @package WordPress
 * @subpackage REALISE_Theme
 * @since REALISE_Theme 3000.1.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'themerealise_Separator_Control' ) ) {
		/**
		 * Separator Control.
		 *
		 * @since REALISE_Theme 3000.1.0
		 */
		class themerealise_Separator_Control extends WP_Customize_Control {
			/**
			 * Render the hr.
			 *
			 * @since REALISE_Theme 3000.1.0
			 */
			public function render_content() {
				echo '<hr/>';
			}

		}
	}
}
