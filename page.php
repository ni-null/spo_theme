<?php get_header(); ?>
<?php wp_footer(); ?>
<?php
while ( have_posts() ) :
	the_post();
	?>
<h3>
	<?php
	the_category( '&nbsp;&rsaquo;&nbsp;' );
	echo '&nbsp;&rsaquo;&nbsp;';
	the_title();
	?>
</h3>
	<?php the_content(); ?>



<?php endwhile; // end of the loop. ?>
