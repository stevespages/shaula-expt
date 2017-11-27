<?php
/*
 * models/functions.php
 */
 
function uploadManualFile() {
	$upload_dir = 'media/manuals/';
	$upload_file = $upload_dir . basename(htmlentities($_FILES['manual_file_name']['name']));
	if (move_uploaded_file(htmlentities($_FILES['manual_file_name']['tmp_name']), $upload_file)) {
		return basename($_FILES['manual_file_name']['name']);
	} 	else {
			return "<p>something went wrong with file upload";
		}
}

function createFormArray($fields_array) {
	$form_array = array();
	foreach($fields_array as $key => $value) {
		$form_array[$value] = array ("input_value" => "", "error_mssg" => "", "form_label", "validate");
	}
	return $form_array;
}