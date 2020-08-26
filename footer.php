<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php endif; ?>
			<div class="site-imprint-container">
				<div class="row">
					<div class="region-footer">
						<div class="about-container">
							<div class="about-text-container">
								<h3>Über umverkehR</h3>
								<p>umverkehR ist eine verkehrspolitische Umweltorganisation und parteipolitisch unabhängig. Wir setzen uns für eine ökologische, sozialverträgliche und zukunftsweisende Mobilität ein.</p>
								<p>Postkonto: 80-67097-2</p>
							</div>
						</div>
					</div>
					<div class="region-footer-second">
						<div class="address-container">
							<div class="address-text-container">
								<h3>umverkehR</h3>
								<p>umverkehR<br>
									Kalkbreitestrasse 2<br>
									Postfach<br>
									8036 Zürich
								</p>
								<p><a href="tel:0041445004595">+41 44 242 72 76</a></p>
								<p><a href="mailto:info@umverkehr.ch" class="mailto" data-extlink="">info@umverkehr.ch</a><br><a href="/">www.umverkehR.ch</a></p>
							</div>
						</div>
						<nav class="navigation-container">
							<div class="navigation-links-container">
								<ul class="navigation-links">
									<li class="navigation-item">
										<a href="https://www.umverkehr.ch/spenden" class="navigation-link"><span class="label">SPENDEN</span></a></li>
									<li class="navigation-item">
										<a href="https://www.umverkehr.ch/impressum" class="de navigation-link"><span class="label">Impressum</span></a></li>
									<li class="navigation-item">
										<a href="https://www.umverkehr.ch/agb" class="navigation-link" ><span class="label">AGB</span></a></li>
									<li class="navigation-item">
										<a href="https://www.umverkehr.ch/ueber-uns/kontakt" class="navigation-link" ><span class="label">Kontakt</span></a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentynineteen' ) ); ?>" class="imprint">
					<?php
					/* translators: %s: WordPress. */
					printf( __( 'Proudly powered by %s.', 'twentynineteen' ), 'WordPress' );
					?>
				</a>
				<p>
					<strong>©</strong>Copyright 2020 umverkehR. All rights reserved.
				</p>
			</div>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
