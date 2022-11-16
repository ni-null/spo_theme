<div class="index-block_1 container " style="background-image: url(<?php echo get_field( 'index-block-one_bg', 19 )['url']; ?>);">



	<div class="row item_box">
		<?php
		for ( $i = 1; $i < 7; $i++ ) {
			$image = get_field( 'index-block-one_img' . $i, 19 );
			if ( ! empty( $image ) ) :
				?>

		<div class="item col-6 col-md-4 col-lg-2">
			<a href="<?php echo esc_url( $image['caption'] ); ?>" target="_blank" rel="noopener">
			<img src="<?php echo esc_url( $image['url'] ); ?>"alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		</a>
		</div>
	   
				<?php endif;} ?>

	</div>




</div>
