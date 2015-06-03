<?php

function ahField( $post_id, $key, $single = true )
{
	return get_post_meta( $post_id, $key, $single );
}

function ahget( $field )
{
	global $cfs;
	return $cfs->get( $field );
}

function ahgetfield( $key, $single = true )
{
	global $post;
	return get_post_meta( $post->ID, $key, $single );
}