<div class="index-block_6">

	<div class="container">
		<h4>相關連結</h4>


		<div class="row item_box">
			<?php
			for ( $i = 1; $i < 7; $i++ ) {
				$image = get_field( 'related_img_' . $i, 19 );
				if ( ! empty( $image ) ) :
					?>

			<div class=" col-6 col-md-4 col-lg-3">
				<div class="item">
					<a href="<?php echo esc_url( $image['caption'] ); ?>" target="_blank" rel="noopener">
						<img src="<?php echo esc_url( $image['url'] ); ?>"
							alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					</a></div>
			</div>

				<?php endif;} ?>

		</div>


	</div>



</div>
