<?php get_header(); ?>


<div class="d-flex" id="category">
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

					print( "<div class='category_lv1_box'>" );
					foreach ( $child_ids as $child ) {
						printf(
							'<a  href="%1$s">%2$s</a>',
							esc_url( get_category_link( $child->term_id ) ),
							'<div class="category_lv1">' . $child->name . '</div>'
						);

					}
					print( '</div>' );
				}
				?>



		</div>
	</div>
	<!-- Sidebar-->

	<div id="category-wrapper">

		<button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>

		<!-- Page content-->
		<div class="category_box ">

			<div class="content_one ">
				<h1 class="category_title"> 分類:<?php echo single_cat_title(); ?></h1>
			</div>

			<div class="row">
				<?php

				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();

						?>


				<div class="col-6 col-md-4 col-xl-3 product_box">
					<a href="<?php echo esc_url( the_permalink() ); ?>">
						<div class="product_item">
							<?php echo kama_thumb_img( 'w=200 &h=200' ); ?>
							<div div class='title'> <?php echo esc_html( get_the_title() ); ?>
							</div>
						</div>
					</a>
				</div>
						<?php
					endwhile;
					endif;
				?>
			</div>

		</div>
	</div>
</div>





<script>
	window.addEventListener('DOMContentLoaded', event => {

		// Toggle the side navigation
		const sidebarToggle = document.body.querySelector('#sidebarToggle');
		if (sidebarToggle) {
			sidebarToggle.addEventListener(
				'click',
				event => {
					event.preventDefault();
					document.body.classList.toggle('sb-sidenav-toggled');
					localStorage.setItem(
						'sb|sidebar-toggle',
						document.body.classList.contains(
							'sb-sidenav-toggled'
						)
					);
				}
			);
		}
	});
</script>
