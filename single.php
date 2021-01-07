<?php
/* Template Name: singlepage */
?>

<?php get_header(); ?>

<div class="row product-info-title">
	<h1><?php the_title() ?></h1>
</div>

<div class="row productinfo align-center">
	<div class="column small-12 large-12">
		<?php
		$images = get_field('gallery');
		if ($images): ?>
			<div class="gallery-slider">
				<div>
					<?php the_post_thumbnail('fp-small', 'class=single-slider-img'); ?>
				</div>
				<?php foreach ($images as $image): ?>
					<div>
						<img class="single-slider-img" src="<?php echo esc_url($image['sizes']['fp-small']); ?>"
								 alt="<?php echo esc_attr($image['alt']); ?>"/>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
	<div class="column small-12 large-12"><?php while (have_posts()) :
		the_post(); ?>
		<div class="singlecontent"><?php the_content() ?></div>
	</div>
</div>
	<div class="row align-center-middle single-quote">
		<a class="single-quote-btn" type="button" href="<?php get_site_url() ?>/#get-quote">Get a quote</a>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>
