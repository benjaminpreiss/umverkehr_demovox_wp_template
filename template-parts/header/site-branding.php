<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="site-branding">

	<?php if ( has_custom_logo() ) : ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>
	<?php $blog_info = get_bloginfo( 'name' ); ?>
	<?php if ( ! empty( $blog_info ) ) : ?>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
	<?php elseif ( !has_custom_logo() ) : ?>
		<div class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home"><svg class="custom-header-logo" version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 420.2 138.6" style="enable-background:new 0 0 420.2 138.6;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;}
</style>
<path class="st0" d="M284.5,38.2c-3.9,0-4.5,3.3-4.8,4.8h9.3c0-0.5-0.1-1-0.2-1.5C288.3,39.5,286.5,38.2,284.5,38.2z"/>
<path class="st0" d="M184.1,38.2c-3.8,0-4.5,3.3-4.8,4.8h9.3c-0.1-0.5-0.1-1-0.2-1.5C188,39.5,186.2,38.2,184.1,38.2z"/>
<path class="st0" d="M365.5,28.9h-5.7v10.2h5.8c2.3,0,6.7-0.1,6.7-5.1S367.9,28.9,365.5,28.9z"/>
<path class="st0" d="M21.2,7v69.3H399V7H21.2z M68.9,63.5H56.7v-4.7c-0.3,0.9-0.9,1.7-1.6,2.4c-2.5,2.2-5.7,3.3-9,3.2
	c-5.1-0.1-7.8-2-8.9-3.2c-3.1-3-3.2-7.2-3.2-10.2V31.4h12.8v17.5c0,1.9,0.1,5.2,4.6,5.2s4.6-3.5,4.7-5.7v-17h12.8V63.5z M130.8,63.5
	H118V46.7c0-2-0.1-5.5-4.5-5.5c-4.7,0-4.7,3.8-4.7,5.2v17.2H96V46.2c0-0.6-0.1-1.2-0.2-1.9c-0.5-2-2.3-3.3-4.3-3.2
	c-1.3,0-2.5,0.4-3.5,1.3c-0.9,1-1.3,2.3-1.2,3.6v17.5H74.1V31.5h12.2v4.6c1-1.6,3.2-5.4,10.2-5.4c1.7,0,3.3,0.3,4.9,0.7
	c2.8,0.7,5.1,2.6,6.3,5.3c0.9-2.1,3.8-6,11.2-6c3.3-0.1,6.5,1,8.9,3.2c2.9,2.8,3,6.3,3,9.4L130.8,63.5z M142.5,63.5l-10.7-32.1h13.5
	l2.5,11.9c0.7,3.8,0.8,4.8,1.4,9.6c0.5-4.3,0.7-5.5,1.5-10.2l2.6-11.4h13.4L156,63.5H142.5z M180.7,54.3c1,1,2.4,1.5,3.9,1.5
	c2.9,0,4.5-1.5,5.8-4.2l10.5,4.4c-3.8,5.8-9.4,8.8-17.1,8.8c-11.9,0-17.7-8.6-17.7-17.5c0-10.5,7.3-17.2,17.7-17.2
	c4.8-0.1,9.4,1.6,12.9,4.8c4.7,4.7,4.8,10,4.9,14.9h-22.4C179.1,51.4,179.6,53,180.7,54.3z M228,41.5c-0.9-0.1-1.7-0.1-2.6-0.1
	c-7.5,0-7.6,4.9-7.7,7v15.1H205V31.2h12.3v3c3.5-3.1,5.8-3.5,10.7-3.5V41.5z M253.4,63.5l-7-12.2l-3.4,3.2v9h-12.8V19.8h12.8v20.8
	l8.7-9.2h15.6L255.2,43l12.8,20.5H253.4z M281.1,54.3c1,1,2.4,1.5,3.8,1.5c2.9,0,4.5-1.5,5.8-4.2l10.5,4.4c-3.8,5.8-9.4,8.8-17,8.8
	c-11.9,0-17.7-8.6-17.7-17.5c0-10.5,7.3-17.2,17.7-17.2c3.9,0,9,1,12.9,4.8c4.7,4.7,4.8,10,4.9,14.9h-22.5
	C279.4,51.4,280,53,281.1,54.3z M340.2,63.5h-12.7V45.2c-0.1-1.4-0.1-4.6-4.6-4.6c-4.7,0-4.8,3.3-4.8,4.8v18.1h-12.8V19.7h12.7v14.9
	c1.2-1.4,3.7-4.6,10.3-4.6c3.3-0.1,6.5,1,8.9,3.2c2.7,2.8,2.8,6.4,2.9,9.2L340.2,63.5z M372.4,63.5l-8.5-15.4h-4.1v15.4h-13.9V19.7
	h21.8c4.1,0,8.1,0.3,10.8,1.4c5.8,2.5,7.6,8.4,7.6,12.6c0.1,3.3-1.1,6.4-3.4,8.8c-1.6,1.6-3.5,2.7-5.6,3.3l10.7,17.7H372.4z"/>
<path class="st0" d="M22.6,89.2h37.2v8.5l-21,23h21v10.2H21.3v-8.3l21.4-23.3H22.6V89.2z"/>
<path class="st0" d="M63.4,100.3h12.2v16.6c0,1.8,0.1,5,4.4,5s4.4-3.4,4.4-5.4v-16.2h12.2v30.6H85v-4.5c-0.3,0.9-0.9,1.6-1.5,2.2
	c-2.4,2.1-5.4,3.1-8.6,3c-4.8-0.1-7.4-1.9-8.4-3c-3-2.9-3-6.8-3.1-9.7L63.4,100.3z"/>
<path class="st0" d="M101.5,89.2h12.2V109l8.3-8.7h14.9l-11.6,11l12.2,19.5h-13.9l-6.7-11.6l-3.2,3.1v8.6h-12.2V89.2z"/>
<path class="st0" d="M139.1,100.3h12.2v16.6c0,1.8,0.1,5,4.4,5s4.4-3.4,4.4-5.4v-16.2h12.2v30.6h-11.6v-4.5
	c-0.3,0.9-0.8,1.6-1.5,2.2c-2.3,2.1-5.4,3.2-8.6,3c-4.8-0.1-7.4-1.9-8.4-3c-2.9-2.9-3-6.8-3.1-9.7L139.1,100.3z"/>
<path class="st0" d="M188.5,104.3c1-1.4,3.3-4.8,10-4.8c4.8,0,7.3,1.9,8.3,2.8c2.9,2.8,3.1,6.9,3.1,9.2v19.3h-12.1v-16.7
	c0-1.5-0.1-4.6-4.1-4.6c-4.3,0-4.4,3.4-4.4,5v16.3H177v-30.5h11.5V104.3z"/>
<path class="st0" d="M216.7,97.9c0.1-2.3,0.2-4.5,2.2-6.6c0.9-1,3.4-2.9,9-2.9c2.1,0,4.3,0.3,6.4,0.8v8.3c-0.7-0.3-1.5-0.4-2.2-0.4
	c-3.3,0-3.3,2.3-3.3,3.8h5.5v6.6h-5.5v23.3h-12.1v-23.2h-4.6V101h4.6V97.9z"/>
<path class="st0" d="M239.9,91.4h12.2L252,101h5.2v6.6h-5.3l-0.1,11.7c0,1.2,0.1,3.2,3.3,3.2c0.7,0,1.5-0.1,2.2-0.2v8.3
	c-2.5,0.4-5.1,0.6-7.7,0.6c-1.3,0-5.6-0.1-8-2.5c-2.1-2.1-2.1-4.8-2.1-6.3l0.2-14.8h-4.2V101h4.3L239.9,91.4z"/>
<path class="st0" d="M278.9,89.2h12.1v8.1h-12.1V89.2z M278.9,100.3h12.1v30.6h-12.1V100.3z"/>
<path class="st0" d="M307.4,104.3c1-1.4,3.3-4.8,10-4.8c4.8,0,7.3,1.9,8.3,2.8c2.9,2.8,3.1,6.9,3.1,9.2v19.3h-12.1v-16.7
	c0-1.5-0.1-4.6-4.1-4.6c-4.3,0-4.4,3.4-4.4,5v16.3h-12.2v-30.5h11.5L307.4,104.3z"/>
<path class="st0" d="M333.5,89.2h12.2V109l8.3-8.7h14.9l-11.6,11l12.1,19.5h-13.9l-6.7-11.6l-3.2,3.1v8.6h-12.1V89.2z"/>
<path class="st0" d="M371.4,89.2h12.2v41.7h-12.2V89.2z"/>
<path class="st0" d="M398.9,119.7v11.1h-10.7v-11.1H398.9z"/>
</svg></a>
		</div>
	<?php endif; ?>

	<?php
	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) :
		?>
			<p class="site-description">
				<?php echo $description; ?>
			</p>
	<?php endif; ?>
	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
</div><!-- .site-branding -->
