<?php get_header(); ?>

<div id='home_page' class='main'>
 
<?php echo do_shortcode( '[metaslider id="8"]' ); ?>


	<?php get_template_part( 'component/index', 'block_1', get_post_format() ); ?>

	<?php get_template_part( 'component/index', 'block_2', get_post_format() ); ?>

	<?php get_template_part( 'component/index', 'block_3', get_post_format() ); ?>
	
	<?php get_template_part( 'component/index', 'block_4', get_post_format() ); ?>
   
	<?php get_template_part( 'component/index', 'block_5', get_post_format() ); ?>

	<?php get_template_part( 'component/index', 'block_6', get_post_format() ); ?>



</div>



 
<?php get_footer(); ?>
