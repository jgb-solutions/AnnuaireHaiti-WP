<?php

add_filter("gform_validation_message", "change_message", 10, 2);
function change_message($message, $form) {
  return '<div class="validation_error">Il y a une erreur dans la forme. Rassurez-vous d\'enter les informations correctement avant de la soumettre.</div>';
}

//Change upload directory for all forms
/*
add_filter("gform_upload_path", "change_upload_path", 20, 2);
function change_upload_path($path_info, $form_id){
     $path_info["path"] = "/new/path/";
     $path_info["url"] = "http://new_url.com/images/";
     return $path_info;
}
*/

/*
Change upload directory for specific form,
the "4" in the gform_upload_path_4 below is the form id
and this is what you would change for the form you want to customize
*/
// add_filter("gform_upload_path_2", "change_upload_path");
// function change_upload_path($path_info){
//      $path_info["path"] = $_SERVER['DOCUMENT_ROOT'] . '/data/a/';
//      $path_info["url"] = home_url('/data/a/' );
//      return $path_info;
// }

// function form_submit_button($button,$form){
//     return '<input type="submit" class="btn btn-primary btn-large" id="gform_submit_button_' . $form['id'] . '" value="' . $form['button']['text'] . '">';
// }
// add_filter('gform_submit_button_1','form_submit_button',10,2);

// filter the Gravity Forms button type
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='button' id='gform_submit_button_{$form['id']}'><span><i class='fa fa-paper-plane'></i> Envoyer</span></button>";
}