<?php
/**
 * The template for displaying the 404 template in the REALISE Theme.
 *
 * @package WordPress
 * @subpackage REALISE_Theme
 * @since REALISE_Theme 3000.1.0
 */

get_header();
?>

<main id="site-content">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Oups!!', 'themerealise' ); ?></h1>

		<div class="intro-text">
			<p><?php _e( 'Du côté obscur de la force tu es tombé..
				Vers la lumière il te faut revenir!!', 'themerealise' ); ?></p>
		</div>

		

		<?php
		get_search_form(
			array(
				'aria_label' => __( '404 not found', 'themerealise' ),
			)
		);
		?>


	</div><!-- .section-inner -->

</main><!-- #site-content -->

<br>
<br>
<br>
<br>

<div class="img-404-image">
			<img src= "wp-content/themes/THEME-WP-REALISE/assets/images/Yoda-Bby.gif" class="img-Yoda">
</div>	


<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
