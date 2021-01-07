<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<div class="no-js" <?php language_attributes(); ?> >

<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="robots" content="index, follow">
	<meta name="description" content="Pro-filtration" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<script id="__bs_script__">//<![CDATA[
	document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.12'><\/script>".replace("HOST", location.hostname));
	//]]></script>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
	<?php get_template_part('template-parts/mobile-off-canvas'); ?>
<?php endif; ?>

<div class="site-header" role="banner">
<div class="row align-justify ">
<div class="columns large-9 small-9 mobile-contacts " >
	<a style="color: black; padding-right: 3px ; font-size: 10px" class="mobile-telephone"
		 href="tel:<?php the_field('telephone', 'options'); ?>" ><img id="phoneicon mobile-phone-icon" src="<?php the_field('phone', 'options'); ?>" width="11"
			 >:
		 <?php the_field('telephone', 'options'); ?></a>
	<div style="display: inline-block;"><a style="color: black; font-size: 10px" class="mobile-email" >	<img  src="<?php the_field('mail', 'options'); ?>" width="11" >
			: <?php the_field('email', 'options'); ?></a></div>
</div>
	<div class="columns large-2 small-2 mobile-language " >
		<div class="mobile-language" style="display: block">
		</div>
	</div>
</div>
	<div
		class=" row site-title-bar mobile-bar title-bar align-center align-justify" <?php foundationpress_title_bar_responsive_toggle(); ?>>
		<div class="column large-2 small-4">
			<button aria-label="<?php _e('Main Menu', 'foundationpress'); ?>" class="menu-burger" type="button"
							data-toggle="mobile-menu"></button>
			<div class="mobile-menu" id="mobile-menu"
					 data-animate="fade-in fade-out">  <?php foundationpress_mobile_nav(); ?></div>
			<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
				</span>
		</div>
		<a style="margin-left: auto;margin-right: auto" href="<?php get_site_url()?>/">	<img class="logo mobile-logo" src="<?php the_field('logo', 'options'); ?>"></a>
		<div class="large-2 small-4 mobile-sociallinks sociallinks " >
			<?php if (have_rows('social', 'options')): ?>
<div>
				<ul>
					<?php while (have_rows('social', 'options')): the_row(); ?>
						<?php $id = get_sub_field('icon'); ?>
						<li>
							<a href="<?php the_sub_field('link'); ?>">
								<img src="<?php echo wp_get_attachment_image_url($id, 'social') ?>" alt="image">
							</a>
						</li>

					<?php endwhile; ?>

				</ul>
</div>
			<?php endif; ?>
		</div>

	</div>

</body>

	<div class="row align-justify" id="contacts">

		<div class="columns large-10 small-10" id="phones">


<a style="color: black; margin-left: 7px;">
			<img src="<?php the_field('mail', 'options'); ?>" width="16" height="18"> : <?php the_field('email', 'options'); ?>
</a>
			<a style="color: black; margin-left: 30px; "><img style="width: 20px" id="phoneicon" src="<?php the_field('telephone-img', 'options'); ?>" width="15"
																												height="15">: <?php the_field('telephone', 'options'); ?>
			</a>
		</div>
		<div class="column large-2 small-2">
			<div class="language">

			</div>
		</div>
	</div>


		<div class="row align-middle align-center headerrow">
			<div class="columns small-2 large-2">
				<a href="<?php get_site_url()?>/"><img class="logo" src="<?php the_field('logo', 'options'); ?>"></a>
			</div>
			<div class="column large-8 small-8 navigation-menu" id="navigation-menu"> <?php wp_nav_menu(); ?></div>
			<div class="columns large-2 small-2 sociallinks">

				<?php if (have_rows('social', 'options')): ?>

					<ul>

						<?php while (have_rows('social', 'options')): the_row(); ?>

							<?php $id = get_sub_field('icon'); ?>

							<li>
								<a href="<?php the_sub_field('link'); ?>">
									<img src="<?php echo wp_get_attachment_image_url($id, 'social') ?>" alt="image">
								</a>
							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>
		</div>
</div>
</html>

	</header>

	<script>
		$('.lang-switcher').foundation('toggle');
	</script>
