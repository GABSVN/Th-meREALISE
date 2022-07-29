<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
* @package WordPress
 * @subpackage REALISE_Theme
 * @since REALISE_Theme 3000.1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$themerealise_unique_id = themerealise_unique_id( 'search-form-' );

$themerealise_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
// Backward compatibility, in case a child theme template uses a `label` argument.
if ( empty( $themerealise_aria_label ) && ! empty( $args['label'] ) ) {
	$themerealise_aria_label = 'aria-label="' . esc_attr( $args['label'] ) . '"';
}
?>
<form role="search" <?php echo $themerealise_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $themerealise_unique_id ); ?>">
		<span class="screen-reader-text"><?php _e( 'Search for:', 'themerealise' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>
		<input type="search" id="<?php echo esc_attr( $themerealise_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'themerealise' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'themerealise' ); ?>" />
</form>
