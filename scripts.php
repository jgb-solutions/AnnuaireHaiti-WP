<?php

function ah_scripts()
{
    $url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js';
    // $test_url = @fopen( $url,'r' );
    // if ( $test_url !== false ) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', $url, '', '', true );

        wp_enqueue_style( 'ah-bootrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
        wp_enqueue_style( 'ah-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
        wp_enqueue_script( 'ah-bootrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '', true );

    // } else {
    //     wp_enqueue_style( 'ah-bootrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    //     wp_enqueue_style( 'ah-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
    //     wp_enqueue_script( 'ah-bootrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    // }

    wp_enqueue_style( 'ah-gfonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,400' );
    wp_enqueue_style( 'ah-site', get_template_directory_uri() . '/css/site.css' );
    wp_enqueue_script( 'ah-site-js', get_template_directory_uri() . '/js/site.js', array('jquery'), '', true );
    wp_localize_script(
        'ah-site-js',
        'AH_JS',
        array(
            'site_url'  => home_url(),
            'api_url'   => home_url('/wp-json')
        )
    );
}
add_action( 'wp_enqueue_scripts', 'ah_scripts' );