<?php get_header(); ?>
<!-- CSS only -->

<?php wp_footer(); ?>
<?php
while ( have_posts() ) :
	the_post();
	?>




	<?php the_content(); ?>



<div class="container">
	<div class="row">
		<div class="col-sm-3">
		<?php

		$args = array(
			'orderby' => 'name',
			'type'    => 'post',
			'parent'  => 0,
		);

		$categories = get_categories( $args );
		foreach ( $categories as $category ) {

			printf( '<div class="category_lv0">' . esc_html( $category->name ) . '</div>' );
				$child_ids = get_categories(
					array( 'parent' => $category->cat_ID )
				);

			foreach ( $child_ids as $child ) {
				printf(
					'<div class="category_lv1">' .
					'<a href="%1$s">%2$s</a>',
					esc_url( get_category_link( $child->term_id ) ),
					esc_html( $child->name ) .
					'</div>'
				);

			}
		}
		?>

		</div>
		<div class="col-sm-9">
			<div id="galleria" class="galleria">

				<a href="https://picsum.photos/id/237/1000/800">
					<img src="https://picsum.photos/id/237/200/100"></a>

				<a href="https://picsum.photos/id/23/1000/800">
					<img src="https://picsum.photos/id/23/200/100"></a>

				<?php
				$images = get_field( 'product_gallery' );
				if ( $images ) :
					foreach ( $images as $image ) :
						?>


				<a href="<?php echo esc_url( $image['url'] ); ?>">
					<img src="<?php echo esc_url( $image['url'] ); ?>">
				</a>

				<?php endforeach; ?>

				<?php endif; ?>


			</div>

		</div>

	</div>
</div>



<?php endwhile; // end of the loop. ?>




<script>
	Galleria.configure({
		transition: "fade",
		imageCrop: false,
		lightbox: true,
		responsive: true,
		showInfo: true,
		height: 600,
	});

	Galleria.run();
</script>
