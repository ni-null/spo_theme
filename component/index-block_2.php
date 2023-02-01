<div class="index-block_2  ">

	<div class="container">
		<h4>計畫時程</h4>
 
		<div class="row item_box">

		<?php
		for ( $i = 1; $i < 7; $i++ ) {
			$image = get_field( 'project_' . $i . '_img', 19 );
			if ( ! empty( $image ) ) :
				?>
 

			<div class="item col-6 col-md-4 col-lg-2">
		
					<img src="<?php echo esc_url( $image['url'] ); ?>"   />
		 
			</div>

				<?php endif;} ?>

		</div>



	</div>



</div>
