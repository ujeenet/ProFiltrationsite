<?php
/* Template Name: homepage */
?>

<?php get_header(); ?>

<?php
$image = get_field('header_picture');
if (!empty($image)): ?>
	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
<?php endif; ?>
<?php if (have_rows('headerslider')): ?>

	<div class="headerslider row">

		<?php while (have_rows('headerslider')): the_row(); ?>

			<div>
				<?php $id = get_sub_field('sliderimg'); ?>
				<img class="slider-image" src="<?php echo wp_get_attachment_image_url($id, 'headerslider') ?>"
						 alt="oil purifier image">
				<div class="sliderwrapper">
					<h1 class="slider-title">  <?php the_sub_field('slidertitle'); ?></h1>
					<p class="slider-description">  <?php the_sub_field('description'); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	</div>


<?php endif; ?>

<section id="about-us">
	<div class="about-us row">
		<div class="column text-center">
			<h1><?php the_field('sectiontitle'); ?></h1>
			<p><?php the_field('sectionlabel'); ?></p>
		</div>
	</div>
</section>

<section class="services">

	<?php if (have_rows('serviceslider')): ?>

		<div class="serviceslider row">
			<?php while (have_rows('serviceslider')): the_row(); ?>
				<div class="servicewrapper">
					<h2 class="service-title"><?php the_sub_field('servicetitle'); ?></h2>
					<div class="service-description"><?php the_sub_field('servicedescription'); ?></div>
					<?php $id = get_sub_field('serviceimg'); ?>
				<div class="slider-image-wrapper">
					<img src="<?php echo wp_get_attachment_image_url($id, 'home-slider') ?>"
							 alt="filter-image">
				</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>
<section class="mobile-row">

	<?php if (have_rows('mobileslider')): ?>

		<div class="mobile-slider row">
			<?php while (have_rows('mobileslider')): the_row(); ?>
				<div class="mobilewrapper">
					<h2 class="mobileslider-title"><?php the_sub_field('mobile-title'); ?></h2>
					<p class="mobileslider-description"><?php the_sub_field('mobile-description'); ?></p>
					<a href="<?php the_sub_field('link'); ?>">
						<?php $id = get_sub_field('mobile-img'); ?>
						<div class="mobile-image">
							<img src="<?php echo wp_get_attachment_image_url($id, 'mobileslider') ?>"
									 alt="image">
						</div>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

</section>

<div class="row align-center-middle question" id="contact-us" style="height: 200px">
	<div class="column large-6 small-6" style="font-size: 38px; text-align: center">
		<div style="width: 300px; margin-right: auto; margin-left: auto"><?php the_field('question', 'options'); ?></div>
	</div>
	<div class="column large-6 small-6">
		<div style="margin-right: auto; margin-left: auto;">
			<a style="color: black; font-size: 30px;  ">
				<img style="width: 70px" id="phoneicon" src="<?php the_field('telephone-img', 'options'); ?>" width="70"
						 height="70">: <?php the_field('telephone', 'options'); ?>
			</a>
		</div>
	</div>
</div>
<section id="get-quote">
	<div class="contacts">
		<h2><?php the_field('contact_us', 'options'); ?></h2>


		<?php echo do_shortcode('[contact-form-7 id="245" title="Contact form 1"]'); ?>
	</div>
</section>
<?php echo $category ?>

<?php get_footer(); ?>

