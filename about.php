<?php
/* Template Name: about */
?>

<?php get_header(); ?>



<?php the_title(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post();
	the_content();
endwhile;
else: ?>

	<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
