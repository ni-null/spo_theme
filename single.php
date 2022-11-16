<?php get_header(); ?>


<div class="d-flex" id="single">
	<!-- Sidebar-->
	<div class=" bg-white" id="sidebar-wrapper">
		<div class="list-group list-group-flush">
			<div class='category_title'>產品列表</div>
			<?php
				$args = array(
					'orderby'    => 'name',
					'type'       => 'post',
					'parent'     => 9,
					'hide_empty' => false,

				);

				$categories = get_categories( $args );


				foreach ( $categories as $category ) {

					printf( '<div class="category_lv0">' . esc_html( $category->name ) . '</div>' );
						$child_ids = get_categories(
							array( 'parent' => $category->cat_ID )
						);

					foreach ( $child_ids as $child ) {
						printf(
							'<a  href="%1$s">%2$s</a>',
							esc_url( get_category_link( $child->term_id ) ),
							'<div class="category_lv1">' . $child->name . '</div>'
						);

					}
				}
				?>



		</div>
	</div>
	<!-- Sidebar-->

	<div id="page-content-wrapper">

		<button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>

		<!-- Page content-->
		<div class="product_box container">

			<div class="content_one row">
				<h1><?php the_title(); ?> </h1>
				<div class="product_galleria  col-md-9">
					<div id="galleria" class="galleria">


						<a href="<?php echo esc_url( the_post_thumbnail_url() ); ?>">
							<img src="<?php echo esc_url( the_post_thumbnail_url() ); ?>">
						</a>

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
				<div class="product_btn col-md-3">
					<?php the_field( 'product_btn' ); ?>
				</div>
			</div>

			<div class="content">
				<h4>產品規格</h4>
				<div class="product_scp container">
					<div class="row">

						<?php the_content(); ?>

					</div>

				</div>
			</div>

			<div class="product_more content">
				<h4>產品實績</h4>
				<div class="imageGallery container">
					<div class="row">



						<?php
						$images = get_field( 'product_info_gallery' );
						if ( $images ) :
							foreach ( $images as $image ) :
								?>

						<div class="col-4">
							<a href="<?php echo esc_url( $image['url'] ); ?>">
								<img src="<?php echo esc_url( $image['url'] ); ?>">
							</a>
						</div>

						<?php endforeach; ?>

						<?php endif; ?>



					</div>

				</div>
			</div>
		</div>
	</div>
</div>





<script>
	window.addEventListener('DOMContentLoaded', event => {

		// Toggle the side navigation
		const sidebarToggle = document.body.querySelector('#sidebarToggle');
		if (sidebarToggle) {
			sidebarToggle.addEventListener('click', event => {
				event.preventDefault();
				document.body.classList.toggle('sb-sidenav-toggled');
				localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains(
					'sb-sidenav-toggled'));
			});
		}

	});

	Galleria.configure({
		transition: "fade",
		imageCrop: false,
		lightbox: true,
		responsive: true,
		height: 400,
		imagePosition: 'center',
		center: true

	});

	Galleria.run();

	$('.imageGallery a').simpleLightbox();
</script>

<style>


</style>
