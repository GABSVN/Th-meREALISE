<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
* @package WordPress
 * @subpackage REALISE_Theme
 * @since REALISE_Theme 3000.1.0
 */

?>
			<footer id="site-footer" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'themerealise' )
							);
							?>
							<a href="<?php echo esc_url('https://www.realise.ch/fr/formations-coaching-la-formation-digitale'); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						}
						?>

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://www.realise.ch/fr/formations-coaching-la-formation-digitale', 'themerealise' ) ); ?>">
								<?php _e( 'Developped by Team REALISE', 'themerealise' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */

							

							printf( __('<img src= "wp-content/themes/THEME-WP-REALISE/assets/images/Yoda-Bby.gif" class="img-ToTheTOP" alt="Faites défiler vers le haut"> %', 'themerealise' ), 
							'<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'themerealise' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		
			<?php wp_footer() ?>
<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                       
                    </div>
                    
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">copyright 2022 @Realise</p>
            </div>
        </footer>
    </div>
</body>
</html>
		
			<?php wp_footer(); ?>

	</body>
</html>
