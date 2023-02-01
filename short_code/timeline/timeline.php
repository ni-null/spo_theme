<?php




function timeline_box( $atts = array(), $content = null, $tag = '' ) {
	wp_enqueue_style( 'timeline', get_stylesheet_directory_uri() . '/short_code/timeline.css' );
	$atts    = array_change_key_case( (array) $atts, CASE_LOWER );
	$message = ' <div class="timeline"><ol>' . do_shortcode( $content ) . '</ol></div>';
	return $message;
}
add_shortcode( 'timeline_box', 'timeline_box' );




function timeline_item( $atts = array(), $content = null, $tag = '' ) {
	$atts    = array_change_key_case( (array) $atts, CASE_LOWER );
	$message = $message . '<li>';
	$message = $message . '<p class="diplome">' . esc_html( $atts['title'] ) . '</p>';

	if ( $atts['ststus'] == 'active' ) {
		$message = $message . '<span class="point_active"></span>';
	} else {
		$message = $message . '<span class="point"></span>';
	}
	if ( ! empty( $atts['des'] ) ) {
		$message = $message . '<p class="description">' . sprintf( esc_html( $atts['des'] ) ) . '</p>';
	}

	$message = $message . '</li>';
	return $message;

}
add_shortcode( 'timeline_item', 'timeline_item' );
