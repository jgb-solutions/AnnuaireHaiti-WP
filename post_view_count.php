<?php

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