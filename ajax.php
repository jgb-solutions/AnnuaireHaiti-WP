<?php

/*
******* Post View Count **********
*/
add_action( 'wp_ajax_nopriv_post_view_count', 'post_view_count' );
add_action( 'wp_ajax_post_view_count', 'post_view_count' );

function post_view_count()
{
	$id = $_GET['post_id'];
	$currentView = (int) get_post_meta( $id, 'post_view_count', true );
	$newView = $currentView + 1;
	update_post_meta( $id, 'post_view_count', $newView );
	echo $newView;
	die();
}
/*
********* AH Search ***********
*/

add_action( 'wp_ajax_nopriv_ah_search', 'ah_search' );
add_action( 'wp_ajax_ah_search', 'ah_search' );

function ah_search()
{
	$query 	= $_GET['s'];
	$r 		= array();
	$i 		= 0;

	$result = new WP_Query( 's=' . $query );

	if ( $result->have_posts() ):
		while( $result->have_posts() ) : $result->the_post();

			$r[$i]['title'] 	= get_the_title();
			$r[$i]['url']		= get_the_permalink();
			$r[$i]['type']		= get_post_type();
			$i++;

		endwhile;
	endif;

	wp_send_json( $r );
}