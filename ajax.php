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
	$query 	= isset( $_GET['s'] ) ? htmlspecialchars( $_GET['s'] ) : '';
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

/*
* Contact Form
*/
/* AJAX check  */

add_action( 'wp_ajax_nopriv_ah_contact_form', 'ah_contact_form' );
add_action( 'wp_ajax_ah_contact_form', 'ah_contact_form' );

function ah_contact_form()
{
	$mailInfo = array();
	$notice = '';


	if ( $_REQUEST['name'] === '' ) {
	  $notice = 'Please enter your name. <br />';
	}
	if ( $_REQUEST['email'] === '' ) {
	$notice .= 'Please enter your email. <br />';
	}
	if ( $_REQUEST['subject'] === '' ) {
	$notice .= 'Please Enter your subject. <br />';
	}
	if ( $_REQUEST['message'] === '' ) {
	$notice .= 'Please Enter your message';
	}

	if ( $notice === '' ) {

		$from      = $_POST['email'];
		$fromName  = $_POST['name'];
		$subject   = isset( $_POST['subject'] ) ? $_POST['subject'] : 'Champ sujet vide';
		$message   = $_POST['message'];
		$headers[] = 'From: ' . $fromName . '<' . $from . '>';
		$headers[] = 'Reply-To: ' . $fromName . '<' . $from . '>';
		$headers[] = 'Content-Type: text/html; charset=UTF-8';


		if ( wp_mail( get_bloginfo('admin_email'), $subject, $message, $headers ) ) {
			echo 1;
		 	// echo 'You Sent <pre>' . print_r($_REQUEST, true) . '</pre>';
		} else {
		 	// echo 'Email not sent';
		 	echo 0;
		}
	} else {
		echo '<p style="color:red">From server <br />' . $notice . '</p>';
	}
	die();
}