<footer>

	<div class="container-lg">
		<div class="row" style="background-image: url(<?php echo get_field( 'footer_bg', 50 )['url']; ?>);">


			<?php
			for ( $i = 1; $i < 4; $i++ ) {
				;
				?>


			<div class=" item col-6 col-md-4  ">
				<?php echo get_field( 'footer_field_' . $i, 50 ); ?>
			</div>

				<?php
			};
			?>

		</div>
	</div>
	<div class="info">
		<?php echo get_field( 'footer_info', 50 ); ?>
	</div>

</footer>
<?php wp_footer(); ?>

</html>
