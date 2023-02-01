<?php




function datasearch( $atts = array(), $content = null, $tag = '' ) {
	wp_enqueue_style( 'datasearch', get_stylesheet_directory_uri() . '/short_code/datasearch/datasearch.css' );
	wp_enqueue_style( 'jquery.dataTables', get_stylesheet_directory_uri() . '/short_code/datasearch/jquery.dataTables.min.css' );
	wp_enqueue_script( 'jquery.dataTables', get_stylesheet_directory_uri() . '/short_code/datasearch/jquery.dataTables.min.js' );
	wp_enqueue_script( 'datasearch', get_stylesheet_directory_uri() . '/short_code/datasearch/datasearch.js' );

	$atts    = array_change_key_case( (array) $atts, CASE_LOWER );
	$message = file_get_contents( get_stylesheet_directory_uri() . '/short_code/datasearch/datasearch.html' );

	return $message;
}


add_shortcode( 'datasearch', 'datasearch' );


