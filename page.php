<?php get_header(); ?>
<?php wp_footer(); ?>
<?php
while ( have_posts() ) :
	the_post();
	?>

<div class="container" id="page">
<h1 class="page_title"> <?php the_title(); ?></h1>
	
<p class="page_content"><?php the_content(); ?></p>
	
</div>
	


<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
