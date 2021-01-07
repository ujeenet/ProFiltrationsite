<?php
/* Template Name: servicepage */
?>
<?php get_header();?>
<?php
if (isset($category)){
	$args = array(
		'post_type'   => 'Service',
		'post_status' => 'publish',
		'tax_query' => array(
			array(
				'taxonomy' => 'category', //or tag or custom taxonomy
				'field' => 'slug',
				'terms' => $category,
			)
		)
	);
}
else{
	$args = array(
		'post_type'   => 'Service',
		'post_status' => 'publish',
	);
}
?>

<?php
$products = new WP_Query( $args );
if( $products->have_posts() ) :
	?>
	<div class="row productrow " >

		<?php
		$args = array(
			'show_option_all'    => '',
			'show_option_none'   => __('No categories'),
			'orderby'            => 'name',
			'order'              => 'ASC',
			'style'              => 'check',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'use_desc_for_title' => 1,
			'child_of'           => 0,
			'feed'               => '',
			'feed_type'          => '',
			'feed_image'         => '',
			'exclude'            => '',
			'exclude_tree'       => '',
			'include'            => '',
			'hierarchical'       => true,
			'title_li'           => __( 'Categories' ),
			'number'             => NULL,
			'echo'               => 1,
			'depth'              => 0,
			'current_category'   => 0,
			'pad_counts'         => 0,
			'taxonomy'           => 'category',
			'walker'             => 'Walker_Category',
			'hide_title_if_empty' => false,
			'separator'          => '<br />',
		);
		?>

	</div>

	<div class="row align-center-middle">
		<?php
		while( $products->have_posts() ) :
			$products->the_post();
			?>

			<div class="column large-4 small-5">
				<div class="products">

					<h4 class="product-title"><?php echo get_the_title()?></h4>

					<?php $id = get_post_thumbnail_id()?>
					<img src="<?php echo wp_get_attachment_image_url($id, 'products') ?>" alt="image">
					<div class="productprice">	<?php the_excerpt();?></div>
					<div class="info-btns column  align-justify text-center">
						<a class="info" type="button" href="<?php  the_permalink() ?>">More</a>
						<a class="info" type="button" href="<?php get_site_url()?>/#get-quote" >Quote</a>
					</div>
				</div>
			</div>

		<?php
		endwhile;
		wp_reset_postdata();
		?>
	</div>

<?php
else :
	esc_html_e( 'No products found!', 'text-domain' );
endif;
?>

<?php get_footer();?>
